<!DOCTYPE html>
<html lang="en">
  <!--head-->
    {block name='head'}{include file='layout/head.tpl'}{/block}
  <body>
    <!--nav-->
    {block name='nav'}{include file='layout/nav.tpl'}{/block}
    <!-- Begin page content -->
    <div class="container-fluid" style="margin-top:75px" id="dvMain">
      <!--content-->
      
      {block name='content'}{/block}
    </div>

    <!--footer-->
    {block name='footer'}{include file='layout/footer.tpl'}{/block}
    <!--script-->
    {block name='script'}{include file='layout/script.tpl'}{/block}
  </body>
</html>
