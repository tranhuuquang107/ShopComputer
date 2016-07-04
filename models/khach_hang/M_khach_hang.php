<?php
class M_khach_hang
{
    private $ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email;
    private $dataErr=array('ma_khach_hang' =>'','ten_khach_hang' =>'','phai' =>'','ngay_sinh' =>'',
    'dia_chi' =>'','dien_thoai' =>'','email' =>'');
    public function setData($data)
    {
        $this->ma_khach_hang=isset($data['ma_khach_hang'])?$data['ma_khach_hang']:'';
        $this->ten_khach_hang=isset($data['ten_khach_hang'])?$data['ten_khach_hang']:'';
        $this->phai=isset($data['phai'])?$data['phai']:0;
        $this->ngay_sinh=isset($data['ngay_sinh'])?$data['ngay_sinh']:'';
        $this->dia_chi=isset($data['dia_chi'])?$data['dia_chi']:'';
        $this->dien_thoai=isset($data['dien_thoai'])?$data['dien_thoai']:'';
        $this->email=isset($data['email'])?$data['email']:'';
    }
      public function getData()
      {
        $data=array(
            'ma_khach_hang'=>$this->ma_khach_hang,
            'ten_khach_hang'=>$this->ten_khach_hang,
            'phai'=>$this->phai,
            'ngay_sinh'=>$this->ngay_sinh,
            'dia_chi'=>$this->dia_chi,
            'dien_thoai'=>$this->dien_thoai,
            'email'=>$this->email
        );
        return $data;
      }
      public function checkData($data)
      {
        $kq=true;
        if($data['ten_khach_hang']=='')
        {
            
            $this->dataErr['ten_khach_hang']='<span style="color:#ff0000">*</span>';
            $kq=false;
        }
        if($data['dia_chi']=='')
        {
            
            $this->dataErr['dia_chi']='<span style="color:#ff0000">*</span>';
            $kq=false;
        }
        if($data['dien_thoai']=='')
        {
            
            $this->dataErr['dien_thoai']='<span style="color:#ff0000">*</span>';
            $kq=false;
        }
        if($data['email']=='')
        {
            
            $this->dataErr['email']='<span style="color:#ff0000">*</span>';
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