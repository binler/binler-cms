<?php
/* Smarty version 3.1.31, created on 2017-01-18 15:28:20
  from "/media/sf_sitenew/b-cms/fuel/app/views/admin/template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587f2724246718_53053740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6126f74cd7447619c0b2650ca0807ca1cd1c15e7' => 
    array (
      0 => '/media/sf_sitenew/b-cms/fuel/app/views/admin/template.tpl',
      1 => 1484728097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587f2724246718_53053740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo render('admin/partial/head.tpl');?>

</head>
<body>
    <div class="app app-default">
        <!-- Sidebar  -->
        <?php echo render('admin/partial/sidebar.tpl');?>

        <!-- End Sidebar -->

        <!-- App container -->
        <div class="app-container">

            <!-- Navbar -->
            <?php echo render('admin/partial/navbar.tpl');?>

            <!-- End Navbar -->

            <!-- Content -->
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <!-- End Content -->

            <!-- Floating -->
            <?php echo render('admin/partial/float.tpl');?>

            <!-- End Floating -->

            <!-- Footer -->
            <?php echo render('admin/partial/footer.tpl');?>

            <!-- End Footer -->

        </div>
        <!-- End App container -->

    </div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_js'][0][0]->asset_js(array('refs'=>'vendor.js','attrs'=>array()),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_js'][0][0]->asset_js(array('refs'=>'app.js','attrs'=>array()),$_smarty_tpl);?>

</body>
</html>
<?php }
}
