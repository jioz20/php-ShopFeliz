<?php 
	class capnhatgiohang_controller extends controller
	{
		function __construct()
		{
			$this->pathview = 'view/giohang/';
		}
		function capnhat()
		{	
			if(isset($_POST['soluong']))
			{
				$update = new giohang_controller();
				$update->doisoluong();
			}

			$Sesgh =  $_SESSION['giohang'];

			$tong = 0;
			foreach($Sesgh as $item)
			{
				$tt = $item['soluong']*$item['gia']; 
				$tong +=$tt;
			}

			$data = array('session'=>$Sesgh,
						  'tongtien'=>$tong);

			$this->render('cart', $data);
		}

		function xoahang()
		{
			if(isset($_GET['id']))
			{
				$xsp = new giohang_controller();
				if($xsp->xoasanpham($_GET['id']))
					chuyentrang('http://felizshop.us/giohang.html');
				else
					chuyentrang('http://felizshop.us/index.html');
			}
			else 
				chuyentrang('index.html');
		}

		function dathang()
		{
			if(isset($_GET['id']))
			{
				$dh = new giohang_controller();
				if($dh->muahang())
					chuyentrang('http://felizshop.us/giohang.html');
				else 
					chuyentrang('http://felizshop.us/index.html');
			}
			else 
				chuyentrang('http://felizshop.us/index.html');
		}
	}
 ?>