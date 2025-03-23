<?php
/* Smarty version 3.1.33, created on 2025-03-22 20:12:03
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow_a/app/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67df0b8300dd54_35801302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1da8e7b06ad30814153d34a2db856ee33477057' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow_a/app/views/home.tpl',
      1 => 1742670719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cars.tpl' => 1,
  ),
),false)) {
function content_67df0b8300dd54_35801302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110826798367df0b83000646_77305780', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_110826798367df0b83000646_77305780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110826798367df0b83000646_77305780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- hero section start  -->

  <section id="hero" class="position-relative jarallax" style="

        background-image: url(/wypozyczalnia_samochodow_a/public/images/Bg.jpg);

        background-repeat: no-repeat;

        background-size: cover;

        background-position: center;

        height: 800px;

      ">

    <div class="container-fluid">

      <div class="hero-content container justify-content-center text-center">

        <div class="row">

          <div class="detail mb-4">

            <h1 class="text-white">Znajdź swój idealny samochód</h1>

          </div>

        </div>

      </div>

    </div>



    <!-- search section start  -->

    <section id="search position-absolute top-50 start-50 translate-middle">
      <div class="container search-block p-5">
        <form id="car-search-form" class="row g-3"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cars" onsubmit="ajaxPostForm('car-search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cars', 'car-listing');document.getElementById('car-listing').scrollIntoView({ behavior: 'smooth' });  return false;">
          <fieldset>
            <div class="row justify-content-center">
              <div class="col-8">
                <input type="text" id="search_text" name="search_text" class="form-control" />
                <input type="hidden" id="page" name="page" value="1" />
              </div>
            </div>

            <div class="row justify-content-center pt-4">
              <div class="col-auto">
                <button class="btn btn-primary" type="submit">Znajdź samochód</button>
              </div>
              <div class="col-auto">
                  <button class="btn btn-dark" type="button" onclick="resetSearch('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cars'); document.getElementById('car-listing').scrollIntoView({ behavior: 'smooth' });">Resetuj wyszukiwanie</button>
              </div>
            </div>
          
          </fieldset>
        </form>

        

      </div>

    </section>

  </section>
 <div id="car-listing" >
 <?php $_smarty_tpl->_subTemplateRender("file:cars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div>

  </section>



<?php
}
}
/* {/block 'content'} */
}
