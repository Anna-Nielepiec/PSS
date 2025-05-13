<?php
/* Smarty version 4.5.2, created on 2025-04-19 20:17:26
  from 'tpl_body:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6803e8b65b7505_35848198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650460e1799b95e04d87ae3036cb2c53a06b88df' => 
    array (
      0 => 'tpl_body:14',
      1 => '1745085193',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6803e8b65b7505_35848198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),));
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>


	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>


	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
