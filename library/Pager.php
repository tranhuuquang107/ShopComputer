<?php
class Pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}
	function pageList($curpage, $pages)
	{
	   $style="style='background:#004080; border:#FFFFFF 1px solid; color:#FFFFFF; width:20px; padding: 5px 15px 5px 15px; text-align:center'";
	   $file=$_SERVER['PHP_SELF'];
       $file=substr($file,0,strlen($file)-4);
       $mang=explode('/',$file);
       $ten_file=$mang[count($mang)-1];
       $file='/'.$mang[1].'/'. str_replace('_','-',$ten_file);//chạy trên host thật bõ '/'.$mang[1].
		$page_list="";
			if(($curpage!=1)&&($curpage))
			{
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/1\" title=\"Trang đầu\"><<</a></span>";
			}
			if(($curpage-1)>0)
			{
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/".($curpage-1)."\" title=\"Về trang trước\"><</a></span>";
			}
		//	if($curpage>2)
		//		$page_list.="<span $style>...</span>";
				
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.="&nbsp;"."<span $style><b>".$i."</b></span>";
					}
					else
					{
						$page_list.="&nbsp;"."<span $style><a href ='".$file."/".$i."' title='Trang ".$i."'>".$i."</a></span>";
					}
				}

		//	if(($curpage+2)<$pages)
		//		$page_list.="<span $style>...</span>";

			if(($curpage+1)<=$pages)
			{
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/".($curpage+1)."\" title=\"Đến trang sau\">></a></span>";
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/".$pages."\" title=\"Đến trang cuối\">>></a></span>";
			}
			return $page_list;
	}
    function pageList_admin($curpage, $pages)
	{
	   $style="style='background:#004080; border:#FFFFFF 1px solid; color:#FFFFFF; width:20px; padding:5px; text-align:center'";
	   $file=$_SERVER['PHP_SELF'];
       $file=substr($file,0,strlen($file)-4);
       $mang=explode('/',$file);
       $ten_file=$mang[count($mang)-1];
       $file='/'.$mang[1].'/quan-tri/'. str_replace('_','-',$ten_file);//chạy trên host thật bõ '/'.$mang[1].
		$page_list="";
			if(($curpage!=1)&&($curpage))
			{
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/1\" title=\"Trang đầu\"><<</a></span>";
			}
			if(($curpage-1)>0)
			{
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/".($curpage-1)."\" title=\"Về trang trước\"><</a></span>";
			}
		//	if($curpage>2)
		//		$page_list.="<span $style>...</span>";
				
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.="&nbsp;"."<span $style><b>".$i."</b></span>";
					}
					else
					{
						$page_list.="&nbsp;"."<span $style><a href ='".$file."/".$i."' title='Trang ".$i."'>".$i."</a></span>";
					}
				}

		//	if(($curpage+2)<$pages)
		//		$page_list.="<span $style>...</span>";

			if(($curpage+1)<=$pages)
			{
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/".($curpage+1)."\" title=\"Đến trang sau\">></a></span>";
				$page_list.="&nbsp;"."<span $style><a href =\"".$file."/".$pages."\" title=\"Đến trang cuối\">>></a></span>";
			}
			return $page_list;
	}
	function nextPrev($curpage,$pages)//chỉ hiển thị 2 nút Truoc và Sau
		{
			$next_prev="";
			if(($curpage-1)<=0)
			{
				$next_prev.="Về trang trước";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."/".($curpage-1)."\">Về trang trước</a></span>";
			}
			$next_prev.=" | ";
			if(($curpage+1)>$pages)
			{
				$next_prev.="Đến trang sau";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."/".($curpage+1)."\">Đến trang sau</a></span>";
			}
			return $next_prev;
		}
}
?>