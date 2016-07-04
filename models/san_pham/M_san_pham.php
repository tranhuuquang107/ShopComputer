<?php
class M_san_pham
{
    private $ma_san_pham, $ten_san_pham, $ten_san_pham_url, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $don_gia_khuyen_mai, $hinh, $san_pham_moi, $so_lan_xem, $ngay_tao;
    private $dataErr=array('ten_san_pham'=>'', 'ten_san_pham_url'=>'', 'mo_ta_tom_tat'=>'', 'mo_ta_chi_tiet'=>'', 'don_gia'=>'','hinh'=>'');
    public function setData($data)
    {
        $this->ma_san_pham=isset($data['ma_san_pham'])?$data['ma_san_pham']:'';
        $this->ten_san_pham=isset($data['ten_san_pham'])?$data['ten_san_pham']:'';
        $this->ten_san_pham_url=isset($data['ten_san_pham_url'])?$data['ten_san_pham_url']:'';
        $this->ma_loai=isset($data['ma_loai'])?$data['ma_loai']:'';
        $this->mo_ta_tom_tat=isset($data['mo_ta_tom_tat'])?$data['mo_ta_tom_tat']:'';
        $this->mo_ta_chi_tiet=isset($data['mo_ta_chi_tiet'])?$data['mo_ta_chi_tiet']:'';
        $this->don_gia=isset($data['don_gia'])?$data['don_gia']:0;
        $this->don_gia_khuyen_mai=isset($data['don_gia_khuyen_mai'])?$data['don_gia_khuyen_mai']:0;
        $this->hinh=isset($data['hinh'])?$data['hinh']:'';
        $this->san_pham_moi=isset($data['san_pham_moi'])?$data['san_pham_moi']:0;
        $this->so_lan_xem=isset($data['so_lan_xem'])?$data['so_lan_xem']:0;
        $this->ngay_tao=isset($data['ngay_tao'])?$data['ngay_tao']:date('Y-m-d');
    }
     public function getData()
    {
        $dataSanPham=array(
                'ma_san_pham'=>$this->ma_san_pham, 
                'ten_san_pham'=>$this->ten_san_pham,
                'ten_san_pham_url'=>$this->ten_san_pham_url, 
                'ma_loai'=>$this->ma_loai, 
                'mo_ta_tom_tat'=>$this->mo_ta_tom_tat, 
                'mo_ta_chi_tiet'=>$this->mo_ta_chi_tiet, 
                'don_gia'=>$this->don_gia, 
                'don_gia_khuyen_mai'=>$this->don_gia_khuyen_mai, 
                'hinh'=>$this->hinh,
                'san_pham_moi'=>$this->san_pham_moi, 
                'so_lan_xem'=>$this->so_lan_xem, 
                'ngay_tao'=>$this->ngay_tao);
    }
     public function checkData($data)
    {
        $kq=true;
        if($data['ten_san_pham']=='')
        {
           $this->dataErr['ten_san_pham']='<span style="color:#ff0000">*</span>';
           $kq=false;
        }
        if($data['ten_san_pham_url']=='')
        {
            $this->dataErr['ten_san_pham_url']='<span style="color:#ff0000">*</span>';
           $kq=false;
        }
        if($data['mo_ta_tom_tat']=='')
        {
            $this->dataErr['mo_ta_tom_tat']='<span style="color:#ff0000">*</span>';
           $kq=false;
        }
        if($data['mo_ta_chi_tiet']=='')
        {
            $this->dataErr['mo_ta_chi_tiet']='<span style="color:#ff0000">*</span>';
           $kq=false;
        }
        if($data['don_gia']=='')
        {
            $this->dataErr['don_gia']='<span style="color:#ff0000">*</span>';
           $kq=false;
        }
        return $kq;        
    }
     public function getDataError()
      {
        return $this->dataErr;
      }
    
}
?>