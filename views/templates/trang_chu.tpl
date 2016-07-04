{extends file='layout/layout.tpl'}
{block name='content'}
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
          <img class="first-slide" src="{$path}public/Slide/1.png">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{$path}public/Slide/2.png" alt="Second slide"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{$path}public/Slide/3.png" alt="Third slide">
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
    {if isset($DSSanPhamMoi)}
        <div class="panel panel-primary" style="margin-top:15px"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">
                <a href="san-pham-moi.html">Sản phẩm mới <span class="badge" style="position:absolute; right:40px">{$DSSanPhamMoi|count}</span></a>
                </h3> 
            </div> 
            <div class="panel-body"> 
            <!---doc ds san pham-->
               <div class="row">
            
               {foreach $DSSanPhamMoi as $sp }
                  <div class="col-xs-6 col-md-3">
                  {if $sp['don_gia_khuyen_mai']>0}
                    <img src="{$path}public/img/kmicon.gif" style="position:absolute; right:15px"/>
                  {elseif $sp['san_pham_moi']==1}
                    <img src="{$path}public/img/new-icon.gif" style="position:absolute; right:15px"/>
                  {/if}
                      <div class="thumbnail">                      
                      <a href="{$path}san-pham/{$sp['ten_san_pham_url']}-{$sp['ma_san_pham']}.html" class="thumbnail">
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
                </div>
                  <!---doc ds san pham-->
            </div> 
        </div>
    {/if}
{/block}




















