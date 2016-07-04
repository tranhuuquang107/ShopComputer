<?php
/* Smarty version 3.1.29, created on 2016-06-21 14:19:03
  from "C:\wamp\www\doan_222\views\templates\sanpham\cap_nhat_san_pham.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576930b77cfe03_05211347',
  'file_dependency' => 
  array (
    '957b56d1dae676b393e3ace36d12a694ca21383f' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\sanpham\\cap_nhat_san_pham.tpl',
      1 => 1466511541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutAdmin.tpl' => 1,
  ),
),false)) {
function content_576930b77cfe03_05211347 ($_smarty_tpl) {
if (!is_callable('smarty_function_huysession')) require_once 'C:\\wamp\\www\\doan_222\\smarty\\libs\\plugins\\function.huysession.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_15685576930b775e971_96933343',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:sanpham/cap_nhat_san_pham.tpl */
function block_15685576930b775e971_96933343($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
<h3 class="bg-primary" align="center">Cập nhật sản phẩm</h3>
 <?php if ($_smarty_tpl->tpl_vars['dataErr']->value['hinh'] != '') {?>
 <h3 style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['hinh'];?>
</h3>
 <?php }?>
 <?php if (isset($_smarty_tpl->tpl_vars['dataErr']->value['err'])) {?>
 <h3 style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['err'];?>
</h3>
 <?php }?>
 <?php if (isset($_SESSION['mss'])) {?>
 <h3 style="color:#ff0000"><?php echo $_SESSION['mss'];?>
</h3>
 <?php echo smarty_function_huysession(array('mss'=>''),$_smarty_tpl);?>

 <?php }?>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tên sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
" name="ten_san_pham" class="form-control" id="ten_san_pham" placeholder="Nhập tên sản phẩm"/>
   <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_san_pham'];?>

    </div>
  </div> 

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tên URL:</label>
    <div class="col-sm-10">
      <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham_url'];?>
" name="ten_san_pham_url" class="form-control" id="ten_san_pham_url" placeholder="Nhập tên URL"/>
          <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_san_pham_url'];?>

    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label  col-sm-2" for="email">Đơn giá:</label>
    <div class="col-sm-10">
      <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
" name="don_gia" class="form-control" id="don_gia" placeholder="Nhập đơn giá"/>
     <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['don_gia'];?>

    </div>
  </div>

  <div class="form-group">
    <label class="control-label  col-sm-2" for="email">Đơn giá khuyến mãi:</label>
    <div class="col-sm-10">
      <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia_khuyen_mai'];?>
" name="don_gia_khuyen_mai" class="form-control" id="don_gia_khuyen_mai" placeholder="Nhập đơn giá khuyến mãi"/>
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Số lần xem:</label>
    <div class="col-sm-10">
      <input type="text" value ="<?php echo $_smarty_tpl->tpl_vars['data']->value['so_lan_xem'];?>
" name="so_lan_xem" class="form-control" id="so_lan_xem" placeholder="Nhập số lần xem"/>
    </div>
  </div> 
  
	<div class="form-group">
    <label class="control-label col-sm-2" for="email">Sản phẩm mới:</label>
    <div class="col-sm-10">
       <input type="checkbox" value="1" name="san_pham_moi" class="form-checkbox" id="san_pham_moi"  <?php if ($_smarty_tpl->tpl_vars['data']->value['san_pham_moi'] == 1) {?> checked="checked"  <?php }?>/>
    </div>
  </div> 
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Mô tả tóm tắt:</label>
    <div class="col-sm-10">
     <textarea name="mo_ta_tom_tat" class="form-control" id="mo_ta_tom_tat"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_tom_tat'];?>
 </textarea>
       <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mo_ta_tom_tat'];?>

    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">Mô tả chi tiết:</label>
    <div class="col-sm-10">
      <textarea  name="mo_ta_chi_tiet" class="ckeditor" id="mo_ta_chi_tiet" ><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_chi_tiet'];?>
</textarea>
        <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mo_ta_chi_tiet'];?>

    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Mã loại:</label>
    <div class="col-sm-10">
      <select name="ma_loai" class="form-control" style="width:300px">
      
          <?php
$_from = $_smarty_tpl->tpl_vars['DSLoaiSanPham']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
          <?php $_smarty_tpl->tpl_vars['LoaiCha'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value[0], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'LoaiCha', 0);?>
          <?php $_smarty_tpl->tpl_vars['DSLoaiCon'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value[1], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'DSLoaiCon', 0);?>
              <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LoaiCha']->value['ten_loai'];?>
">
              <?php if ($_smarty_tpl->tpl_vars['DSLoaiCon']->value) {?>
              <?php
$_from = $_smarty_tpl->tpl_vars['DSLoaiCon']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_itemlc_1_saved_item = isset($_smarty_tpl->tpl_vars['itemlc']) ? $_smarty_tpl->tpl_vars['itemlc'] : false;
$_smarty_tpl->tpl_vars['itemlc'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['itemlc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemlc']->value) {
$_smarty_tpl->tpl_vars['itemlc']->_loop = true;
$__foreach_itemlc_1_saved_local_item = $_smarty_tpl->tpl_vars['itemlc'];
?>
              <?php if ($_smarty_tpl->tpl_vars['data']->value['ma_loai'] == $_smarty_tpl->tpl_vars['itemlc']->value['ma_loai']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['itemlc']->value['ma_loai'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['itemlc']->value['ten_loai'];?>
</option>
              <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['itemlc']->value['ma_loai'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemlc']->value['ten_loai'];?>
</option>
              <?php }?>
              <?php
$_smarty_tpl->tpl_vars['itemlc'] = $__foreach_itemlc_1_saved_local_item;
}
if ($__foreach_itemlc_1_saved_item) {
$_smarty_tpl->tpl_vars['itemlc'] = $__foreach_itemlc_1_saved_item;
}
?>
              <?php }?>
              </optgroup>
          <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
          
     </select>
    </div>    
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Hình:</label>
    <div class="col-sm-10">
      <input type="file" value ="" name="hinh" class="form-control" id="hinh" style="width:300px"/>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Ngày cập nhật:</label>
    <div class="col-sm-10">
      <input type="date" value ="<?php echo $_smarty_tpl->tpl_vars['data']->value['ngay_tao'];?>
" name="ngay_tao" class="form-control" id="ngay_tao" style="width:300px"/>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name ="btnCapNhat" class="btn btn-danger">Cập nhật</button>
    </div>
  </div>

</form>
<?php
}
/* {/block 'content'} */
}
