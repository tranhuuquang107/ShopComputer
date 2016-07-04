<?php
/* Smarty version 3.1.29, created on 2016-06-24 14:24:13
  from "C:\xampp\htdocs\24-6doan\views\templates\layout\banner_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d266d5d2806_47634462',
  'file_dependency' => 
  array (
    '353ea1abdacc6a6c7b6d371bfec771d9f1f566b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\24-6doan\\views\\templates\\layout\\banner_left.tpl',
      1 => 1466771052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d266d5d2806_47634462 ($_smarty_tpl) {
?>
<ul class="nav nav-sidebar">
            <li class="active"><a href="#">Giỏ hàng <span class="sr-only">(current)</span></a></li>
             <li>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/thong-tin-gio-hang.html">
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    <span id="ttGH"> 
                    <?php if (isset($_SESSION['TongSoLuong'])) {?>
                    <?php echo $_SESSION['TongSoLuong'];?>
 SP (<?php echo number_format($_SESSION['TongSoTien']);?>
 VNĐ)
                    <?php } else { ?>
                        0 SP (0 VND)
                    <?php }?>
                    </span>
                 </a>
             </li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Danh mục sản phẩm <span class="sr-only">(current)</span></a></li>
          </ul>
          <?php if (isset($_smarty_tpl->tpl_vars['LoaiSanPhamMenuLeft']->value)) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['LoaiSanPhamMenuLeft']->value;
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
          <?php $_smarty_tpl->tpl_vars['loaicha'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value[0], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'loaicha', 0);?>
          <?php $_smarty_tpl->tpl_vars['DSloaicon'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value[1], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'DSloaicon', 0);?>
          
   
    <div class="panel-heading" role="tab" id="headingOne" >
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['loaicha']->value['ma_loai'];?>
" aria-expanded="false" aria-controls="collapseOne">
          <?php echo $_smarty_tpl->tpl_vars['loaicha']->value['ten_loai'];?>

        </a>
      </h4>       
    </div>
    <div id="<?php echo $_smarty_tpl->tpl_vars['loaicha']->value['ma_loai'];?>
" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
    
        <?php if ($_smarty_tpl->tpl_vars['DSloaicon']->value) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['DSloaicon']->value;
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
                <li class="list-group-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['loaicha']->value['ten_loai_san_pham_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['itemlc']->value['ten_loai_san_pham_url'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['itemlc']->value['ten_loai'];?>

                    </a>
                </li>
            <?php
$_smarty_tpl->tpl_vars['itemlc'] = $__foreach_itemlc_1_saved_local_item;
}
if ($__foreach_itemlc_1_saved_item) {
$_smarty_tpl->tpl_vars['itemlc'] = $__foreach_itemlc_1_saved_item;
}
?>
        <?php }?>
     
    </div>
 
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
}?>

<?php }
}
