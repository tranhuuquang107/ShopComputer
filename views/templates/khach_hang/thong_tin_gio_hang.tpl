{extends file ="layout/layoutSanpham.tpl"}
{block name ="content"}
<div class="panel panel-info">
  <div class="panel-heading">Thông tin giỏ hàng</div>
  <div class="panel-body">
    {if isset($TTGH)}
    <form action="" method="post">
        <table class="table table-condensed">
             <thead> 
                <tr> 
                  <td>#</td>
                  <td>Mã sản phẩm</td> 
                  <td>Tên sản phẩm</td>
                  <td align="right">Đơn giá</td> 
                  <td align="right">Số lượng</td>
                  <td align="right">Thành tiền</td>
                 </tr>
             </thead> 
             <tbody> 
                {$i=1}
                {foreach $TTGH as $msp=>$tt}
                    <tr>
                        <td>{$i}</td>
                        <td>{$msp}</td>
                        <td >{$tt[2]}</td>
                        <td align="right">{number_format($tt[0])}</td>
                        <td align="right">
                            <input class="form-control" type="number" value="{$tt[1]}" style="text-align:center ;width:70px"
                            name="sl_{$msp}" />
                        </td>
                        <td align="right">{number_format($tt[0]*$tt[1])}</td>                        
                              
                    </tr>
                    {$i=$i+1}
                {/foreach}
                <tr>
                    <td colspan="5">Tổng cộng</td>
                    <td align="right">{number_format($smarty.session.TongSoTien)}</td>
                </tr>
                 <tr>
                    <td colspan="6" align="center">
                        <input type="submit" value="Cập nhật" name="btnCapNhat" class="btn btn-success" />
                        <a href="{$path}khach-hang/dat-hang.html" class="btn btn-primary">Đặt hàng</a> 
                        <a href="{$path}khach-hang/huy-gio-hang.html" class="btn btn-danger">Hủy giỏ hàng</a> 
                        <br />
                        <i> nhập số lượng 0 nếu muốn xóa mặt hàng</i>
                    </td>
                </tr>       
             </tbody>          
         </table>
     </form>
     {else}
        <h3>Giỏ hàng rỗng</h3>   
      {/if}
     
  </div>
</div>
{/block}