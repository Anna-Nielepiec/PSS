<?php
/* Smarty version 3.1.33, created on 2025-01-24 23:31:42
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/Users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_679414ce1f5481_27277637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5043f01717bf36aa9f57bf27b8a81d15ce5a8b7a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/Users.tpl',
      1 => 1737666932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679414ce1f5481_27277637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759279305679414ce1dbce1_04393872', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1759279305679414ce1dbce1_04393872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1759279305679414ce1dbce1_04393872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



  <section id="card">

    <div class="container ">

        <h2 class="text-uppercase text-center text-dark py-5">

            Użytkownicy

        </h2>

        <div class="row">
        
            <div class="col">
                
                <ol class="list-group list-group-numbered">
                
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                
                                <div class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</div>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>


                            </div>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </ol>

            </div>
            
        </div>

    </div>

  </section>
<?php
}
}
/* {/block 'content'} */
}
