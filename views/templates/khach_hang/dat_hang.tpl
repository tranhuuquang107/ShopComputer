{extends file ="layout/layoutSanpham.tpl"}
{block name ="content"}
<!---9/6-->
<form class="form-horizontal" role="form" method="post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="ten_khach_hang">Tên khách hàng:</label>
      <div class="col-sm-10">
        <input type="text" name="ten_khach_hang" class="form-control" value="{$datakhachhang['ten_khach_hang']}" id="ten_khach_hang" placeholder="Nhập tên khách hàng"/>
        {$dataErr['ten_khach_hang']}
      </div>
    </div>  
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phai">Phái:</label>
      <div class="col-sm-10">
      {if $datakhachhang['phai']==0}
        <label><input type="radio" value="1" name="phai" class="form-checkbox" id="phai" />Nam</label>
        <label><input type="radio" value="0" name="phai" class="form-checkbox" id="phai" checked="true" />Nữ</label>
      {else}
        <label><input type="radio" value="1" name="phai" class="form-checkbox" id="phai" checked="true"/>Nam</label>
        <label><input type="radio" value="0" name="phai" class="form-checkbox" id="phai" />Nữ</label>
      {/if}
      </div>
    </div> 
   
   <div class="form-group">
      <label class="control-label col-sm-2" for="ngay_sinh">Ngày sinh:</label>
      <div class="col-sm-10">
        <input type="date"name="ngay_sinh" class="form-control" value="{$datakhachhang['ngay_sinh']}" id="ngay_sinh" placeholder="Nhập ngày sinh"/>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="dia_chi">Địa chỉ:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dia_chi" value="{$datakhachhang['dia_chi']}" id="dia_chi" placeholder="Nhập địa chỉ"/>
        {$dataErr['dia_chi']}
      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="dien_thoai">Điện thoại:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dien_thoai" value="{$datakhachhang['dien_thoai']}" id="dien_thoai" placeholder="Nhập điện thoại"/>
        {$dataErr['dien_thoai']}
      </div>
    </div>
   
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="{$datakhachhang['email']}" id="email" placeholder="Nhập email"/>
        {$dataErr['email']}
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="btnThem">Thêm</button>
      </div>
    </div>
  </form>
  <!--end-->
{/block}