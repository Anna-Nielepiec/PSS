<?php
/* Smarty version 4.5.2, created on 2025-05-13 18:45:45
  from 'module_db_tpl:Gallery;Lightbox_A' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68237739e18ab2_24924808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a61b0b6b59193e05844830fa49c35f4eb0f09fb9' => 
    array (
      0 => 'module_db_tpl:Gallery;Lightbox_A',
      1 => 1747154743,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68237739e18ab2_24924808 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="gallery">
  <?php if (!empty($_smarty_tpl->tpl_vars['gallerytitle']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['gallerytitle']->value;?>
</h3><?php }?>
</div>

<section>
  <div class="box alt">
    <div class="inner"> 
      <div class="row 50% uniform">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
          <div class="4u">
            <div class="image fit">
              <div class="img">
                <?php if ($_smarty_tpl->tpl_vars['image']->value->isdir) {?>
                  <!-- To jest podgaleria -->
                  <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
                  </a><br />
                  <?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>

                <?php } else { ?>
                  <!-- To jest obraz -->
                  <a class="group" href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
"
                     data-title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;
if (!empty($_smarty_tpl->tpl_vars['image']->value->comment)) {?> &bull; &lt;em&gt;<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['image']->value->comment), ENT_QUOTES, 'UTF-8', true);?>
&lt;/em&gt;<?php }?>"
                     data-lightbox="cmsmsgallery<?php echo $_smarty_tpl->tpl_vars['galleryid']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
                  </a>
                <?php }?>
              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
</section>

<div class="galleryclear">&nbsp;</div><?php }
}
