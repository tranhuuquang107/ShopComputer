<?php
/* Smarty version 3.1.29, created on 2016-06-23 14:44:11
  from "C:\wamp\www\doan_222\views\templates\layout\layoutSanpham.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576bd99bc7ae39_45168304',
  'file_dependency' => 
  array (
    'c947cac2542033c6afe43cc67425b0b00fb34824' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\layout\\layoutSanpham.tpl',
      1 => 1466685848,
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
function content_576bd99bc7ae39_45168304 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--head-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_4231576bd99bc5ba39_25456614',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  <body>
    <!--nav-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'nav', array (
  0 => 'block_23476576bd99bc63733_78495243',
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
  0 => 'block_5085576bd99bc675b3_17371761',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" id="dvMain">  
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_31570576bd99bc6f2b6_97363773',
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
  0 => 'block_11811576bd99bc6f2b0_09844144',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!--script-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'script', array (
  0 => 'block_32544576bd99bc76fb6_08265853',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html>
<?php }
/* {block 'head'}  file:layout/layoutSanpham.tpl */
function block_4231576bd99bc5ba39_25456614($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'nav'}  file:layout/layoutSanpham.tpl */
function block_23476576bd99bc63733_78495243($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'nav'} */
/* {block 'banner_left'}  file:layout/layoutSanpham.tpl */
function block_5085576bd99bc675b3_17371761($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'banner_left'} */
/* {block 'content'}  file:layout/layoutSanpham.tpl */
function block_31570576bd99bc6f2b6_97363773($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:layout/layoutSanpham.tpl */
function block_11811576bd99bc6f2b0_09844144($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'script'}  file:layout/layoutSanpham.tpl */
function block_32544576bd99bc76fb6_08265853($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
}
