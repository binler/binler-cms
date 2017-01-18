<?php

namespace Product;
/**
 *
 */
class Controller_Product extends \Controller_Base
{

    public function action_index()
    {
        $this->template->title = 'Product';
        $this->template->content = '';
    }
}
