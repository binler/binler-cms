<?php

return array(
    'admin' => array('admin/admin', 'name' => 'dashboard'),
    'admin/login' => array('admin/login', 'name' => 'login'),
    'admin/logout' => array('admin/logout', 'name' => 'logout'),
    // module page
    'admin/page' => array('page/page', 'name' => 'index_page'),
    'admin/page/create' => array('page/page/create', 'name' => 'create_page'),
    'admin/page/edit/:id'   => array('page/page/edit/$1', 'name' => 'edit_page'),
    // module product
    'admin/product' => array('product/product', 'name' => 'index_product'),
);
