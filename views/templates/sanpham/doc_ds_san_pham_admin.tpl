{extends file ="layout/layoutAdmin.tpl"}
{block name="content"}
 <table class="table table-striped">
    <h3><a href="{$path}quan-tri/san-pham/them-san-pham.html">Thêm sản phẩm</a></h3>
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên sản phẩm</th>       
        <th>Đơn giá</th>
        <th>Khuyến mải</th>
        <th>Sản phẩm mới</th>
        
      </tr>
    </thead>
    <tbody>
    
    {$i=1}
    {foreach $DSSanPham as $item}
        <tr>
        <th scope="row">{$i}</th>
        <td>{$item['ma_san_pham']}</td>
        <td>{$item['ten_san_pham']}</td>        
        <td>{$item['don_gia']}</td>
        <td>{$item['don_gia_khuyen_mai']}</td>
        <td>
        {if $item['san_pham_moi']==1}
        Sản phẩm mới
        {/if}
        </td>
        <td>
            <a href="{$path}quan-tri/san-pham/cap-nhat-san-pham/{$item['ma_san_pham']}" class="btn btn-success">Cập nhật</a>
            <a href="{$path}quan-tri/san-pham/xoa-san-pham/{$item['ma_san_pham']}" class="btn btn-danger">Xóa</a>
        </td>
        </tr>
    {$i=$i+1}
    {/foreach}   
    <tr>
        <td colspan="7" align="center">
            {$PageLink}
        </td>
    </tr>
    </tbody>
  </table>
{/block}