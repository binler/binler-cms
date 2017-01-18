<?php
/* Smarty version 3.1.31, created on 2017-01-18 15:42:00
  from "/media/sf_sitenew/b-cms/fuel/app/views/admin/partial/head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587f2a58b31143_29928805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62980bcdbbfe9f6f786f96fbb45155d4717f189d' => 
    array (
      0 => '/media/sf_sitenew/b-cms/fuel/app/views/admin/partial/head.tpl',
      1 => 1484728918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587f2a58b31143_29928805 (Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_css'][0][0]->asset_css(array('refs'=>'vendor.css','attrs'=>array()),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_css'][0][0]->asset_css(array('refs'=>'flat-admin.css','attrs'=>array()),$_smarty_tpl);?>

<title><?php echo (($_smarty_tpl->tpl_vars['title']->value).(' | ')).(Config::get('cms_name'));?>
</title>
<?php }
}
