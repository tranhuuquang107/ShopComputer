<?php
/* Smarty version 3.1.29, created on 2016-06-24 13:37:28
  from "C:\xampp\htdocs\24-6doan\views\templates\khach_hang\dat_hang.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d1b78debf70_88259971',
  'file_dependency' => 
  array (
    'aed33cff7991ebd4427aa037aab692d3e299c42f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\24-6doan\\views\\templates\\khach_hang\\dat_hang.tpl',
      1 => 1465642363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutSanpham.tpl' => 1,
  ),
),false)) {
function content_576d1b78debf70_88259971 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_23321576d1b78dc4e71_63683232',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutSanpham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:khach_hang/dat_hang.tpl */
function block_23321576d1b78dc4e71_63683232($_smarty_tpl, $_blockParentStack) {
?>

<!---9/6-->
<form class="form-horizontal" role="form" method="post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="ten_khach_hang">Tên khách hàng:</label>
      <div class="col-sm-10">
        <input type="text" name="ten_khach_hang" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datakhachhang']->value['ten_khach_hang'];?>
" id="ten_khach_hang" placeholder="Nhập tên khách hàng"/>
        <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_khach_hang'];?>

      </div>
    </div>  
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phai">Phái:</label>
      <div class="col-sm-10">
      <?php if ($_smarty_tpl->tpl_vars['datakhachhang']->value['phai'] == 0) {?>
        <label><input type="radio" value="1" name="phai" class="form-checkbox" id="phai" />Nam</label>
        <label><input type="radio" value="0" name="phai" class="form-checkbox" id="phai" checked="true" />Nữ</label>
      <?php } else { ?>
        <label><input type="radio" value="1" name="phai" class="form-checkbox" id="phai" checked="true"/>Nam</label>
        <label><input type="radio" value="0" name="phai" class="form-checkbox" id="phai" />Nữ</label>
      <?php }?>
      </div>
    </div> 
   
   <div class="form-group">
      <label class="control-label col-sm-2" for="ngay_sinh">Ngày sinh:</label>
      <div class="col-sm-10">
        <input type="date"name="ngay_sinh" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datakhachhang']->value['ngay_sinh'];?>
" id="ngay_sinh" placeholder="Nhập ngày sinh"/>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="dia_chi">Địa chỉ:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['datakhachhang']->value['dia_chi'];?>
" id="dia_chi" placeholder="Nhập địa chỉ"/>
        <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dia_chi'];?>

      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="dien_thoai">Điện thoại:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dien_thoai" value="<?php echo $_smarty_tpl->tpl_vars['datakhachhang']->value['dien_thoai'];?>
" id="dien_thoai" placeholder="Nhập điện thoại"/>
        <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dien_thoai'];?>

      </div>
    </div>
   
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['datakhachhang']->value['email'];?>
" id="email" placeholder="Nhập email"/>
        <?php echo $_smarty_tpl->tpl_vars['dataErr']->value['email'];?>

      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="btnThem">Thêm</button>
      </div>
    </div>
  </form>
  <!--end-->
<?php
}
/* {/block 'content'} */
}
