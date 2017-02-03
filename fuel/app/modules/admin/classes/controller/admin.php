<?php

namespace Admin;
/**
 *
 */
class Controller_Admin extends \Controller_Base
{
    /**
     * View Dashboard
     *
     */
    public function action_index()
    {
        $this->template->title = 'Bảng điều khiển';
        $this->template->content = \View_Smarty::forge('backend/admin/index.tpl');
    }

    public function action_login()
    {
        $data['title'] = 'Đăng nhập';
        $data['cms_name'] = \Config::get('cms_name');
        return \View_Smarty::forge('backend/admin/login.tpl', $data);
    }

    public function post_login()
    {
        if (\Input::method() == 'POST')
        {
            $response = array();
            // check the credentials.
            if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
            {
                // logged in, go back to the page the user came from, or the
                // application dashboard if no previous page can be detected
                $response['status'] = true;
                $response['redirect'] = \Router::get('dashboard');
            }
            else
            {
                // login failed, show an error message
                $response['status'] = false;
                $response['message'] = 'Username hoặc password sai!';
            }
            return \Format::forge($response)->to_json();
        }
    }

}
