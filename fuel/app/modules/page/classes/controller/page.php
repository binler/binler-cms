<?php

namespace Page;
/**
 *
 */
class Controller_Page extends \Controller_Base
{

    public function action_index()
    {
        $this->template->title = 'Page';
        $this->template->content = '';
    }
}
