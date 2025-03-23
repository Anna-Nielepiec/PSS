<?php
/* Smarty version 3.1.33, created on 2025-01-24 23:29:46
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/car_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6794145a865a23_36162872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e9a8063bdf5cbdde7e73774a7e5ed22580841d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/car_details.tpl',
      1 => 1737584586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6794145a865a23_36162872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177429156794145a83eb09_79375658', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1177429156794145a83eb09_79375658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1177429156794145a83eb09_79375658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="card">

    <div class="container ">

        <h2 class="text-uppercase text-center text-dark"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h2>

        <div class="row py-3">

            <div class="col py-3">
                <div class="image-zoom">
                    <a href="" class="ratio ratio-4x3"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['car']->value['images'][0];?>
" alt="" class="img-fluid object-fit-cover" /></a>
                </div>
            </div>

            <div class="col">
                <div class="post py-4">
                    <h3><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
 </h3> 
                    <div>Numer rejestracyjny: <?php echo $_smarty_tpl->tpl_vars['car']->value['registration_number'];?>
</div>

                    <div class="pt-5 pb-2">Cena za dzień: <span class="fs-5"><?php echo $_smarty_tpl->tpl_vars['car']->value['price_per_day'];?>
 zł</span></div>

                    <div class="pt-3">
                      <?php if (isset($_smarty_tpl->tpl_vars['login']->value) && \core\RoleUtils::inRole("user")) {?>
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == "available") {?>
                          <h5> dostępny </h5>
                          <div class="text-dark text-uppercase mt-5">
                              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'rent','id'=>$_smarty_tpl->tpl_vars['car']->value['id']),$_smarty_tpl ) );?>
" type="button" class="btn btn-primary px-4">Wypożycz</a>
                          </div>
                          
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "waiting") {?>
                          <h5> oczekuje na zatwierdzenie </h5>
                        <?php } else { ?>
                          <h5> wypożyczony do <?php echo $_smarty_tpl->tpl_vars['rental_end_date']->value;?>
</h5>
                        <?php }?>
                      <?php }?>

                      <?php if (isset($_smarty_tpl->tpl_vars['login']->value) && \core\RoleUtils::inRole("handlowiec")) {?>
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == "available") {?>
                          <h5> dostępny </h5>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "waiting") {?>
                          <h5> oczekuje na zatwierdzenie </h5>
                          <div class="text-dark text-uppercase mt-5">
                              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'wait','id'=>$_smarty_tpl->tpl_vars['rental_id']->value,'car'=>$_smarty_tpl->tpl_vars['car']->value['id']),$_smarty_tpl ) );?>
" type="button" class="btn btn-primary px-4">Zatwierdź</a>
                          </div>
                        <?php } else { ?>
                          <h5> wypożyczony do <?php echo $_smarty_tpl->tpl_vars['rental_end_date']->value;?>
</h5>
                        <?php }?>
                      <?php }?>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="text-center ">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>

    </div>

  </section>
<?php
}
}
/* {/block 'content'} */
}
