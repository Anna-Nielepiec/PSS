<?php
/* Smarty version 4.5.2, created on 2025-05-10 08:28:34
  from 'cms_template:a_news_summary' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_681ef212345914_00393485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1746858495',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681ef212345914_00393485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/modifier.cms_date_format.php','function'=>'smarty_modifier_cms_date_format',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cmsms/lib/plugins/modifier.cms_escape.php','function'=>'smarty_modifier_cms_escape',),));
?>
<div class="row">
  <!-- Lista newsów -->
  <div class="8u">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
    <div class="NewsSummary">
      <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
        <div class="NewsSummaryPostdate">
          <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

        </div>
      <?php }?>

      <div class="NewsSummaryLink">
        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        <div class="NewsSummarySummary">
          <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

        </div>
        <div class="NewsSummaryMorelink">
          [<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]
        </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
        <div class="NewsSummaryContent">
          <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

        </div>
        <div class="NewsSummaryMorelink">
          [<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]
        </div>
      <?php }?>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
    <p>
      <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {?>
        <?php echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
      <?php }?>
      <?php echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

      <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
        &nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

      <?php }?>
    </p>
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
