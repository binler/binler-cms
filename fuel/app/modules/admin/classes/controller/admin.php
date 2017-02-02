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

}
