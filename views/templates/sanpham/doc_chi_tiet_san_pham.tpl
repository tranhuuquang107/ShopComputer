<!-- end 4/6chi tiết,giỏ hàng -->
{extends file='layout/layoutSanpham.tpl'}
{block name='content'}
<div class="row">
    <h3> <b>{$san_pham['ten_san_pham']}</b></h3>
    <hr/>
    <div class="col-md-5 thumbnail" style="boder:none">
        <img src="{$path}public/hinh_san_pham/{$san_pham['hinh']}"/>
    </div>
    <div class="col-md-7">
        <h4><b>{$san_pham['ten_san_pham']}</b></h4>
        <p>{$san_pham['mo_ta_tom_tat']}</p>
        <p>
        {if $san_pham['don_gia_khuyen_mai']>0}
            Giá: <strike>{number_format($san_pham['don_gia'])}</strike>
            Giá KM: {number_format($san_pham['don_gia_khuyen_mai'])}
        {else}
            Giá: {number_format($san_pham['don_gia'])}
        {/if}            
        </p>
        <div class="form-inline">
        Số lượng:<input type="number" value="1" id="soluong" style="width:90pxa;text-aligna:center" class="form-control" />
        <button name="{$san_pham['ma_san_pham']}" id="btnMua" class="btn btn-primary"> Thêm vào giỏ hàng</button>
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
                            {$san_pham['mo_ta_tom_tat']}
                      </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="motasanpham" aria-labelledby="profile-tab">
                      <p>
                        {$san_pham['mo_ta_chi_tiet']}
                      </p>
                </div>     
                <div role="tabpanel" class="tab-pane fade" id="spcungloai" aria-labelledby="profile-tab">
                  <div class="row" style="margin">
                     {if isset($DSSanPhamCungLoai)}
                       {foreach $DSSanPhamCungLoai as $sp }
                          <div class="col-xs-6 col-md-3">
                          {if $sp['don_gia_khuyen_mai']>0}
                            <img src="{$path}public/img/kmicon.gif" style="position:absolute; right:15px"/>
                          {elseif $sp['san_pham_moi']==1}
                            <img src="{$path}public/img/new-icon.gif" style="position:absolute; right:15px"/>
                          {/if}
                              <div class="thumbnail">                      
                              <a href="#" class="thumbnail">
                                      <img src="{$path}public/hinh_san_pham/{$sp['hinh']}" alt="{$sp['ten_san_pham']}"/>
                              </a>                   
                                  <div class="caption">
                                        <h4 style="height:35px">{$sp['ten_san_pham']}</h4>
                                        <p>
                                        {if $sp['don_gia_khuyen_mai']>0}
                                            <strike>Giá:{number_format($sp['don_gia'])}</strike>-
                                            Giá KM:{number_format($sp['don_gia_khuyen_mai'])}vnđ
                                        {else}
                                            Giá:{number_format($sp['don_gia'])}vnđ
                                        {/if}
                                        </p>
                                        <p align="center">
                                            <a href="{$path}san-pham/{$sp['ten_san_pham_url']}-{$sp['ma_san_pham']}.html" class="btn btn-primary" role="button">Chi tiết</a> 
                                        </p>
                                  </div>
                              </div>
                          </div>
                         
                         {/foreach}                       
                       {/if}
                    </div>
                </div>          
            </div>
         </div>
    </div>
</div>
{/block}
<!-- end 4/6 -->