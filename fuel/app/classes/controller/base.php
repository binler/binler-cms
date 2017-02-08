<?php

/**
 *Base controller
 *
 */
class Controller_Base extends Controller_Template
{

    public $template = 'backend/template.tpl';

    /**
     * Before function
     * @return [type] [description]
     */
    public function before()
    {
        Session::rotate();
        parent::before();
        // check logined
        if (!Auth::check() and Request::active()->action != 'login') {
            Response::redirect(Router::get('login'));
        }
    }

    public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }

}
