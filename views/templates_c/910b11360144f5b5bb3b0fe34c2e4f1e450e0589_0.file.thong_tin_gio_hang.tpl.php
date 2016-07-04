<?php
/* Smarty version 3.1.29, created on 2016-06-20 14:03:26
  from "C:\xampp\htdocs\18-6doan\views\templates\khach_hang\thong_tin_gio_hang.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5767db8e94edc6_81690221',
  'file_dependency' => 
  array (
    '910b11360144f5b5bb3b0fe34c2e4f1e450e0589' => 
    array (
      0 => 'C:\\xampp\\htdocs\\18-6doan\\views\\templates\\khach_hang\\thong_tin_gio_hang.tpl',
      1 => 1465469539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutSanpham.tpl' => 1,
  ),
),false)) {
function content_5767db8e94edc6_81690221 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_169995767db8dd520a9_14206716',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutSanpham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:khach_hang/thong_tin_gio_hang.tpl */
function block_169995767db8dd520a9_14206716($_smarty_tpl, $_blockParentStack) {
?>

<div class="panel panel-info">
  <div class="panel-heading">Thông tin giỏ hàng</div>
  <div class="panel-body">
    <?php if (isset($_smarty_tpl->tpl_vars['TTGH']->value)) {?>
    <form action="" method="post">
        <table class="table table-condensed">
             <thead> 
                <tr> 
                  <td>#</td>
                  <td>Mã sản phẩm</td> 
                  <td>Tên sản phẩm</td>
                  <td align="right">Đơn giá</td> 
                  <td align="right">Số lượng</td>
                  <td align="right">Thành tiền</td>
                 </tr>
             </thead> 
             <tbody> 
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['TTGH']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tt_0_saved_item = isset($_smarty_tpl->tpl_vars['tt']) ? $_smarty_tpl->tpl_vars['tt'] : false;
$__foreach_tt_0_saved_key = isset($_smarty_tpl->tpl_vars['msp']) ? $_smarty_tpl->tpl_vars['msp'] : false;
$_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['msp'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msp']->value => $_smarty_tpl->tpl_vars['tt']->value) {
$_smarty_tpl->tpl_vars['tt']->_loop = true;
$__foreach_tt_0_saved_local_item = $_smarty_tpl->tpl_vars['tt'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['msp']->value;?>
</td>
                        <td ><?php echo $_smarty_tpl->tpl_vars['tt']->value[2];?>
</td>
                        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tt']->value[0]);?>
</td>
                        <td align="right">
                            <input class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['tt']->value[1];?>
" style="text-align:center ;width:70px"
                            name="sl_<?php echo $_smarty_tpl->tpl_vars['msp']->value;?>
" />
                        </td>
                        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tt']->value[0]*$_smarty_tpl->tpl_vars['tt']->value[1]);?>
</td>                        
                              
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                <?php
$_smarty_tpl->tpl_vars['tt'] = $__foreach_tt_0_saved_local_item;
}
if ($__foreach_tt_0_saved_item) {
$_smarty_tpl->tpl_vars['tt'] = $__foreach_tt_0_saved_item;
}
if ($__foreach_tt_0_saved_key) {
$_smarty_tpl->tpl_vars['msp'] = $__foreach_tt_0_saved_key;
}
?>
                <tr>
                    <td colspan="5">Tổng cộng</td>
                    <td align="right"><?php echo number_format($_SESSION['TongSoTien']);?>
</td>
                </tr>
                 <tr>
                    <td colspan="6" align="center">
                        <input type="submit" value="Cập nhật" name="btnCapNhat" class="btn btn-success" />
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/dat-hang.html" class="btn btn-primary">Đặt hàng</a> 
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/huy-gio-hang.html" class="btn btn-danger">Hủy giỏ hàng</a> 
                        <br />
                        <i> nhập số lượng 0 nếu muốn xóa mặt hàng</i>
                    </td>
                </tr>       
             </tbody>          
         </table>
     </form>
     <?php } else { ?>
        <h3>Giỏ hàng rỗng</h3>   
      <?php }?>
     
  </div>
</div>
<?php
}
/* {/block 'content'} */
}
