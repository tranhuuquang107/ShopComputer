<?php
/* Smarty version 3.1.29, created on 2016-06-19 16:31:17
  from "C:\xampp\htdocs\18-6doan\views\templates\sanpham\doc_ds_san_pham_admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766acb510c462_51652752',
  'file_dependency' => 
  array (
    'c1767d94c6dbb7034823095363117a1518222ea3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\18-6doan\\views\\templates\\sanpham\\doc_ds_san_pham_admin.tpl',
      1 => 1466346665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutAdmin.tpl' => 1,
  ),
),false)) {
function content_5766acb510c462_51652752 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_297845766acb50dd655_63218859',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:sanpham/doc_ds_san_pham_admin.tpl */
function block_297845766acb50dd655_63218859($_smarty_tpl, $_blockParentStack) {
?>

 <table class="table table-striped">
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/them-san-pham.html">Thêm sản phẩm</a></h3>
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên sản phẩm</th>       
        <th>Đơn giá</th>
        <th>Khuyến mải</th>
        <th>Sản phẩm mới</th>
        
      </tr>
    </thead>
    <tbody>
    
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
    <?php
$_from = $_smarty_tpl->tpl_vars['DSSanPham']->value;
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
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
</td>        
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['don_gia'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['don_gia_khuyen_mai'];?>
</td>
        <td>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['san_pham_moi'] == 1) {?>
        Sản phẩm mới
        <?php }?>
        </td>
        <td>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/cap-nhat-san-pham/<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
" class="btn btn-success">Cập nhật</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/xoa-san-pham/<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
" class="btn btn-danger">Xóa</a>
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
        <td colspan="7" align="center">
            <?php echo $_smarty_tpl->tpl_vars['PageLink']->value;?>

        </td>
    </tr>
    </tbody>
  </table>
<?php
}
/* {/block 'content'} */
}
