<?php
include_once('controllers/C_nguoi_dung.php');
$c_nguoi_dung = new C_nguoi_dung();
if(isset($_GET['kihieu']))
{
    switch ($_GET['kihieu'])
    {
         case 'dang-nhap':
            $c_nguoi_dung->DangNhap();
            break;            
         case 'he-thong':
            $c_nguoi_dung->HeThongQuanTri();
            break;
         case 'dang-xuat':
            $c_nguoi_dung->DangXuat();
            break;     
                                
    }
}

?>