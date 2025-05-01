<?php
/* Smarty version 4.5.2, created on 2025-04-20 14:58:38
  from 'tpl_body:26' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6804ef7e5ce062_68852349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad8109c5108364fff0b4269a015ffc8d99f9e790' => 
    array (
      0 => 'tpl_body:26',
      1 => '1745153894',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804ef7e5ce062_68852349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<body>

    <!-- Header -->
    <?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


    <!-- Gallery Section -->
    <section id="main">
      <div class="inner">
        <header class="major special">
          <h1>Galeria</h1>
          <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
        </header>

        <section>
          <h3>Zdjęcia</h3>

          <!-- cała galeria edytowalna w CMS -->
          <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>

        </section>
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
