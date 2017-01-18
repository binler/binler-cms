<?php

namespace Admin;
/**
 *
 */
class Controller_Admin extends \Controller_Base
{

    public static $name_cms  = 'Binler CMS';

    public function action_index()
    {
        $this->template->title = 'Bảng điều khiển';
        $this->template->content = \View_Smarty::forge('admin/index.tpl');
    }
}
