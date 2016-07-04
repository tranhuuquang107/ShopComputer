<?php
/* Smarty version 3.1.29, created on 2016-06-11 14:04:21
  from "C:\wamp\www\doan_222\views\templates\khach_hang\v_don_dat_hang.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575bfe45b3c987_78404649',
  'file_dependency' => 
  array (
    'f879ba358b199377a4e709286027b902109b12d6' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\khach_hang\\v_don_dat_hang.tpl',
      1 => 1465645027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutSanpham.tpl' => 1,
  ),
),false)) {
function content_575bfe45b3c987_78404649 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_23703575bfe45b01ff8_81053311',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutSanpham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:khach_hang/v_don_dat_hang.tpl */
function block_23703575bfe45b01ff8_81053311($_smarty_tpl, $_blockParentStack) {
?>

    <table class="table">      
      <tbody>
        <tr>          
          <td colspan="2" align="center">
            CÔNG TY TNHH 1TV<br />
            CHUYÊN CUNG CẤP ...
          </td>
          <td colspan="4" align="center" style="font-size: 30px" valign="center">ĐƠN ĐẶT HÀNG CỦA KHÁCH HÀNG</td>
        </tr>
        <tr>
          <td>Số hóa đơn:</td>
          <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['DonDatHang']->value[0]['so_hoa_don'];?>
</td>
          <td>Ngày hóa đơn:</td>
          <td  colspan="2"><?php echo $_smarty_tpl->tpl_vars['DonDatHang']->value[0]['ngay_hd'];?>
</td>          
        </tr>
        <tr>
          <td>Mã khách hàng:</td>
          <td colspan="2" align="left"><?php echo $_smarty_tpl->tpl_vars['DonDatHang']->value[0]['ma_khach_hang'];?>
</td>
          <td>Tên khách hàng:</td>
          <td  colspan="2" align="left"><?php echo $_smarty_tpl->tpl_vars['DonDatHang']->value[0]['ten_khach_hang'];?>
</td>          
        </tr>
        <tr>
          <td>Địa chỉ:</td>
          <td colspan="2" align="left"><?php echo $_smarty_tpl->tpl_vars['DonDatHang']->value[0]['dia_chi'];?>
</td>
          <td>Điện thoại:</td>
          <td  colspan="2" align="left"><?php echo $_smarty_tpl->tpl_vars['DonDatHang']->value[0]['dien_thoai'];?>
</td>          
        </tr>    
        </tbody>
    </table>
        <table class="table table-striped">      
      <tbody>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>    
        <tr><td>#</td><td>Mã SP</td><td>Tên sản phẩm</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td></tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['DonDatHang']->value;
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
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['so_luong'];?>
</td>
                <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['don_gia']);?>
</td>
                <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['don_gia']*$_smarty_tpl->tpl_vars['item']->value['so_luong']);?>
</td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>        
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
        <tr>
            <td colspan="5" align="right">Trị giá hóa đơn</td>
            <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['tri_gia']);?>
</td>
        </tr>
      </tbody>
    </table>
<?php
}
/* {/block 'content'} */
}
