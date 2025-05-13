<?php
/* Smarty version 4.5.2, created on 2025-04-19 20:17:26
  from 'cms_template:a_part_top' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6803e8b65d6277_58136768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1745084873',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6803e8b65d6277_58136768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		<?php echo Navigator::function_plugin(array('template'=>"a_menu_main"),$_smarty_tpl);?>

	</nav><?php }
}
