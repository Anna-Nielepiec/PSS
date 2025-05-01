<?php
/* Smarty version 4.5.2, created on 2025-04-20 16:06:03
  from 'tpl_body:25' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6804ff4b3b6638_49419210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd44cb2728e71d341460b2e1d701f49fd57aed9f' => 
    array (
      0 => 'tpl_body:25',
      1 => '1745157959',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804ff4b3b6638_49419210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<body>

    <!-- Header -->
    <?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


    <!-- Opis -->
    <section id="main">
      <div class="inner">
        <header class="major special">
          <h1>Kontakt</h1>
          <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
        </header>
        <a href="#" class="image fit">
          <img src="/cmsms/template/assets/images/pic11.jpg" alt="">
        </a>
        <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
      </div>
    </section>

     <!-- Footer -->
    <?php echo smarty_function_global_content(array('name'=>"Template-Footer"),$_smarty_tpl);?>



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
