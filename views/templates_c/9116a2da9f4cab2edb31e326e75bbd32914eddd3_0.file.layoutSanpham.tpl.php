<?php
/* Smarty version 3.1.29, created on 2016-06-19 16:18:15
  from "C:\xampp\htdocs\18-6doan\views\templates\layout\layoutSanpham.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766a9a7b6b869_63638537',
  'file_dependency' => 
  array (
    '9116a2da9f4cab2edb31e326e75bbd32914eddd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\18-6doan\\views\\templates\\layout\\layoutSanpham.tpl',
      1 => 1464443129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/nav.tpl' => 1,
    'file:layout/banner_left.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_5766a9a7b6b869_63638537 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--head-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_242575766a9a7b502e1_20176724',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  <body>
    <!--nav-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'nav', array (
  0 => 'block_221185766a9a7b54165_68883257',
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
  0 => 'block_34955766a9a7b57fe2_42456817',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_251725766a9a7b5be61_07956389',
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
  0 => 'block_97255766a9a7b5fce9_74034869',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!--script-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'script', array (
  0 => 'block_294265766a9a7b63b68_24665157',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html>
<?php }
/* {block 'head'}  file:layout/layoutSanpham.tpl */
function block_242575766a9a7b502e1_20176724($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'nav'}  file:layout/layoutSanpham.tpl */
function block_221185766a9a7b54165_68883257($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'nav'} */
/* {block 'banner_left'}  file:layout/layoutSanpham.tpl */
function block_34955766a9a7b57fe2_42456817($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'banner_left'} */
/* {block 'content'}  file:layout/layoutSanpham.tpl */
function block_251725766a9a7b5be61_07956389($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:layout/layoutSanpham.tpl */
function block_97255766a9a7b5fce9_74034869($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'script'}  file:layout/layoutSanpham.tpl */
function block_294265766a9a7b63b68_24665157($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
}
