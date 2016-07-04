<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('library/Pager.php');

class C_san_pham
{
    
    public function index()
    {
        $m_san_pham_table =new M_san_pham_table();
        $DSSanPhamMoi=$m_san_pham_table->DSSanPhamMoi();         
        $smarty=new Smarty_ung_dung();
        if(count($DSSanPhamMoi)>0)
        $smarty->assign('DSSanPhamMoi',$DSSanPhamMoi);
        $smarty->display('trang_chu.tpl');   
    }
    public function SanPhamMoi()
    {
        $smarty=new Smarty_ung_dung();
        $m_san_pham_table =new M_san_pham_table();
        $DSSanPhamMoi=$m_san_pham_table->DSSanPhamMoi();
        
        if(count($DSSanPhamMoi)>0)
        $smarty->assign('DSSanPhamMoi',$DSSanPhamMoi);
        $smarty->display('sanpham/doc_ds_san_pham.tpl'); 
    }   
     public function DSSanPham()
    {
        $limit=8;
        $paper=new Pager();
        $start=$paper->findStart($limit);
        $m_san_pham_table=new M_san_pham_table();
        $NumRow=$m_san_pham_table->TongSoSanPham();
        $NumPage=$paper->findPages($NumRow, $limit);
        $PageLink=$paper->pageList($_GET['page'], $NumPage);
        $DSSanPham=$m_san_pham_table->DSSanPhamPhanTrang($start,$limit);
        $smarty=new Smarty_ung_dung();
        $smarty->assign('DSSanPham', $DSSanPham);
        $smarty->assign('PageLink',$PageLink);
         $smarty->display('sanpham/doc_san_pham_theo_loai.tpl'); 
    }
    
     public function SanPhamLoaiCha()
    {
      if(isset($_GET['key']))
      {
        $chuoi=$_GET['key'];        
        $m_san_pham_theo_url=new M_loai_san_pham_table();
        $M_san_pham_table=new M_san_pham_table();
        $Loaicha=$m_san_pham_theo_url->LoaiSanPhamTheoURL($chuoi);        
        //2-6
        if(!$Loaicha)//n?u k t?n t?i $loai cha thì v? l?i trang ch?
        header('location:'.path);
        //
        $smarty=new Smarty_ung_dung();
        $DSLoaiCon=$m_san_pham_theo_url->DSLoaiSanPhamCon($Loaicha['ma_loai']);    
        if($DSLoaiCon)
        {
            $mangMaloai=array();
            foreach($DSLoaiCon as $item)
            {
                $mangMaloai[]=$item['ma_loai'];
            }
            $chuoiMaLoai=implode(",",$mangMaloai);//ki?m tra  n?i m?ng
            $DSSanPham=$M_san_pham_table->SanPhamTheoLoaiCon($chuoiMaLoai);
            if(count($DSSanPham)>0)
            $smarty->assign('DSSanPham',$DSSanPham);            
        }
        $smarty->assign('LoaiCha',$Loaicha);
        $smarty->display('sanpham/doc_san_pham_theo_loai.tpl');            
        //end 2-6      
      }
      else
      header("location:".path);
    }
     public function SanPhamLoaiCon()
    {
      if(isset($_GET['key']))
      {
        $chuoi=$_GET['key'];
         
        $m_san_pham_theo_url=new M_loai_san_pham_table();
        $LoaiCon=$m_san_pham_theo_url->LoaiSanPhamTheoURL($chuoi);
        
        if(!$LoaiCon)
        header('location:'.path);
        $LoaiCha=$m_san_pham_theo_url->LoaiSanPhamMaLoai($LoaiCon['ma_loai_cha']);
        
        $M_san_pham_table=new M_san_pham_table();
        $DSSanPham=$M_san_pham_table->SanPhamTheoLoai($LoaiCon['ma_loai']);
         $smarty=new Smarty_ung_dung();
         //2-6
         $smarty->assign('LoaiCon',$LoaiCon);
         $smarty->assign('LoaiCha',$LoaiCha);
         //end 2-6
        if(count($DSSanPham)>0)
        $smarty->assign('DSSanPham',$DSSanPham);
        $smarty->display('sanpham/doc_san_pham_theo_loai.tpl');
      }
      else
      header("location:".path);
    }
    //4-6
    public function ChiTietSanPham()
    {
       if(isset($_GET['key']))
      {
        $chuoi=$_GET['key'];
        $mang=explode('-',$chuoi);        
        $id=$mang[count($mang)-1];        
        $m_san_pham_table=new M_san_pham_table();
        $san_pham=$m_san_pham_table->SanPhamId($id);
        if(isset($san_pham))
        {
             $smarty=new Smarty_ung_dung();
             $DSSanPhamCungLoai=$m_san_pham_table->DSSanPhamCungLoai($id,$san_pham['ma_loai']);
             if($DSSanPhamCungLoai)
             $smarty->assign('DSSanPhamCungLoai',$DSSanPhamCungLoai);
             if(count($san_pham)>0)
             $smarty->assign('san_pham',$san_pham);
             $smarty->display('sanpham/doc_chi_tiet_san_pham.tpl');
        }
        else
            header('location:'.path);
      }
      else
        header('location:'.path);
    }
    //end 4-6
    public function DanhSachSanPhamAdmin()
    {
       $limit=20;
        $paper=new Pager();
        $start=$paper->findStart($limit);
        $m_san_pham_table=new M_san_pham_table();
        $NumRow=$m_san_pham_table->TongSoSanPham();
        $NumPage=$paper->findPages($NumRow, $limit);
        $PageLink=$paper->pageList_admin($_GET['page'], $NumPage);
        $DSSanPham=$m_san_pham_table->DSSanPhamPhanTrang($start,$limit);
        if(!$DSSanPham)
            header('location:'.path);
        $smarty=new Smarty_ung_dung();
        $smarty->assign('DSSanPham', $DSSanPham);
        $smarty->assign('PageLink',$PageLink);
         $smarty->display('sanpham/doc_ds_san_pham_admin.tpl'); 
    }
    public function ThemSanPham()
    {
        $dataSanPham=array('ten_san_pham'=>'', 'ten_san_pham_url'=>'', 'ma_loai'=>'', 'mo_ta_tom_tat'=>'', 'mo_ta_chi_tiet'=>'', 'don_gia'=>'', 'don_gia_khuyen_mai'=>'', 'hinh'=>'', 'san_pham_moi'=>0, 'so_lan_xem'=>1, 'ngay_tao'=>date('Y-m-d'));
        $dataSanPhamErr=array('ten_san_pham'=>'', 'ten_san_pham_url'=>'', 'mo_ta_tom_tat'=>'', 'mo_ta_chi_tiet'=>'', 'don_gia'=>'','hinh'=>'');
        if(isset($_POST['btnThem']))
        {
            $dataSanPham=array('ten_san_pham'=>$_POST['ten_san_pham'], 'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 'ma_loai'=>$_POST['ma_loai'], 'mo_ta_tom_tat'=>$_POST['mo_ta_tom_tat'], 'mo_ta_chi_tiet'=>$_POST['mo_ta_chi_tiet'], 'don_gia'=>$_POST['don_gia'], 'don_gia_khuyen_mai'=>$_POST['don_gia_khuyen_mai'], 'hinh'=>'', 'san_pham_moi'=>isset($_POST['san_pham_moi'])?$_POST['san_pham_moi']:0, 'so_lan_xem'=>1, 'ngay_tao'=>$_POST['ngay_tao']);
            $m_san_pham=new M_san_pham();
            if(($m_san_pham->checkData($dataSanPham)))
            {
              //uploadfile
              $hinh=$_FILES['hinh'];
              if($hinh['error']==0)
              {
                //kiem tra type
                $mangType=array('image/jpeg','image/JPG','image/png','image/gif');
                if(array_search($hinh['type'],$mangType)!==false)
                {
                    //kiem tra kich co file
                    if($hinh['size']<2000000)
                    {
                        //thuc hien upload file vao thu muc
                        $nameHinh=time().'-'.$hinh['name'];
                        move_uploaded_file($hinh['tmp_name'],'./public/tam/'.$nameHinh);
                        $dataSanPham['hinh']=$nameHinh;
                        $m_san_pham_table=new M_san_pham_table();
                        $kq=$m_san_pham_table->ThemSanPham($dataSanPham);
                        if($kq->rowCount()>0)
                        {
                            $_SESSION['mss']='thêm thành công';
                           // header("location:".path.'quan-tri/san-pham/them-san-pham.html');
                            echo '<meta http-equiv="refresh" content="0;URL=\''.path.'quan-tri/san-pham/them-san-pham.html'.'\'"/>';
                           //'<meta http-euiv="refresh" content="0;URL=''"/>'
                           return;
                        }
                        else
                            {
                                $dataSanPhamErr['err']="lổi";
                            }
                    }
                    else
                        $dataSanPhamErr['hinh']='vui long chi chon file nho hon 2mb';
                }
                else
                    $dataSanPhamErr['hinh']='vui long chi chon file hinh';
              } 
              else
                   $dataSanPhamErr['hinh']='vui long chi chon hình sản phẩm';          
            }
            else
                $dataSanPhamErr=$m_san_pham->getDataError();
        }
        if(!$dataSanPham)
            header('location:'.path);
        $m_loai_san_pham_table=new M_loai_san_pham_table();        
        $smarty=new Smarty_ung_dung();
        $smarty->assign('data',$dataSanPham);
        $smarty->assign('dataErr',$dataSanPhamErr);
        $smarty->assign('DSLoaiSanPham',$m_loai_san_pham_table->DsLoaiSanPham());
        $smarty->display('sanpham/them_san_pham.tpl');
        
    }
    public function CapNhatSanPham()
    {
        if(!isset($_GET['key']))
            header('location:'.path);
        $key=$_GET['key'];        
        $m_loai_san_pham_table=new M_loai_san_pham_table();
        $m_san_pham_table=new M_san_pham_table();        
        $dataSanPham=$m_san_pham_table->SanPhamId($key);
        if(!$dataSanPham)
            header('location:'.path);        
       $dataSanPhamErr=array('ten_san_pham'=>'', 'ten_san_pham_url'=>'', 'mo_ta_tom_tat'=>'', 'mo_ta_chi_tiet'=>'', 'don_gia'=>'','hinh'=>'');
       if(isset($_POST['btnCapNhat']))
       {
            $dataSanPham=array('ma_san_pham'=>$key,'ten_san_pham'=>$_POST['ten_san_pham'], 'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 'ma_loai'=>$_POST['ma_loai'], 'mo_ta_tom_tat'=>$_POST['mo_ta_tom_tat'], 'mo_ta_chi_tiet'=>$_POST['mo_ta_chi_tiet'], 'don_gia'=>$_POST['don_gia'], 'don_gia_khuyen_mai'=>$_POST['don_gia_khuyen_mai'], 'hinh'=>$dataSanPham['hinh'], 'san_pham_moi'=>isset($_POST['san_pham_moi'])?$_POST['san_pham_moi']:0, 'so_lan_xem'=>1, 'ngay_tao'=>$_POST['ngay_tao']);
            $m_san_pham=new M_san_pham();           
            if(($m_san_pham->checkData($dataSanPham)))
            {
                $resultUpLoad=true;
                $hinh=$_FILES['hinh'];
                if($hinh['error']==0)
                {
                    //kiem tra type
                    $mangType=array('image/jpeg','image/JPG','image/png','image/gif');
                    if(array_search($hinh['type'],$mangType)!==false)
                    {
                        //kiem tra kich co file
                        if($hinh['size']<2000000)
                        {
                            //thuc hien upload file vao thu muc
                            $nameHinh=time().'-'.$hinh['name'];
                            move_uploaded_file($hinh['tmp_name'],'./public/tam/'.$nameHinh);
                            //xóa ảnh cũ
                            if(file_exists('./public/tam/'.$dataSanPham['hinh']))
                                unlink('./public/tam/'.$dataSanPham['hinh']);

                            $dataSanPham['hinh']=$nameHinh;
                        }
                        else
                        {
                            $dataSanPhamErr['hinh']='vui long chi chon file nho hon 2mb';
                            $resultUpLoad=false;
                        }
                    }
                    else
                    {
                        $dataSanPhamErr['hinh']='vui long chi chon file hinh';
                        $resultUpLoad=false;
                    }
                }               

               
                //thực hiện cập nhật
                if($resultUpLoad)
                {
                    $kq=$m_san_pham_table->CapNhatSanPham($dataSanPham);
                    if($kq->rowCount()>0)
                    {
                        $_SESSION['mss']='cập nhật thành công';
                       // header("location:".path.'quan-tri/san-pham/cap-nhat-san-pham/'.$key);
                        echo '<meta http-equiv="refresh" content="10;URL=\''.path.'quan-tri/san-pham/cap-nhat-san-pham/'.$key.'\'"/>';
                    }
                    else
                        {
                            $dataSanPhamErr['err']="cập nhật không thành công";
                        }
                }
                //end thực hiện cập nhật
            }
            else
                $dataSanPhamErr=$m_san_pham->getDataError();
       }
       $m_san_pham_table=new M_san_pham_table();
       $smarty=new Smarty_ung_dung();
       $smarty->assign('data',$dataSanPham);
       $smarty->assign('dataErr',$dataSanPhamErr);
       $smarty->assign('DSLoaiSanPham',$m_loai_san_pham_table->DsLoaiSanPham());
       $smarty->display('sanpham/cap_nhat_san_pham.tpl');
    
    }
     public function SanPhamKhuyenMai()
    {
        echo "san pham khuyen mai";
    }
    public function TimKiemSanPham()
    {
        $gttim=$_POST['gt'];
        $m_san_pham_table=new M_san_pham_table();
        $DSSanPham=$m_san_pham_table->TimKiemSanPham($gttim);
        if($DSSanPham)
        {
            $chuoi='
            <div class="panel panel-primary"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">Danh sách sản phẩm</h3> 
            </div> 
            <div class="panel-body">                             
                    <div class="row">';
                   
                      foreach ($DSSanPham as $sp)
                      {
                          $chuoi.='<div class="col-xs-6 col-md-3">';
                           if ($sp['don_gia_khuyen_mai']>0)
                                $chuoi.='<img src="'.path.'public/img/kmicon.gif" style="position:absolute; right:15px"/>';
                            else 
                                if ($sp['san_pham_moi']==1)
                                $chuoi.='<img src="'.path.'public/img/new-icon.gif" style="position:absolute; right:15px"/>';
                            
                              $chuoi.='<div class="thumbnail">';                              
                                $chuoi.='<a href="'.path.'san-pham/'.$sp['ten_san_pham_url'].'-'.$sp['ma_san_pham'].'.html" class="thumbnail">';
                                  $chuoi.='<img src="'.path.'public/hinh_san_pham/'.$sp['hinh'].'" alt="">';
                                $chuoi.='</a>';                                
                                $chuoi.='<div class="caption">';
                                    $chuoi.='<h4  style="height: 35px">'.$sp['ten_san_pham'].'</h4>';
                                    $chuoi.='<p>';                                        
                                        if ($sp['don_gia_khuyen_mai']>0)
                                        {
                                           $chuoi.='<strike>Giá: '.number_format($sp['don_gia']).' </strike> -'; 
                                           $chuoi.='Giá KM: '.number_format($sp['don_gia_khuyen_mai']).'vnđ';
                                        }
                                        else
                                            $chuoi.='Giá: '.number_format($sp['don_gia']).' vnđ';
                                        
                                    $chuoi.='</p>';
                                    $chuoi.='<p align="center">'; 
                                        $chuoi.='<a href="'.path.'san-pham/'.$sp['ten_san_pham_url'].'-'.$sp['ma_san_pham'].'.html" class="btn btn-primary" role="button">Chi tiết</a>'; 
                                    $chuoi.='</p>';
                              $chuoi.='</div>';
                              $chuoi.='</div>';
                          $chuoi.='</div>';
                          
                      }                       
                    $chuoi.='</div>
            </div> 
        </div>';
        echo json_encode(array('chuoi'=>$chuoi));
        }  
        else
             echo json_encode(array('chuoi'=>'Không tìm thấy sản phẩm'));
    }
} 
?>