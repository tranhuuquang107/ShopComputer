<?php
/* Smarty version 3.1.29, created on 2016-06-24 12:10:05
  from "C:\xampp\htdocs\24-6doan\views\templates\sanpham\doc_san_pham_theo_loai.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d06fdd50493_74004202',
  'file_dependency' => 
  array (
    '2dd35e2d19eebf5408bc79dd0d265a236f530799' => 
    array (
      0 => 'C:\\xampp\\htdocs\\24-6doan\\views\\templates\\sanpham\\doc_san_pham_theo_loai.tpl',
      1 => 1465039389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layoutSanpham.tpl' => 1,
  ),
),false)) {
function content_576d06fdd50493_74004202 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_6807576d06fdd06101_56715292',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layoutSanpham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:sanpham/doc_san_pham_theo_loai.tpl */
function block_6807576d06fdd06101_56715292($_smarty_tpl, $_blockParentStack) {
?>

 <h1 class="page-header">Danh sách sản phẩm</h1>

 <!-- 2-6-->
    <?php if (isset($_smarty_tpl->tpl_vars['LoaiCon']->value)) {?>    
     <ol class="breadcrumb">
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham.html">Sản phẩm</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['LoaiCha']->value['ten_loai_san_pham_url'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['LoaiCha']->value['ten_loai'];?>
</a></li>
      <li class="active"><?php echo $_smarty_tpl->tpl_vars['LoaiCon']->value['ten_loai'];?>
</li>
    </ol>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['LoaiCha']->value)) {?>
        <ol class="breadcrumb">
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham.html">Sản phẩm</a></li>      
      <li class="active"><?php echo $_smarty_tpl->tpl_vars['LoaiCha']->value['ten_loai'];?>
</li>
    </ol>
    <?php } else { ?>
         <ol class="breadcrumb">
         
      <li class="active">Sản phẩm</li>
    </ol>
    <?php }?>
    <!--end 2-6-->
        <div class="panel panel-primary" style="margin-top:15px"> 
             
            <div class="panel-body"> 
            <!---doc ds san pham-->
               <div class="row">
             <?php if (isset($_smarty_tpl->tpl_vars['DSSanPham']->value)) {?>
               <?php
$_from = $_smarty_tpl->tpl_vars['DSSanPham']->value;
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
                 <?php } else { ?>
                    <h3 align="center">Đang cập nhật sản phẩm....</h3>
               <?php }?>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['PageLink']->value)) {?>
                    <div class="row">
                        <div class="col-lg-12">
                            <p align="center"><?php echo $_smarty_tpl->tpl_vars['PageLink']->value;?>
</p>
                        </div>
                    </div>
                <?php }?>
                  <!---doc ds san pham-->
            </div> 
        </div>
 
<?php
}
/* {/block 'content'} */
}
