<?php
/* Smarty version 4.5.2, created on 2025-05-10 08:24:14
  from 'cms_template:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_681ef10e70db52_37920469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1746723513',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681ef10e70db52_37920469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<!DOCTYPE html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 – <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>


  <link rel="stylesheet" href="/cmsms/template/assets/css/main.css">

    
</head>
<body>

  <!-- Header -->
  <?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


  

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

  <!-- Footer -->
  <?php echo smarty_function_global_content(array('name'=>"Template-Footer_down"),$_smarty_tpl);?>


  <!-- Scripts -->
  <?php echo '<script'; ?>
 src="/cmsms/template/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/cmsms/template/assets/js/skel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/cmsms/template/assets/js/util.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/cmsms/template/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
