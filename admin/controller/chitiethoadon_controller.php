<?php 
class chitiethoadon_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/chitiethoadon/';
	}
	function danhsach()
	{
		$debill = new chitiethoadon_model();
		$data = array('dbl'=>$debill->listdata('detail_ngaytao', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$sp = new sanpham_model();
			$db = new chitiethoadon_model();
			$data = array('dssanpham'=>$sp->listdata('pro_ma', 100),
						  'cthd'=>$db->loaddata2($_GET['id']));

			
		}
		$this->render('detail', $data);
	}

	function sua()
	{
		$db = new chitiethoadon_model();
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('cthd'=>$db->loaddata($_GET['id']),
						  'tittle'=>'EDIT');

			$masanpham = @$_POST['detail_masanpham'];
			$soluong = trim(@$_POST['detail_soluong']);	
			$dongia = trim(@$_POST['detail_dongia']);
			$status = @$_POST['detail_trangthai'];
			
			$edit = new chitiethoadon_model();
			$edit->edit($masanpham, $soluong, $dongia, $status, date('Y-m-d h:i:s'), $_GET['id']);
				if(!empty($masanpham))
					chuyentrang('?controller=chitiethoadon&action=danhsach');
		}
		$this->render('edit', $data);
	}
	function them()
	{
		if(isset($_POST['detail_mahoadon'], $_POST['detail_masanpham']))
		{
			$mahoadon = $_POST['detail_mahoadon'];
			$masanpham = $_POST['detail_masanpham'];
			$dongia = $_POST['detail_dongia'];
			$soluong = $_POST['detail_soluong'];
			$trangthai = $_POST['detail_trangthai'];
			$db = new chitiethoadon_model();
			$db->add($mahoadon, $masanpham, $soluong, $dongia, $trangthai);
			if(!empty($mahoadon))
					chuyentrang('?controller=chitiethoadon&action=danhsach');
		}
		$this->render('edit', array('tittle'=>'ADD'));
	}

	function xoa()
	{
		try 
		{
			if(isset($_GET['id']))
			{
				if(isset($_GET['sts']))				
					$stas = new chitiethoadon_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=chitiethoadon&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}

	function editsts()
	{
		try 
		{

			if(isset($_GET['id']))
			{
				$s = 0;
				if(isset($_GET['sts']))
					if($_GET['sts'] == 1)
						$s = 0;
					else 
						$s = 1;
					$stas = new chitiethoadon_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=chitiethoadon&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
}
?>