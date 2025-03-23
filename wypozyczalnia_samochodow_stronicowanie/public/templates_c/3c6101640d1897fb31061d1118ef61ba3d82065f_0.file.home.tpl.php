<?php
/* Smarty version 3.1.33, created on 2025-03-22 18:25:36
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67def2900a9aa9_91545523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c6101640d1897fb31061d1118ef61ba3d82065f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/home.tpl',
      1 => 1742664334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cars.tpl' => 1,
  ),
),false)) {
function content_67def2900a9aa9_91545523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164056020967def29009b523_21484174', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_164056020967def29009b523_21484174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164056020967def29009b523_21484174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- hero section start  -->

  <section id="hero" class="position-relative jarallax" style="

        background-image: url(/wypozyczalnia_samochodow/public/images/Bg.jpg);

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
        <form class="row g-3" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
home">
          <fieldset>
            <div class="row justify-content-center">
              <div class="col-8">
                <input type="text" name="search_text" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->text;?>
" class="form-control" />
              </div>
            </div>

            <div class="row justify-content-center pt-4">
              <div class="col-auto">
                <button class="btn btn-primary" type="submit">Znajdź samochód</button>
              </div>
            </div>
          
          </fieldset>
        </form>

        

      </div>

    </section>

  </section>
 
 <?php $_smarty_tpl->_subTemplateRender("file:cars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </section>



<?php
}
}
/* {/block 'content'} */
}
