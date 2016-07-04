<?php
include_once('models/Database.php');
class M_khach_hang_table extends Database
{
    
    public function ThemKhachHang($data)
    {
        $chuoiSQL='insert into khach_hang(`ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, 
        `dien_thoai`, `email`) values(?,?,?,?,?,?)';
        $this->setQuery($chuoiSQL);
        $this->execute(array($data['ten_khach_hang'], $data['phai'], $data['ngay_sinh'], $data['dia_chi'],
        $data['dien_thoai'], $data['email']));
        return $this->lastInsertId();
    }
    public function ThemHoaDonHang($data)
    {
        $chuoiSQL='insert into hoa_don(`ngay_hd`, `ma_khach_hang`, `tri_gia`) values(?,?,?)';
        $this->setQuery($chuoiSQL);
        $this->execute(array($data['ngay_hd'], $data['ma_khach_hang'], $data['tri_gia']));
        return $this->lastInsertId();
    }
    public function ThemChiTietHoaDon($data)
    {
        $chuoiSQL='insert into ct_hoa_don(`so_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`) values(?,?,?,?)';
        $this->setQuery($chuoiSQL);
        return $this->execute(array($data['so_hoa_don'], $data['ma_san_pham'], $data['so_luong'], $data['don_gia']));        
    }
    public function DonDatHang($SoHD)
    {
        $chuoiSQL='SELECT `ct_hoa_don`.`so_hoa_don`,`ngay_hd`,`hoa_don`.`ma_khach_hang`,`ten_khach_hang`, `phai`,
         `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`,`hoa_don`.`tri_gia`, `ct_hoa_don`.`ma_san_pham`,
         `ten_san_pham` ,`so_luong`, `ct_hoa_don`.`don_gia` FROM `ct_hoa_don` 
         INNER JOIN  `hoa_don` ON `ct_hoa_don`.`so_hoa_don`=`hoa_don`.`so_hoa_don` INNER JOIN  `khach_hang` 
         ON `hoa_don`.`ma_khach_hang`=`khach_hang`.`ma_khach_hang` INNER JOIN  `san_pham` ON
          `san_pham`.`ma_san_pham`=`ct_hoa_don`.`ma_san_pham` Where `ct_hoa_don`.`so_hoa_don` =?';
        $this->setQuery($chuoiSQL);
        return $this->loadAllRow(array($SoHD));        
    }
}
?>