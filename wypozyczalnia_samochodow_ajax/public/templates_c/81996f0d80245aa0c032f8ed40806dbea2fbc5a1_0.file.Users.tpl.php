<?php
/* Smarty version 3.1.33, created on 2025-03-22 21:07:00
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow_a/app/views/Users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67df186422f091_06901274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81996f0d80245aa0c032f8ed40806dbea2fbc5a1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow_a/app/views/Users.tpl',
      1 => 1737666932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67df186422f091_06901274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111044875167df18642181d6_14570609', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_111044875167df18642181d6_14570609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_111044875167df18642181d6_14570609',
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
