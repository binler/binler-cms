<?php

/**
 *Base controller
 *
 */
class Controller_Base extends Controller_Template
{

    public $template = 'admin/template.tpl';

    /**
     * Before function
     * @return [type] [description]
     */
    public function before()
    {
        Session::rotate();
        parent::before();
    }

    public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }

}
