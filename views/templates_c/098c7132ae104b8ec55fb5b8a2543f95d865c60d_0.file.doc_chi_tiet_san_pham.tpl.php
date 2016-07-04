<?php
/* Smarty version 3.1.29, created on 2016-06-20 14:03:08
  from "C:\xampp\htdocs\18-6doan\views\templates\sanpham\doc_chi_tiet_san_pham.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5767db7c85a4e1_91333465',
  'file_dependency' => 
  array (
    '098c7132ae104b8ec55fb5b8a2543f95d865c60d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\18-6doan\\views\\templates\\sanpham\\doc_chi_tiet_san_pham.tpl',
      1 => 1465045032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutSanpham.tpl' => 1,
  ),
),false)) {
function content_5767db7c85a4e1_91333465 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>
<!-- end 4/6chi tiết,giỏ hàng -->

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_120445767db7c7ecec1_05789986',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<!-- end 4/6 --><?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutSanpham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:sanpham/doc_chi_tiet_san_pham.tpl */
function block_120445767db7c7ecec1_05789986($_smarty_tpl, $_blockParentStack) {
?>

<div class="row">
    <h3> <b><?php echo $_smarty_tpl->tpl_vars['san_pham']->value['ten_san_pham'];?>
</b></h3>
    <hr/>
    <div class="col-md-5 thumbnail" style="boder:none">
        <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value['hinh'];?>
"/>
    </div>
    <div class="col-md-7">
        <h4><b><?php echo $_smarty_tpl->tpl_vars['san_pham']->value['ten_san_pham'];?>
</b></h4>
        <p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value['mo_ta_tom_tat'];?>
</p>
        <p>
        <?php if ($_smarty_tpl->tpl_vars['san_pham']->value['don_gia_khuyen_mai'] > 0) {?>
            Giá: <strike><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value['don_gia']);?>
</strike>
            Giá KM: <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value['don_gia_khuyen_mai']);?>

        <?php } else { ?>
            Giá: <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value['don_gia']);?>

        <?php }?>            
        </p>
        <div class="form-inline">
        Số lượng:<input type="number" value="1" id="soluong" style="width:90pxa;text-aligna:center" class="form-control" />
        <button name="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value['ma_san_pham'];?>
" id="btnMua" class="btn btn-primary"> Thêm vào giỏ hàng</button>
        <hr />
        </div>        
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
              <ul id="myTabs" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#chitietsanphan" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        Chi tiết sản phẩm
                    </a>
                </li>
                <li role="presentation">
                    <a href="#motasanpham" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                        Mô tả tóm tắt
                    </a>
                </li>  
                 <li role="presentation">
                    <a href="#spcungloai" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                        Sản phẩm cùng loại
                    </a>
                </li>  
              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="chitietsanphan" aria-labelledby="home-tab">
                      <p>
                            <?php echo $_smarty_tpl->tpl_vars['san_pham']->value['mo_ta_tom_tat'];?>

                      </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="motasanpham" aria-labelledby="profile-tab">
                      <p>
                        <?php echo $_smarty_tpl->tpl_vars['san_pham']->value['mo_ta_chi_tiet'];?>

                      </p>
                </div>     
                <div role="tabpanel" class="tab-pane fade" id="spcungloai" aria-labelledby="profile-tab">
                  <div class="row" style="margin">
                     <?php if (isset($_smarty_tpl->tpl_vars['DSSanPhamCungLoai']->value)) {?>
                       <?php
$_from = $_smarty_tpl->tpl_vars['DSSanPhamCungLoai']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sp_0_saved_item = isset($_smarty_tpl->tpl_vars['sp']) ? $_smarty_tpl->tpl_vars['sp'] : false;
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$__foreach_sp_0_saved_local_item = $_smarty_tpl->tpl_vars['sp'];
?>
                          <div class="col-xs-6 col-md-3">
                          <?php if ($_smarty_tpl->tpl_vars['sp']->value['don_gia_khuyen_mai'] > 0) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/kmicon.gif" style="position:absolute; right:15px"/>
                          <?php } elseif ($_smarty_tpl->tpl_vars['sp']->value['san_pham_moi'] == 1) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/new-icon.gif" style="position:absolute; right:15px"/>
                          <?php }?>
                              <div class="thumbnail">                      
                              <a href="#" class="thumbnail">
                                      <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
"/>
                              </a>                   
                                  <div class="caption">
                                        <h4 style="height:35px"><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
</h4>
                                        <p>
                                        <?php if ($_smarty_tpl->tpl_vars['sp']->value['don_gia_khuyen_mai'] > 0) {?>
                                            <strike>Giá:<?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
</strike>-
                                            Giá KM:<?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia_khuyen_mai']);?>
vnđ
                                        <?php } else { ?>
                                            Giá:<?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
vnđ
                                        <?php }?>
                                        </p>
                                        <p align="center">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
.html" class="btn btn-primary" role="button">Chi tiết</a> 
                                        </p>
                                  </div>
                              </div>
                          </div>
                         
                         <?php
$_smarty_tpl->tpl_vars['sp'] = $__foreach_sp_0_saved_local_item;
}
if ($__foreach_sp_0_saved_item) {
$_smarty_tpl->tpl_vars['sp'] = $__foreach_sp_0_saved_item;
}
?>                       
                       <?php }?>
                    </div>
                </div>          
            </div>
         </div>
    </div>
</div>
<?php
}
/* {/block 'content'} */
}
