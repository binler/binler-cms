<?php

namespace Product;
/**
 *
 */
class Controller_Product extends \Controller_Base
{

    public function action_index()
    {
        $this->template->title = 'Quản lý sản phẩm';
        $this->template->content = \View_Smarty::forge('backend/product/index.tpl');
    }
}
