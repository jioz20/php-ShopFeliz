<?php 
class hoadon_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/hoadon/';
	}
	function danhsach()
	{
		$hd = new hoadon_model();
		$stb = new trangthaidonhang_model();
		$data = array('dshoadon'=>$hd->listdata('bill_ma', 100),
					  'stb'=>$stb->listdata('stb_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$hd = new hoadon_model();
			$debill = new trangthaidonhang_model();

			$data = array('stbill'=> $debill->listdata('stb_ma', 100),
							'bi'=>$hd->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
	}

	function sua()
	{
		$st = new trangthaidonhang_model();
		$bl = new hoadon_model(); 

		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('stt'=>$st->listdata('stb_ma', 10),
						  'bi'=>$bl->loaddata($_GET['id']),
						  'tittle'=>'EDIT');

			$mahoadon = trim(@$_POST['bill_mahoadon']);
			$ngaydat = (string)@$_POST['bill_ngaydat'];
			$trigia = trim(@$_POST['bill_trigia']);	
			$magiamgia = trim(@$_POST['bill_magiamgia']);
			$tenkhachhang = trim(@$_POST['bill_tenkhachhang']);
			$sdt = trim(@$_POST['bill_sodienthoai']);
			$diachi = trim(@$_POST['bill_diachi']);
			$email = trim(@$_POST['bill_email']);
			$stbill = @$_POST['bill_trangthaidonhang'];
			$status = @$_POST['bill_trangthai'];	
			$ma = $_GET['id'];

			$bl->edit($mahoadon, $ngaydat, $trigia, $magiamgia, $tenkhachhang, $sdt, $diachi, $email, 
				$stbill, $status, date('Y-m-d h:i:s'), $_GET['id']);

				if(!empty($mahoadon)&&!empty($tenkhachhang)&&!empty($sdt)&&!empty($diachi))
					chuyentrang('?controller=hoadon&action=danhsach');
		}
		$this->render('edit', $data);
	}

	function them()
	{
		$st = new trangthaidonhang_model();
		$data = array('stt'=>$st->listdata('stb_ma', 10),
					  'tittle'=>'ADD');
		if(isset($_POST['bill_mahoadon'], $_POST['bill_tenkhachhang'])&&$_POST['bill_mahoadon'])
		{  
			$mahoadon  = $_POST['bill_mahoadon'];
			$ngaydat = $_POST['bill_ngaydat'];
			$trigia  = $_POST['bill_trigia'];
			$magiamgia = $_POST['bill_magiamgia'];
			$khachhang = $_POST['bill_tenkhachhang'];
			$sodienthoai = $_POST['bill_sodienthoai'];
			$diachi = $_POST['bill_diachi'];
			$email = $_POST['bill_email'];
			$stb = $_POST['bill_trangthaidonhang'];
			$trangthai = @$_POST['bill_trangthai'];

			$hd  = new hoadon_model();
			$hd->add($mahoadon, $ngaydat, $trigia, $magiamgia, $khachhang, $sodienthoai, $diachi, 
				$email,$stb,  date('Y-m-d h:i:s'), $trangthai, date('Y-m-d h:i:s'));

			if(isset($trangthai))
					chuyentrang('?controller=hoadon&action=danhsach');
		}
		$this->render('edit', $data);
	}

	function editsts()
	{
		try 
		{
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				$s = 0;
				if(isset($_GET['sts'])&&is_numeric($_GET['sts']))
					if($_GET['sts'] == 1)
						$s = 0;
					else 
						$s = 1;
					$stas = new hoadon_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=hoadon&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}


	function xoa()
	{
		try 
		{
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				if(isset($_GET['sts'])&&is_numeric($_GET['sts']))				
					$stas = new hoadon_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=hoadon&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
}
?>