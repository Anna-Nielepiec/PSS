<?php
/* Smarty version 4.5.2, created on 2025-05-10 14:37:54
  from 'tpl_body:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_681f48a2ded578_70629533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e929a2c9d74a66a5213b8a066517df683c2aaaa4' => 
    array (
      0 => 'tpl_body:30',
      1 => '1746880671',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681f48a2ded578_70629533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),));
?>
<body>

    <!-- Header -->
  <?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );?>


  <header id="header">
    <h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
  </header>

  <nav id="menu">
    <?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

  </nav>

  <section id="content">
    <h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
    <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
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
