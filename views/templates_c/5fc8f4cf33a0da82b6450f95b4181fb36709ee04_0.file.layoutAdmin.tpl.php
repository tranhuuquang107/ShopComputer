<?php
/* Smarty version 3.1.29, created on 2016-06-14 14:08:13
  from "C:\wamp\www\doan_222\views\templates\layout\layoutAdmin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ff3add6d011_69368222',
  'file_dependency' => 
  array (
    '5fc8f4cf33a0da82b6450f95b4181fb36709ee04' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\layout\\layoutAdmin.tpl',
      1 => 1465906084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/navbarAdmin.tpl' => 1,
    'file:layout/bannerAdmin_left.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_575ff3add6d011_69368222 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--head-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_5535575ff3add4dc18_21818869',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  <body>
    <!--nav-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'nav', array (
  0 => 'block_22252575ff3add59798_12729327',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!-- Begin page content -->
    <div class="container-fluid">
    
      <!--content-->
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <!--banner_left-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'banner_left', array (
  0 => 'block_6837575ff3add5d612_09316236',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_13642575ff3add61490_08118802',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
  
        </div>
      </div>
    </div>

    <!--footer-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_27835575ff3add65319_42994285',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!--script-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'script', array (
  0 => 'block_30168575ff3add69195_44917905',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

     </body>
</html>
<?php }
/* {block 'head'}  file:layout/layoutAdmin.tpl */
function block_5535575ff3add4dc18_21818869($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'nav'}  file:layout/layoutAdmin.tpl */
function block_22252575ff3add59798_12729327($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/navbarAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'nav'} */
/* {block 'banner_left'}  file:layout/layoutAdmin.tpl */
function block_6837575ff3add5d612_09316236($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/bannerAdmin_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'banner_left'} */
/* {block 'content'}  file:layout/layoutAdmin.tpl */
function block_13642575ff3add61490_08118802($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:layout/layoutAdmin.tpl */
function block_27835575ff3add65319_42994285($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'script'}  file:layout/layoutAdmin.tpl */
function block_30168575ff3add69195_44917905($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
}
