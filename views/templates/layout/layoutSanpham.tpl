<!DOCTYPE html>
<html lang="en">
  <!--head-->
    {block name='head'}{include file='layout/head.tpl'}{/block}
  <body>
    <!--nav-->
    {block name='nav'}{include file='layout/nav.tpl'}{/block}
    <!-- Begin page content -->
    <div class="container-fluid">
    
      <!--content-->
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <!--banner_left-->
    {block name='banner_left'}{include file='layout/banner_left.tpl'}{/block}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" id="dvMain">  
            {block name='content'}{/block}  
        </div>
      </div>
    </div>

    <!--footer-->
    {block name='footer'}{include file='layout/footer.tpl'}{/block}
    <!--script-->
    {block name='script'}{include file='layout/script.tpl'}{/block}
  </body>
</html>
