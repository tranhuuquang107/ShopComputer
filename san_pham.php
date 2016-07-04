<?php
include_once('controllers/C_san_pham.php');
$c_san_pham = new C_san_pham();
if(isset($_GET['kihieu']))
{
    switch ($_GET['kihieu'])
    {
        case 'san-pham-moi':
            $c_san_pham->SanPhamMoi();
            break;
        case 'san-pham-khuyen-mai':
            $c_san_pham->SanPhamKhuyenMai();
            break;
        case 'san-pham-loai-con':
            $c_san_pham->SanPhamLoaiCon();
             break;
        case 'san-pham-loai-cha':
            $c_san_pham->SanPhamLoaiCha();
             break;
        case 'danh-sach-san-pham':
            $c_san_pham->DSSanPham();
             break;
        //4-6
         case 'chi-tiet-san-pham':
            $c_san_pham->ChiTietSanPham();
             break;
        //end4-6
         case 'danh-sach-san-pham-admin':
            $c_san_pham->DanhSachSanPhamAdmin();
             break;
         case 'them-san-pham':
            $c_san_pham->ThemSanPham();
             break;
         case 'cap-nhat-san-pham':
            $c_san_pham->CapNhatSanPham();
             break;
         case 'tim-kiem-san-pham':
            $c_san_pham->TimKiemSanPham();
             break;         
        
    }
}
else
    $c_san_pham->index();
?>