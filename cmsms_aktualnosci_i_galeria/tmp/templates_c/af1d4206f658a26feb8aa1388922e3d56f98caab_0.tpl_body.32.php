<?php
/* Smarty version 4.5.2, created on 2025-05-13 17:19:04
  from 'tpl_body:32' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682362e813dca6_81273690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1d4206f658a26feb8aa1388922e3d56f98caab' => 
    array (
      0 => 'tpl_body:32',
      1 => '1747149540',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682362e813dca6_81273690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<!-- Gallery Styles and Scripts -->
 
 
    <link rel="stylesheet" href="/cmsms/template/assets/css/main.css">
    
    



<?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>

 
<div id="main">
<div class="inner">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['Gallery'][0], array( array('dir'=>'zdjecia/gory'),$_smarty_tpl ) );?>

        <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
</div>
</div>
<?php echo smarty_function_global_content(array('name'=>"Template-Footer_down"),$_smarty_tpl);
}
}
