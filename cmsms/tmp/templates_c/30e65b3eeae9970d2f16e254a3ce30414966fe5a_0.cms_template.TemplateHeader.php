<?php
/* Smarty version 4.5.2, created on 2025-04-20 16:03:16
  from 'cms_template:Template-Header' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6804fea42b8dc0_53168892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e65b3eeae9970d2f16e254a3ce30414966fe5a' => 
    array (
      0 => 'cms_template:Template-Header',
      1 => '1745157776',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804fea42b8dc0_53168892 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="header">
  <div class="inner">
    <!-- Link do strony głównej (logo) -->
    <a href="/cmsms/index.php?page=home" class="logo">super_strona</a>
    <nav id="nav">
      <!-- Linki do innych stron, używając cms_selflink -->
        <a href="/cmsms/index.php?page=home">Home</a>
  <a href="/cmsms/index.php?page=galeria">Galeria</a>
  <a href="/cmsms/index.php?page=kontakt">Kontakt</a>
  

    </nav>
  </div>
</header>
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a><?php }
}
