<?php
include_once('models/Database.php');
class M_loai_san_pham_table extends Database
{
    // T?o menu left
    public function DsLoaiSanPham()
    {
        $this->setQuery('select *from loai_san_pham where ma_loai_cha=0');
        $DSLoaiCha=$this->loadAllRow();
        $mangLoaiSanPham=array();
        foreach ($DSLoaiCha as $lc)
        {
            $mangLoaiSanPham[]=array($lc,$this->DSLoaiSanPhamCon($lc['ma_loai']));
        }
        return $mangLoaiSanPham;
    }  
       //End menu left  
    public function DSLoaiSanPhamCon($maloaicha)
    {
        $this->setQuery('select * from loai_san_pham where ma_loai_cha=?');
        return $this->loadAllRow(array($maloaicha));
        
    }
    public function LoaiSanPhamTheoURL($chuoi)
    {
        $this->setQuery("select * from loai_san_pham where ten_loai_san_pham_url=?");
        return $this->loadRow(array($chuoi));
    }
       public function LoaiSanPhamMaLoai($maloai)
    {
        $this->setQuery("select * from loai_san_pham where ma_loai=?");
        return $this->loadRow(array($maloai));
    }
}