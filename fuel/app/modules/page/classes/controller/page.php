<?php

namespace Page;
/**
 *
 */
class Controller_Page extends \Controller_Base
{

    public function action_index()
    {
        $all_page = \Model_Page::find('all', array(
            'order_by' => array('created_at' => 'desc'),
        ));
        $this->template->pages = $all_page;
        $this->template->title = 'Quản lý trang';
        $this->template->content = \View_Smarty::forge('backend/page/index.tpl');
    }

    /**
     * Delete page
     * @return JSON
     */
    public function post_index()
    {
        $page_id = \Input::post('page_id');
        $status = array();
        foreach ($page_id as $item) {
            $page = \Model_Page::find($item);
            $status = $page->delete();
            if(!$status)
            {
                $status = array(
                    'status' => false,
                    'message' => 'Có lỗi trong quá trình xử lý'
                );
                break;
            }
        }
        $status = array('status' => true);
        return \Format::forge($status)->to_json();
    }

    /**
     * View page create
     *
     */
    public function action_create()
    {
        $this->template->title = 'Tạo trang';
        $this->template->content = \View_Smarty::forge('backend/page/create.tpl');
    }

    public function post_create()
    {
        $result = array();
        if(! \Security::check_token())
        {
            $result = array(
                'status' => false,
                'error' => 'CSRF Attack'
            );
        } else
        {
            $val = \Model_Page::validate('create');
            if(!$val->run())
            {
                $result = array(
                    'status' => false,
                    'error' => $val->error_message()
                );
            } else
            {
                $data = \Input::post();
                $result['status'] = $this->__create_page($data);
                $result['back'] = \Router::get('index_page');
            }

        }

        return \Format::forge($result)->to_json();
    }

    /**
     * Create a page.
     * @param  array  $data data page to save
     * @return Bool
     */
    private function __create_page($data = array())
    {
        $page = \Model_Page::forge($data);
        $status = $page->save();
        return $status;
    }

    /**
     * Dummy data
     * @return [type] [description]
     */
    public function action_test()
    {
        $faker = \Faker\Factory::create('vi_VN');
        for ($i=0; $i < 10; $i++) {
          $page = \Model_Page::forge(array(
              'page_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
              'page_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
              'page_content' => $faker->text,
              'page_status' => $faker->numberBetween($min = 0, $max = 1)
          ));
          $page->save();
        }
        return \Response::redirect('admin/page');
    }

    /**
     * View page edit page
     * @param  [type] $id id of page
     * @return View
     */
    public function action_edit($id = null)
    {
        $page = \Model_Page::find($id);
        (!$page) and \Response::redirect('admin/page');
        if(\Input::method() == 'POST')
        {
            return $this->__page_edit($page);
        }
        $this->template->title = 'Chỉnh sửa trang';
        $this->template->page = $page;
        $this->template->content = \View_Smarty::forge('backend/page/edit.tpl');
    }

    private function __page_edit($page)
    {
        $result = array();
        if(! \Security::check_token())
        {
            $result = array(
                'status' => false,
                'error' => 'CSRF Attack'
            );
        } else
        {
            $val = \Model_Page::validate('edit');
            if(!$val->run())
            {
                $result = array(
                    'status' => false,
                    'error' => $val->error_message()
                );
            } else
            {
                $page->set(\Input::post());
                $result['status'] = $page->save();
                $result['back'] = \Router::get('index_page');
            }

        }
        return \Format::forge($result)->to_json();
    }

}
