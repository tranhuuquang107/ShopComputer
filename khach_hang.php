<?php
include_once('controllers/C_khach_hang.php');
$c_khach_hang = new C_khach_hang();
if(isset($_GET['kihieu']))
{
    switch ($_GET['kihieu'])
    {
        case 'them-mat-hang':
            $c_khach_hang->themgiohang();
            break;     
         case 'thong-tin-gio-hang':
            $c_khach_hang->ThongTinGioHang();
            break;
        case 'dat-hang':
            $c_khach_hang->DatHang();
            break;
         case 'thong-tin-don-dat-hang':
            $c_khach_hang->ThongTinDonDatHang();
             break;          
    }
}

?>