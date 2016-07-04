<?php
include_once('controllers/Smarty_ung_dung.php');

class C_nguoi_dung
{
    public function DangNhap()
    {
        $smarty = new Smarty_ung_dung();
        if(isset($_POST['btnDangNhap']))
        {
            $tendangnhap=$_POST['ten_dang_nhap'];
            $matkhau=$_POST['mat_khau'];
            if(empty($tendangnhap) || empty($matkhau))
            {
                $smarty->assign('err',"vui lòng nhập đầy đủ thông tin");
            }
            else
            {
                $m_nguoi_dung_table=new M_nguoi_dung_table();
                $nguoi_dung=$m_nguoi_dung_table->getDangNhapNguoiDung($tendangnhap,$matkhau);
                if(!$nguoi_dung)
                    $smarty->assign('err','Đăng nhập không thành công');
                else
                {
                    $arrTTNguoiDung=array(
                                            'ten_nguoi_dung'=>$nguoi_dung['ho_ten'],
                                            'tendn'=>$nguoi_dung['ten_dang_nhap'],
                                            'role'=>$nguoi_dung['ma_loai_nguoi_dung']);
                    $_SESSION['nguoi_dung']=$arrTTNguoiDung;                    
                    header('location:'.path.'quan-tri/he-thong.html');
                }
            }            
        }
        
        $smarty->display('nguoi_dung/nguoi_dung.tpl');
    }
    public function HeThongQuanTri()
    {
        if(!isset($_SESSION['nguoi_dung']))        
            header("location:".path.'quan-tri/dang-nhap.html');                  
        $smarty = new Smarty_ung_dung();
        $smarty->display('nguoi_dung/he_thong.tpl');        
    }
    public function DangXuat()
    {
        unset($_SESSION['nguoi_dung']);
        header('location:'.path.'quan-tri/dang-nhap.html');
    }
}
?>