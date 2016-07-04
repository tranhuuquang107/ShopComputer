{extends file='layout/layoutSanpham.tpl'}
{block name='content'}
    <table class="table">      
      <tbody>
        <tr>          
          <td colspan="2" align="center">
            CÔNG TY TNHH 1TV<br />
            CHUYÊN CUNG CẤP ...
          </td>
          <td colspan="4" align="center" style="font-size: 30px" valign="center">ĐƠN ĐẶT HÀNG CỦA KHÁCH HÀNG</td>
        </tr>
        <tr>
          <td>Số hóa đơn:</td>
          <td colspan="2">{$DonDatHang[0]['so_hoa_don']}</td>
          <td>Ngày hóa đơn:</td>
          <td  colspan="2">{$DonDatHang[0]['ngay_hd']}</td>          
        </tr>
        <tr>
          <td>Mã khách hàng:</td>
          <td colspan="2" align="left">{$DonDatHang[0]['ma_khach_hang']}</td>
          <td>Tên khách hàng:</td>
          <td  colspan="2" align="left">{$DonDatHang[0]['ten_khach_hang']}</td>          
        </tr>
        <tr>
          <td>Địa chỉ:</td>
          <td colspan="2" align="left">{$DonDatHang[0]['dia_chi']}</td>
          <td>Điện thoại:</td>
          <td  colspan="2" align="left">{$DonDatHang[0]['dien_thoai']}</td>          
        </tr>    
        </tbody>
    </table>
        <table class="table table-striped">      
      <tbody>
        {$i=1}    
        <tr><td>#</td><td>Mã SP</td><td>Tên sản phẩm</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td></tr>
        {foreach $DonDatHang as $item}
            <tr>
                <td>{$i}</td>
                <td>{$item['ma_san_pham']}</td>
                <td>{$item['ten_san_pham']}</td>
                <td>{$item['so_luong']}</td>
                <td align="right">{number_format($item['don_gia'])}</td>
                <td align="right">{number_format($item['don_gia']*$item['so_luong'])}</td>
            </tr>
            {$i=$i+1}        
        {/foreach}
        <tr>
            <td colspan="5" align="right">Trị giá hóa đơn</td>
            <td align="right">{number_format($item['tri_gia'])}</td>
        </tr>
      </tbody>
    </table>
{/block}
