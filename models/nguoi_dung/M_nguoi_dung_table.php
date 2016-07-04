<?php
include_once('models/Database.php');
class M_nguoi_dung_table extends Database
{
    public function getDangNhapNguoiDung($tendangnhap,$matkhau)
    {
        $this->setQuery("select * from nguoi_dung where ten_dang_nhap=? and mat_khau=? ");
        return $this->loadRow(array($tendangnhap,$matkhau));
    }
}
?>