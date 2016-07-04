<?php
/* Smarty version 3.1.29, created on 2016-07-04 07:35:08
  from "C:\xampp\htdocs\24-6doan\views\templates\layout\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5779f58c11d6a1_52745021',
  'file_dependency' => 
  array (
    'f39c401fa716f09a1fcff1a5aae6ff73d25d0778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\24-6doan\\views\\templates\\layout\\nav.tpl',
      1 => 1467610506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5779f58c11d6a1_52745021 ($_smarty_tpl) {
?>
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Lập trình và CSDL</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thiết bị PC <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Màn hình</a></li>
                <li><a href="#">Mainboard</a></li>
                <li><a href="#">Thiết bị lưu trữ</a></li>
                <li><a href="#">CPU</a></li>
                <li><a href="#">RAM</a></li>
                <li><a href="#">Bàn phím</a></li>
                <li><a href="#">Chuột</a></li>
                <li><a href="#">Linh tinh</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laptop<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Apple</a></li>
                <li><a href="#">Sony</a></li>
                <li><a href="#">Asus</a></li>
                
                <li><a href="#">HP</a></li>
                <li><a href="#">Dell</a></li>
                <li><a href="#">Acer</a></li>
                <li><a href="#">Lenovo</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Điện thoại<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Apple</a></li>
                <li><a href="#">Sony</a></li>
                <li><a href="#">Asus</a></li>
                
                <li><a href="#">HP</a></li>
                <li><a href="#">Dell</a></li>
                <li><a href="#">Acer</a></li>
                <li><a href="#">Lenovo</a></li>
                
              </ul>
            </li>
            <li><a href="#about">Sản phẩm mới</a></li>
            <li><a href="#contact">Sản phẩm khuyến mãi</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin tức <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tin công nghệ</a></li>
                <li><a href="#">Sản phẩm trả góp</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>            
          </ul>        
                <form class="form-inline">
              <input   type="text" class="form-control" style="width:200px" id="txtGtTim"/>
              <a type="submit" onclick="return false" class="btn btn-danger" id="btnThucHienTim">Search</a> 
            </form>                    
        </div><!--/.nav-collapse -->  
      </div>
    </nav>  <?php }
}
