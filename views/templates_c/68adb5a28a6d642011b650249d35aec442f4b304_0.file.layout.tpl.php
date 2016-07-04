<?php
/* Smarty version 3.1.29, created on 2016-06-23 14:20:25
  from "C:\wamp\www\doan_222\views\templates\layout\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576bd409709fc7_47568291',
  'file_dependency' => 
  array (
    '68adb5a28a6d642011b650249d35aec442f4b304' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\layout\\layout.tpl',
      1 => 1466684408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/nav.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_576bd409709fc7_47568291 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--head-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_22452576bd4096eea49_36279141',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  <body>
    <!--nav-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'nav', array (
  0 => 'block_24541576bd4096fa5c7_21999773',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!-- Begin page content -->
    <div class="container-fluid" style="margin-top:75px" id="dvMain">
      <!--content-->
      
      <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_22354576bd4096fe445_30801416',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    </div>

    <!--footer-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_23075576bd4096fe444_40070886',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!--script-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'script', array (
  0 => 'block_15136576bd4097022c4_73579781',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html>
<?php }
/* {block 'head'}  file:layout/layout.tpl */
function block_22452576bd4096eea49_36279141($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'nav'}  file:layout/layout.tpl */
function block_24541576bd4096fa5c7_21999773($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'nav'} */
/* {block 'content'}  file:layout/layout.tpl */
function block_22354576bd4096fe445_30801416($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:layout/layout.tpl */
function block_23075576bd4096fe444_40070886($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'script'}  file:layout/layout.tpl */
function block_15136576bd4097022c4_73579781($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
}
