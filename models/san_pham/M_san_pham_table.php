<?php
include_once('models/Database.php');
class M_san_pham_table extends Database
{
    public function DSSanPhamMoi()
    {
        $this->setQuery('select * from san_pham where san_pham_moi=1');
        return $this->loadAllRow();
    }
    public function DSSanPhamKhuyenMai()
    {
        $this->setQuery('select * from san_pham where don_gia_khuyen_mai>0');
        return $this->loadAllRow();
    }
    public function DSSanPhamPhanTrang($start,$limit)
    {
        $this->setQuery("select * from san_pham limit $start,$limit");
        return $this->loadAllRow();
    }
    public function TongSoSanPham()
    {
        $this->setQuery('select * from san_pham');
        return $this->CountAll();
    }
    public function SanPhamId($id)
    {
        $this->setQuery('select * from san_pham where ma_san_pham=?');
        return $this->loadRow(array($id));
    } 
    public function SanPhamTheoLoaiCon($Dsmaloai)
    {
        $this->setQuery("select * from san_pham where ma_loai in($Dsmaloai)");
        return $this->loadAllRow();
    } 
    public function SanPhamTheoLoai($maloai)
    {
        $this->setQuery('select * from san_pham where ma_loai=?');
        return $this->loadAllRow(array($maloai));
    }
    public function DSSanPhamCungLoai($id,$maloai)
    {
        $this->setQuery('select * from san_pham where ma_san_pham !=? and ma_loai=?');
        return $this->loadAllRow(array($id,$maloai));
    }
    public function ThemSanPham($data)
    {
        $chuoiSQL='insert into san_pham(`ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`) values(?,?,?,?,?,?,?,?,?,?,?)';
        $this->setQuery($chuoiSQL);
        return $this->execute(array($data['ten_san_pham'], $data['ten_san_pham_url'], $data['ma_loai'], $data['mo_ta_tom_tat'], $data['mo_ta_chi_tiet'], $data['don_gia'], $data['don_gia_khuyen_mai'], $data['hinh'], $data['san_pham_moi'], $data['so_lan_xem'], $data['ngay_tao']));
    }
    public function CapNhatSanPham($data)
    {
        $chuoiSQL='update san_pham set `ten_san_pham`=?, `ten_san_pham_url`=?, `ma_loai`=?, `mo_ta_tom_tat`=?, `mo_ta_chi_tiet`=?, `don_gia`=?, `don_gia_khuyen_mai`=?, `hinh`=?, `san_pham_moi`=?, `so_lan_xem`=?, `ngay_tao`=? where ma_san_pham=?';
        $this->setQuery($chuoiSQL);
        return $this->execute(array($data['ten_san_pham'], $data['ten_san_pham_url'], $data['ma_loai'], $data['mo_ta_tom_tat'], $data['mo_ta_chi_tiet'], $data['don_gia'], $data['don_gia_khuyen_mai'], $data['hinh'], $data['san_pham_moi'], $data['so_lan_xem'], $data['ngay_tao'], $data['ma_san_pham']));
    }
    public function XoaSanPham($id)
    {
        $this->setQuery('delete from san_pham where ma_san_pham=?');
        return $this->execute(array($id));
    }
    public function TimKiemSanPham($value)
    {
        $chuoi="%".$value."%";
        $this->setQuery("select * from san_pham where  ten_san_pham like ?");
        return $this->loadAllRow(array($chuoi));
    }
    
}
?>