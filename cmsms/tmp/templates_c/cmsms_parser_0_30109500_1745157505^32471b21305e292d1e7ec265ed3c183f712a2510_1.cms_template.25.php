<?php
/* Smarty version 4.5.2, created on 2025-04-20 15:58:25
  from 'cms_template:25' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6804fd814bde01_65404234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32471b21305e292d1e7ec265ed3c183f712a2510' => 
    array (
      0 => 'cms_template:25',
      1 => '1745157201',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804fd814bde01_65404234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<!DOCTYPE HTML>
<!--
    Generic - Introspect by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <head>
    <title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 – Aktualności</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/cmsms/template/assets/css/main.css">
  </head>
  <body>

    <!-- Header -->
    <?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


    <!-- Opis -->
    <section id="main">
      <div class="inner">
        <header class="major special">
          <h1>Aktualności</h1>
          <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
        </header>
        <a href="#" class="image fit">
          <img src="/cmsms/template/assets/images/pic11.jpg" alt="">
        </a>
        
      </div>
    </section>

    <!-- Footer_down -->
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
