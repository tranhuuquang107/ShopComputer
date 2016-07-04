<?php
/* Smarty version 3.1.29, created on 2016-06-14 15:36:29
  from "C:\wamp\www\doan_222\views\templates\layout\navbarAdmin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5760085d1a4df1_12565846',
  'file_dependency' => 
  array (
    'c19d36e0d033e83f26294d6ed9044dc7c40b15c3' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\layout\\navbarAdmin.tpl',
      1 => 1465911386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5760085d1a4df1_12565846 ($_smarty_tpl) {
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hệ thống quản trị</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham.html">Sản phẩm</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/tin-tuc.html">Tin tức</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/khach-hang.html">Khách hàng</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung.html">Người dùng</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/dang-xuat.html">User:<?php echo $_SESSION['nguoi_dung']['ten_nguoi_dung'];?>
</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav><?php }
}
