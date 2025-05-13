<?php
/* Smarty version 4.5.2, created on 2025-05-07 23:16:27
  from 'cms_template:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_681bcdab37b640_06761831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1746652559',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681bcdab37b640_06761831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.metadata.php','function'=>'smarty_function_metadata',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
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
    <link rel="stylesheet" href="/cmsms/html5up-multiverse/assets/css/main.css" />
    <link rel="stylesheet" href="/cmsms/template/assets/css/main.css">
  </head>
  <body>

    <!-- Header -->
    <?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


    
    <!doctype html>
    <html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

    <head>
      <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
      <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

      <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

    </head>

    <body>
      <header id="header">
        <h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
      </header>

      <nav id="menu">
        
      </nav>

      <div class="row">
        <!-- Main Content -->
        <div id="main-content" class="8u">
          <section id="content">
            <h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
            
          </section>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" class="4u">
          <section>
            <header><h2>Pellentesque vulputate</h2></header>
            <ul class="style">
              <li>
                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                <img src="/cmsms/iridium/images/pic04.jpg" alt="" width="70" height="70">
                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
              </li>
              <li>
                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                <img src="/cmsms/iridium/images/pic05.jpg" alt="" width="70" height="70">
                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
              </li>
              <li>
                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                <img src="/cmsms/iridium/images/pic06.jpg" alt="" width="70" height="70">
                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
              </li>
              <li>
                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                <img src="/cmsms/iridium/images/pic05.jpg" alt="" width="70" height="70">
                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
              </li>
            </ul>
          </section>
        </div>
      </div>

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
    </html>
  </body>
</html><?php }
}
