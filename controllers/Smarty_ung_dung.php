<?php
session_start();
chdir(dirname(__DIR__));
define('path','http://localhost:/24-6doan/');
require_once('smarty/libs/Smarty.class.php');
include_once('models/loai_san_pham/M_loai_san_pham.php');
include_once('models/san_pham/M_san_pham_table.php');
include_once('models/san_pham/M_san_pham.php');
include_once('library/Gio_hang.php');
include_once('library/Pager.php');
include_once('models/nguoi_dung/M_nguoi_dung_table.php');
include_once('models/khach_hang/M_khach_hang.php');
include_once('models/khach_hang/M_khach_hang_table.php');
class Smarty_ung_dung extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->setCacheDir('views/caches');
        $this->setConfigDir('views/configs');
        $this->setTemplateDir('views/templates');
        $this->setCompileDir('views/templates_c');
        $m_loai_san_pham=new M_loai_san_pham_table();
        $this->assign('LoaiSanPhamMenuLeft',$m_loai_san_pham->DsLoaiSanPham());
        $this->assign('path',path);
        $this->assign('title_ung_dung','Công ty ABC chuyên cung cấp mainboard-cpu-ram');
    }
}
?>