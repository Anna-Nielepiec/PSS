<?php
/* Smarty version 4.5.2, created on 2025-04-19 19:27:53
  from 'cms_template:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6803dd19be8412_25474948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1745083600',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6803dd19be8412_25474948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>
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
		
	</nav>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>
</body>

</html><?php }
}
