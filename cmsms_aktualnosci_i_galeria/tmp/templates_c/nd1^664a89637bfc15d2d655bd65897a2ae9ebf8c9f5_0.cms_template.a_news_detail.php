<?php
/* Smarty version 4.5.2, created on 2025-05-10 13:53:34
  from 'cms_template:a_news_detail' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_681f3e3e3a3c97_14110886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664a89637bfc15d2d655bd65897a2ae9ebf8c9f5' => 
    array (
      0 => 'cms_template:a_news_detail',
      1 => '1746858425',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681f3e3e3a3c97_14110886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/modifier.cms_escape.php','function'=>'smarty_modifier_cms_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/modifier.cms_date_format.php','function'=>'smarty_modifier_cms_date_format',),));
?>
<div class="row">
  <!-- Główna treść -->
  <div id="main-content" class="8u">
    <h3 id="NewsPostDetailTitle"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h3>

    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
      <div id="NewsPostDetailDate">
        <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

      </div>
    <?php }?>

    <hr id="NewsPostDetailHorizRule" />

    <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
      <div id="NewsPostDetailSummary">
        <strong>
          <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

        </strong>
      </div>
    <?php }?>

    <div id="NewsPostDetailContent">      
      <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
    <div id="NewsPostDetailReturnLink"><?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?></div>
    <?php }?>
  </div>

  <!-- Sidebar -->
<!--  <div id="sidebar" class="4u">
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
  </div> -->
</div><?php }
}
