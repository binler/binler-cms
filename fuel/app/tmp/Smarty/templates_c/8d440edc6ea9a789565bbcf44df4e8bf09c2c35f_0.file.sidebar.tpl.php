<?php
/* Smarty version 3.1.31, created on 2017-01-18 16:18:05
  from "/media/sf_sitenew/b-cms/fuel/app/views/admin/partial/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587f32cd529c23_23449407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d440edc6ea9a789565bbcf44df4e8bf09c2c35f' => 
    array (
      0 => '/media/sf_sitenew/b-cms/fuel/app/views/admin/partial/sidebar.tpl',
      1 => 1484731081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587f32cd529c23_23449407 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="/admin"><span class="highlight"><?php echo Config::get('cms_name');?>
</span> Admin</a>
        <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="<?php echo (Uri::segment(2) == '' ? 'active' : '');?>
">
                <a href="/admin">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">Trang chính</div>
                </a>
            </li>
            <li class="<?php echo (Uri::segment(2) == 'page' ? 'active' : '');?>
">
                <a href="/admin/page">
                    <div class="icon">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Quản lý trang</div>
                </a>
            </li>
            <li class="<?php echo (Uri::segment(2) == 'product' ? 'active' : '');?>
">
                <a href="/admin/product">
                    <div class="icon">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                    </div>
                    <div class="title">Quản lý sản phẩm</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <ul class="menu">
            <li>
                <a href="/admin/setting">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </li>
            <li><a href="#"><span class="flag-icon flag-icon-vn flag-icon-squared"></span></a></li>
        </ul>
    </div>
</aside>
<?php }
}
