<?php
/* Smarty version 4.5.2, created on 2025-05-06 21:51:48
  from 'cms_template:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_681a68540f1aa8_96312205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1745157582',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681a68540f1aa8_96312205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html>
<head>
<title>Introspect by TEMPLATED</title><meta charset="utf-8"><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="/cmsms/template/assets/css/main.css"></head><body>

		<!-- Header -->
			<?php echo smarty_function_global_content(array('name'=>"Template-Header"),$_smarty_tpl);?>


		<!-- Banner -->
                     <?php if ($_smarty_tpl->tpl_vars['page_alias']->value == 'home') {?>
			<?php echo smarty_function_global_content(array('name'=>"Template-Banner"),$_smarty_tpl);?>

                     <?php }?>
          
                  
                  <!-- One -->
                       <section id="one">
                             <div class="inner">
                                
                             </div>
                       </section>

                   
                    <!-- Two -->
                   <?php if ($_smarty_tpl->tpl_vars['page_alias']->value == 'home') {?>
                         <?php echo smarty_function_global_content(array('name'=>"Template-Two"),$_smarty_tpl);?>

                   <?php }?>

			
		      <!-- Footer -->
                     <?php if ($_smarty_tpl->tpl_vars['page_alias']->value == 'home') {?>
			 <?php echo smarty_function_global_content(array('name'=>"Template-Footer"),$_smarty_tpl);?>

                       <?php }?>

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
