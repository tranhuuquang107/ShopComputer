<?php
/* Smarty version 3.1.29, created on 2016-06-19 16:18:23
  from "C:\xampp\htdocs\18-6doan\views\templates\layout\layoutAdmin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766a9af6e8be2_61765747',
  'file_dependency' => 
  array (
    '9de014c7e53c57979362945bc43fe21a75f3cb9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\18-6doan\\views\\templates\\layout\\layoutAdmin.tpl',
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
function content_5766a9af6e8be2_61765747 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--head-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_18315766a9af6cd667_34812971',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  <body>
    <!--nav-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'nav', array (
  0 => 'block_76365766a9af6d14e0_55912884',
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
  0 => 'block_316135766a9af6d5369_40572343',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_231545766a9af6dd060_33402546',
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
  0 => 'block_283555766a9af6dd063_88354580',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <!--script-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'script', array (
  0 => 'block_172165766a9af6e0ee5_29573076',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

     </body>
</html>
<?php }
/* {block 'head'}  file:layout/layoutAdmin.tpl */
function block_18315766a9af6cd667_34812971($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'nav'}  file:layout/layoutAdmin.tpl */
function block_76365766a9af6d14e0_55912884($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/navbarAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'nav'} */
/* {block 'banner_left'}  file:layout/layoutAdmin.tpl */
function block_316135766a9af6d5369_40572343($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/bannerAdmin_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'banner_left'} */
/* {block 'content'}  file:layout/layoutAdmin.tpl */
function block_231545766a9af6dd060_33402546($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:layout/layoutAdmin.tpl */
function block_283555766a9af6dd063_88354580($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'script'}  file:layout/layoutAdmin.tpl */
function block_172165766a9af6e0ee5_29573076($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
}
