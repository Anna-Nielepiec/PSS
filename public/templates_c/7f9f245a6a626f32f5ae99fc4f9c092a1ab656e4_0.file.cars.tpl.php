<?php
/* Smarty version 3.1.33, created on 2025-01-24 23:28:36
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67941414e7a2d9_81099393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9f245a6a626f32f5ae99fc4f9c092a1ab656e4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/cars.tpl',
      1 => 1737581376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67941414e7a2d9_81099393 (Smarty_Internal_Template $_smarty_tpl) {
?>

 <!-- Great cars section start  -->

  <section id="card">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark pt-5">

        Samochody do wynajęcia

      </h2>

      <div class="row">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
?>

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'car_details','id'=>$_smarty_tpl->tpl_vars['car']->value['id']),$_smarty_tpl ) );?>
" class="ratio ratio-4x3"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['car']->value['main_image'];?>
" alt="" class="img-fluid object-fit-cover" /></a>

            </div>

            <div class="text-center text-dark text-uppercase pt-2">

                <h4><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
</h4>

            </div>
 </div>

        </div>
          

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         

      

       

      </div>

    </div>

  </section>
<?php }
}
