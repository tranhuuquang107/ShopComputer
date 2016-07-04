<ul class="nav nav-sidebar">
            <li class="active"><a href="#">Giỏ hàng <span class="sr-only">(current)</span></a></li>
             <li>
                 <a href="{$path}khach-hang/thong-tin-gio-hang.html">
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    <span id="ttGH"> 
                    {if isset($smarty.session.TongSoLuong)}
                    {$smarty.session.TongSoLuong} SP ({number_format($smarty.session.TongSoTien)} VNĐ)
                    {else}
                        0 SP (0 VND)
                    {/if}
                    </span>
                 </a>
             </li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Danh mục sản phẩm <span class="sr-only">(current)</span></a></li>
          </ul>
          {if isset($LoaiSanPhamMenuLeft)}
          {foreach $LoaiSanPhamMenuLeft as $item }
          {$loaicha=$item[0]}
          {$DSloaicon=$item[1]}
          
   
    <div class="panel-heading" role="tab" id="headingOne" >
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{$loaicha['ma_loai']}" aria-expanded="false" aria-controls="collapseOne">
          {$loaicha['ten_loai']}
        </a>
      </h4>       
    </div>
    <div id="{$loaicha['ma_loai']}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
    
        {if $DSloaicon}
            {foreach $DSloaicon as $itemlc}
                <li class="list-group-item">
                    <a href="{$path}san-pham/{$loaicha['ten_loai_san_pham_url']}/{$itemlc['ten_loai_san_pham_url']}.html">{$itemlc['ten_loai']}
                    </a>
                </li>
            {/foreach}
        {/if}
     
    </div>
 
{/foreach}
{/if}

