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

}
