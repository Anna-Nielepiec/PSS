<?php
/* Smarty version 4.5.2, created on 2025-05-13 17:36:23
  from 'tpl_body:33' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682366f73c9648_78206189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc6d4015a0207ffcc00bd84890043ccaea513753' => 
    array (
      0 => 'tpl_body:33',
      1 => '1747150542',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682366f73c9648_78206189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<link rel="stylesheet" href="/cmsms/template/assets/css/main.css">

<?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


<style>
  .inner {
    padding-left: 2em;
    padding-right: 2em;
  }
</style>

<div id="main">
  <div class="inner">
    <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
  </div>
</div>

<?php echo smarty_function_global_content(array('name'=>"Template-Footer_down"),$_smarty_tpl);
}
}
