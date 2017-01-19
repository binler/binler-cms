<?php

namespace Page;
/**
 *
 */
class Controller_Page extends \Controller_Base
{

    public function action_index()
    {
        $this->template->pages = \Model_Page::find('all');
        $this->template->title = 'Quản lý trang';
        $this->template->content = \View_Smarty::forge('backend/page/index.tpl');
    }

    /**
     * View page create
     *
     */
    public function action_create()
    {
        // create page
        if(\Input::method() == 'POST')
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
                    $result['status'] = $this->__save_page($data);
                }

            }

            return \Format::forge($result)->to_json();
        }

        $this->template->title = 'Tạo trang';
        $this->template->content = \View_Smarty::forge('backend/page/create.tpl');
    }

    /**
     * Create a page.
     * @param  array  $data data page to save
     * @return Bool
     */
    private function __save_page($data = array())
    {
        $page = \Model_Page::forge($data);
        $status = $page->save();
        return $status;
    }

}
