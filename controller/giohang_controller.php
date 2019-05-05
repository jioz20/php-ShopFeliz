<?php 
class giohang_controller
{
	function phatgiohang()
	{
		if(!isset($_SESSION['giohang']))
			$_SESSION['giohang']= array();
	}

	function muahang()
	{
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$id = $_GET['id'];
			$dssp = new sanpham_model();
			$sp = $dssp->loaddata($id);

			if($sp && $sp->pro_soluong > 0)
			{
				if(!isset($_SESSION['giohang'][$sp->pro_ma]))
				{
					$sanPhamMua = array(
						'id'=>$sp->pro_ma,
						'ten'=>$sp->pro_ten,
						'hinh'=>$sp->pro_hinh,
						'gia'=>$sp->pro_gia,
						'soluong'=>1);
					$_SESSION['giohang'][$sp->pro_ma] = $sanPhamMua;
				}
				else 
				{
					$_SESSION['giohang'][$sp->pro_ma]['soluong'] += 1;
				}
				return true;
			}
			else 
				return false;
		}
		else
			return false;
	}

	function xoasanpham()
	{
		if(isset($_GET['id'])&&$_GET['id'])
		{
			if(isset($_SESSION['giohang'][$_GET['id']]))
			{
				unset($_SESSION['giohang'][$_GET['id']]);
				return true;
			}
			else 
				return false;
		}
		else 
			return false;
	}

	function doisoluong()
	{
		if(isset($_POST['soluong'])&&$_POST['soluong']&&is_array($_POST['soluong']))
		{
			foreach($_POST['soluong'] as $key => $soluong)
			{
				$_SESSION['giohang'][$key]['soluong'] = $soluong;
			}
			return true;
		}
		else 
			return false;
	}

	function countCard()
	{
		if(isset($_SESSION['giohang']))
			return count($_SESSION['giohang']);
		return 0;
	}


}
?>