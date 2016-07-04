{extends file ="layout/layoutSanpham.tpl"}
{block name ="content"}
 <h1 class="page-header">Danh sách sản phẩm</h1>

 <!-- 2-6-->
    {if isset($LoaiCon)}    
     <ol class="breadcrumb">
      <li><a href="{$path}san-pham.html">Sản phẩm</a></li>
      <li><a href="{$path}san-pham/{$LoaiCha['ten_loai_san_pham_url']}.html">{$LoaiCha['ten_loai']}</a></li>
      <li class="active">{$LoaiCon['ten_loai']}</li>
    </ol>
    {elseif isset($LoaiCha)}
        <ol class="breadcrumb">
      <li><a href="{$path}san-pham.html">Sản phẩm</a></li>      
      <li class="active">{$LoaiCha['ten_loai']}</li>
    </ol>
    {else}
         <ol class="breadcrumb">
         
      <li class="active">Sản phẩm</li>
    </ol>
    {/if}
    <!--end 2-6-->
        <div class="panel panel-primary" style="margin-top:15px"> 
             
            <div class="panel-body"> 
            <!---doc ds san pham-->
               <div class="row">
             {if isset($DSSanPham)}
               {foreach $DSSanPham as $sp }
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
                 {else}
                    <h3 align="center">Đang cập nhật sản phẩm....</h3>
               {/if}
                </div>
                {if isset($PageLink)}
                    <div class="row">
                        <div class="col-lg-12">
                            <p align="center">{$PageLink}</p>
                        </div>
                    </div>
                {/if}
                  <!---doc ds san pham-->
            </div> 
        </div>
 
{/block}