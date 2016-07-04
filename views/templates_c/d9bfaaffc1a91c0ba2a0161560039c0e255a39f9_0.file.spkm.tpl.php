<?php
/* Smarty version 3.1.29, created on 2016-05-28 14:53:55
  from "C:\wamp\www\doan_222\views\templates\spkm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574994e30ca2d1_88561911',
  'file_dependency' => 
  array (
    'd9bfaaffc1a91c0ba2a0161560039c0e255a39f9' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\views\\templates\\spkm.tpl',
      1 => 1464440025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layout.tpl' => 1,
  ),
),false)) {
function content_574994e30ca2d1_88561911 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_11014574994e3031973_08434432',
  1 => false,
  3 => 0,
  2 => 0,
));
?>





















<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:spkm.tpl */
function block_11014574994e3031973_08434432($_smarty_tpl, $_blockParentStack) {
?>

   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/Slide/1.png">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/Slide/2.png" alt="Second slide"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/Slide/3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    <?php if (isset($_smarty_tpl->tpl_vars['DSSanPhamKhuyenMai']->value)) {?>
        <div class="panel panel-primary" style="margin-top:15px"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">
                <a href="san-pham-moi.html">Sản phẩm mới <span class="badge" style="position:absolute; right:40px"><?php echo count($_smarty_tpl->tpl_vars['DSSanPhamMoi']->value);?>
</span></a>
                </h3> 
            </div> 
            <div class="panel-body"> 
            <!---doc ds san pham-->
               <div class="row">
               <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
               <?php
$_from = $_smarty_tpl->tpl_vars['DSSanPhamKhuyenMai']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_spkm_0_saved_item = isset($_smarty_tpl->tpl_vars['spkm']) ? $_smarty_tpl->tpl_vars['spkm'] : false;
$_smarty_tpl->tpl_vars['spkm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['spkm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['spkm']->value) {
$_smarty_tpl->tpl_vars['spkm']->_loop = true;
$__foreach_spkm_0_saved_local_item = $_smarty_tpl->tpl_vars['spkm'];
?>
                  <div class="col-xs-6 col-md-3">
                  <?php if ($_smarty_tpl->tpl_vars['spkm']->value['don_gia_khuyen_mai'] > 0) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/kmicon.gif" style="position:absolute; right:15px"/>
                  <?php } elseif ($_smarty_tpl->tpl_vars['spkm']->value['san_pham_moi'] == 1) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/new-icon.gif" style="position:absolute; right:15px"/>
                  <?php }?>
                      <div class="thumbnail">                      
                      <a href="#" class="thumbnail">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['spkm']->value['hinh'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spkm']->value['ten_san_pham'];?>
"/>
                      </a>                   
                          <div class="caption">
                                <h4 style="height:35px"><?php echo $_smarty_tpl->tpl_vars['spkm']->value['ten_san_pham'];?>
</h4>
                                <p>
                                <?php if ($_smarty_tpl->tpl_vars['spkm']->value['don_gia_khuyen_mai'] > 0) {?>
                                    <strike>Giá:<?php echo number_format($_smarty_tpl->tpl_vars['spkm']->value['don_gia']);?>
</strike>-
                                    Giá KM:<?php echo number_format($_smarty_tpl->tpl_vars['spkm']->value['don_gia_khuyen_mai']);?>
vnđ
                                <?php } else { ?>
                                    Giá:<?php echo number_format($_smarty_tpl->tpl_vars['spkm']->value['don_gia']);?>
vnđ
                                <?php }?>
                                </p>
                                <p align="center">
                                    <a href="#" class="btn btn-primary" role="button">Button</a> 
                                </p>
                          </div>
                      </div>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['i']->value == 8) {?>
                    <?php break 1;?>
                  <?php }?>
                  <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
                 <?php
$_smarty_tpl->tpl_vars['spkm'] = $__foreach_spkm_0_saved_local_item;
}
if ($__foreach_spkm_0_saved_item) {
$_smarty_tpl->tpl_vars['spkm'] = $__foreach_spkm_0_saved_item;
}
?>
                </div>
                  <!---doc ds san pham-->
            </div> 
        </div>
    <?php }
}
/* {/block 'content'} */
}
