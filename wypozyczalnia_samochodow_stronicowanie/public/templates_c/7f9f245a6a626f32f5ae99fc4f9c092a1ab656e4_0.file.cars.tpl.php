<?php
/* Smarty version 3.1.33, created on 2025-03-22 18:33:22
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67def462d185c2_02809693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9f245a6a626f32f5ae99fc4f9c092a1ab656e4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/cars.tpl',
      1 => 1742664800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67def462d185c2_02809693 (Smarty_Internal_Template $_smarty_tpl) {
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

          <div style="margin-top: 50px; position: relative; display:flex;">
              <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>
                  <a class="pure-button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'home','page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl ) );?>
" title="Previous page" style="font-size: 200%; color: black; "><<i class="fas fa-angle-left"></i></a>
              <?php }?>
              <p style="font-size: 150%; position: absolute; right: 50%; margin-top: 0;">- <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 -</p>
              <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['max_page']->value) {?>
                  <a class="pure-button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'home','page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl ) );?>
" title="Next page" style="font-size: 200%; color: black;text-align: right; flex-grow: 1;">><i class="fas fa-angle-right"></i></a>
              <?php }?>
          </div>
         

      

       

      </div>

    </div>

  </section>
<?php }
}
