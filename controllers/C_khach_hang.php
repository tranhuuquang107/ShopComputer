<?php
include_once('controllers/Smarty_ung_dung.php');

class C_khach_hang
{
    public function themgiohang()
    {
        $msp=$_POST['msp'];
        $sl=$_POST['sl'];
        $m_san_pham_table=new M_san_pham_table();
        $san_pham=$m_san_pham_table->SanPhamId($msp);
        $giohang=new Gio_hang();
        if($san_pham)
        {
            if($san_pham['don_gia_khuyen_mai']>0)
                $giohang->Them($msp,$san_pham['ten_san_pham'],$san_pham['don_gia_khuyen_mai'],$sl);
            else
                $giohang->Them($msp,$san_pham['ten_san_pham'],$san_pham['don_gia'],$sl);
        }
            echo json_encode(array('tsl'=>$giohang->TongSoLuong(),'tt'=>$giohang->TongSoTien()));
    }
    public function DatHang()
    {
        
        $dataKhachHang=array('ten_khach_hang'=>'','phai'=>0,'ngay_sinh'=>'','dia_chi'=>'','dien_thoai'=>'',
        'email'=>'');
        $dataErr=array('ten_khach_hang' =>'','phai' =>'','ngay_sinh' =>'',
        'dia_chi' =>'','dien_thoai' =>'','email' =>'');
        if(isset($_POST['btnThem']))
        {
            $dataKhachHang=array(
                        'ten_khach_hang'=>$_POST['ten_khach_hang'],
                        'phai'=>$_POST['phai'],
                        'ngay_sinh'=>$_POST['ngay_sinh'],
                        'dia_chi'=>$_POST['dia_chi'],
                        'dien_thoai'=>$_POST['dien_thoai'],
                        'email'=>$_POST['email']);                        
                        $m_khach_hang=new M_khach_hang();
                        if($m_khach_hang->checkData($dataKhachHang))
                        {
                            $m_khach_hang->setData($dataKhachHang);         
                            $dataKhachHang=$m_khach_hang->getData();
                            $m_khach_hang_table=new M_khach_hang_table();
                            $MaKH=$m_khach_hang_table->ThemKhachHang($dataKhachHang);
                            //Thêm hóa đơn
                            $dataHoaDon=array('ngay_hd'=>date('Y-m-d'),'ma_khach_hang'=>$MaKH,'tri_gia'=>
                            $_SESSION['TongSoTien']);
                            $SoHD=$m_khach_hang_table->ThemHoaDonHang($dataHoaDon);
                            $giohang=new Gio_hang();
                            $ttGH=$giohang->ThongTinGioHang();
                            foreach($ttGH as $msp=>$tt)
                            {
                                $mangTTCT=array('so_hoa_don'=>$SoHD,'ma_san_pham'=>$msp,'so_luong'=>$tt[1],
                                'don_gia'=>$tt[0]);
                                $m_khach_hang_table->ThemChiTietHoaDon($mangTTCT);
                            } 
                           $giohang->HuyGioHang();    
                           header('location:'.path.'khach_hang/thong-tin-don-dat-hang-'.$SoHD.'.html');                     
                        }
                        else
                            $dataErr=$m_khach_hang->getDataError();
        }
       $smarty=new Smarty_ung_dung();  
       $smarty->assign('datakhachhang',$dataKhachHang);
       $smarty->assign('dataErr',$dataErr); 
       $smarty->display('khach_hang/dat_hang.tpl');
    }
   
    public function ThongTinGioHang()
    {
        $giohang=new Gio_hang();
        if(isset($_POST['btnCapNhat']))
        {
            $TTGH=$giohang->ThongTinGioHang();
            if($TTGH)
            {
                foreach($TTGH as $msp=>$tt)
                {
                   $slMoi=$_POST['sl_'.$msp];
                   if($slMoi!=$tt[1])
                   {
                        $giohang->CapNhatGioHang($msp,$slMoi);
                   } 
                }
            }
        }
        $TTGH=$giohang->ThongTinGioHang();
        $smarty=new Smarty_ung_dung();
        if($TTGH)
            $smarty->assign('TTGH',$TTGH);
        
       $smarty->display('khach_hang/thong_tin_gio_hang.tpl');
    }
     public function ThongTinDonDatHang()
    {
        if(isset($_GET['key']))
        {
            $soHD=$_GET['key'];
            $m_khach_hang_table=new M_khach_hang_table();
            $DonDatHang=$m_khach_hang_table->DonDatHang($soHD);
            if(!$DonDatHang)
                header('location:'.path);
            $smarty=new Smarty_ung_dung();  
              $this->guiMail($DonDatHang);
            $smarty->assign('DonDatHang',$DonDatHang);            
            $smarty->display('khach_hang/v_don_dat_hang.tpl');
         
        }
        
        else
            header('location:'.path);
    }
    public function guiMail($HoaDon)
    {
        
        require 'library/PHPMailer/PHPMailerAutoload.php';

        
        $mail = new PHPMailer;
      
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;        
        $mail->Debugoutput = 'html';     
        $mail->SMTPSecure='ssl';  
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;        
        $mail->SMTPAuth = true;        
        $mail->Username = "tranhuuquang107@gmail.com";        
        $mail->Password = "123456789";        
        $mail->setFrom('tranhuuquang107@gmail.com', 'Công ty TNHH');                       
        $mail->addAddress('tranhuuquang107@gmail.com', $HoaDon[0]['ten_khach_hang']);       
        $mail->Subject = 'Thông tin đơn đặt hàng';                       
        $mail->msgHTML($this->noi_dung_gui_mail($HoaDon));       
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
    public function noi_dung_gui_mail($hoadon)
    {
       
        $noi_dung='
        <table align="center" cellspacing="10px" border="0" style="border:1px solid #00F;" width="90%">
        	<tr>
            	<td style="padding-left:20px">Mã khách hàng</td>
                <td width="250px">'.$hoadon[0]['ma_khach_hang'].'</td>
                <td>Tên khách hàng</td>
                <td>'.$hoadon[0]['ten_khach_hang'].'</td>
            </tr>
            	<tr>
            	<td style="padding-left:20px">Địa chỉ</td>
                <td>'.$hoadon[0]['dia_chi'].'</td>
                <td>Điện thoại</td>
                <td>'.$hoadon[0]['dien_thoai'].'</td>
            </tr>
            	<tr>
            	<td style="padding-left:20px">Số hóa đơn</td>
                <td>'.$hoadon[0]['so_hoa_don'].'</td>
                <td>Ngày đặt</td>
                <td>'.$hoadon[0]['ngay_hd'].'</td>
            </tr>
            <tr>
            <td colspan="4">
                <table align="center" cellspacing="10px" border="0" width="100%">
            		<tr bgcolor="#999999"><td>STT</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td><td>Đơn giá</td><td>Số lượng</td><td>Thành thiền</td></tr>';
            $i=1;$tt=0;
            foreach($hoadon as $item)
            {
                $noi_dung.='<tr>';
                $noi_dung.= '<td>'.$i.'</td>';
                $noi_dung.= '<td>'.$item['ma_san_pham'].'</td>';
                $noi_dung.= '<td>'.$item['ten_san_pham'].'</td>';
                $noi_dung.= '<td>'.$item['don_gia'].'</td>';
                $noi_dung.= '<td>'.$item['so_luong'].'</td>';
                $noi_dung.= '<td>'.number_format($item['don_gia']*$item['so_luong']).'</td>';
                $noi_dung.='</tr>';
                $tt=$tt+$item['so_luong']*$item['don_gia'];
                $i++;
            }
            $noi_dung.='<tr><td colspan="5">Tổng trị giá hóa đơn</td><td>'.number_format($tt).'</td></tr>';    
          $noi_dung.='</table>        
            </td>
            </tr>
        </table>        
        ';
        
        return $noi_dung;
    }
}
?>