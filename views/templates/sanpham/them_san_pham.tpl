{extends file="layout/layoutAdmin.tpl"}
{block name="content"}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
<h3 class="bg-primary" align="center">Thêm sản phẩm</h3>

 {if $dataErr['hinh']!=''}
 <h3 style="color:#ff0000">{$dataErr['hinh']}</h3>
 {/if}
 {if isset($dataErr['err'])}
 <h3 style="color:#ff0000">{$dataErr['err']}</h3>
 {/if}
 {if isset($smarty.session.mss)}
 <h3 style="color:#ff0000">{$smarty.session.mss}</h3>
 {huysession mss=''}
 {/if}
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tên sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" value ="{$data['ten_san_pham']}" name="ten_san_pham" class="form-control" id="ten_san_pham" placeholder="Nhập tên sản phẩm"/>
   {$dataErr['ten_san_pham']}
    </div>
  </div> 

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tên URL:</label>
    <div class="col-sm-10">
      <input type="text" value ="{$data['ten_san_pham_url']}" name="ten_san_pham_url" class="form-control" id="ten_san_pham_url" placeholder="Nhập tên URL"/>
          {$dataErr['ten_san_pham_url']}
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label  col-sm-2" for="email">Đơn giá:</label>
    <div class="col-sm-10">
      <input type="text" value ="{$data['don_gia']}" name="don_gia" class="form-control" id="don_gia" placeholder="Nhập đơn giá"/>
     {$dataErr['don_gia']}
    </div>
  </div>

  <div class="form-group">
    <label class="control-label  col-sm-2" for="email">Đơn giá khuyến mãi:</label>
    <div class="col-sm-10">
      <input type="text" value ="{$data['don_gia_khuyen_mai']}" name="don_gia_khuyen_mai" class="form-control" id="don_gia_khuyen_mai" placeholder="Nhập đơn giá khuyến mãi"/>
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Số lần xem:</label>
    <div class="col-sm-10">
      <input type="text" value ="{$data['so_lan_xem']}" name="so_lan_xem" class="form-control" id="so_lan_xem" placeholder="Nhập số lần xem"/>
    </div>
  </div> 
  
	<div class="form-group">
    <label class="control-label col-sm-2" for="email">Sản phẩm mới:</label>
    <div class="col-sm-10">
      <input type="checkbox" value="1" name="san_pham_moi" class="form-checkbox" id="san_pham_moi"  {if $data['san_pham_moi']==1} checked="checked"  {/if}/>
    </div>
  </div> 
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Mô tả tóm tắt:</label>
    <div class="col-sm-10">
     <textarea name="mo_ta_tom_tat" class="form-control" id="mo_ta_tom_tat">{$data['mo_ta_tom_tat']} </textarea>
       {$dataErr['mo_ta_tom_tat']}
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">Mô tả chi tiết:</label>
    <div class="col-sm-10">
      <textarea  name="mo_ta_chi_tiet" class="ckeditor" id="mo_ta_chi_tiet" > {$data['mo_ta_chi_tiet']}</textarea>
        {$dataErr['mo_ta_chi_tiet']}
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Mã loại:</label>
    <div class="col-sm-10">
      <select name="ma_loai" class="form-control" style="width:300px">
      
          {foreach $DSLoaiSanPham as $item}
          {$LoaiCha=$item[0]}
          {$DSLoaiCon=$item[1]}
              <optgroup label="{$LoaiCha['ten_loai']}">
              {if $DSLoaiCon}
              {foreach $DSLoaiCon as $itemlc}
              {if $data['ma_loai']==$itemlc['ma_loai']}
                <option value="{$itemlc['ma_loai']}" selected="selected">{$itemlc['ten_loai']}</option>
              {else}
                <option value="{$itemlc['ma_loai']}">{$itemlc['ten_loai']}</option>
              {/if}
              {/foreach}
              {/if}
              </optgroup>
          {/foreach}
          
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
      <input type="date" value ="{$data['ngay_tao']}" name="ngay_tao" class="form-control" id="ngay_tao" style="width:300px"/>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name ="btnThem" class="btn btn-danger">Thêm</button>
    </div>
  </div>

</form>
{/block}