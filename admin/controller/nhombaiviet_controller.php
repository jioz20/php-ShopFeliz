<?php 
class nhombaiviet_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/nhombaiviet/';
	}
	function danhsach()
	{
		$nbv = new nhombaiviet_model();

		$data = array('dsnbv'=>$nbv->listdata('grpos_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function sua()
	{
		$nhombaiviet = new nhombaiviet_model();
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('nbv'=>$nhombaiviet->loaddata($_GET['id']),
						  'tittle'=>'EDIT');
			$ten = @$_POST['grpos_tennhom'];
			$trangthai = @$_POST['grpos_trangthai'];

			$nhombaiviet->edit($ten, date('Y-m-d h:i:s'), $trangthai, $_GET['id']);

				if(isset($ten)&&isset($trangthai))
					chuyentrang('?controller=nhombaiviet&action=danhsach');
		}
		$this->render('edit', $data);
	}

	function them()
	{
		if(isset($_POST['grpos_tennhom']))
		{
			$ten = trim($_POST['grpos_tennhom']);
			$trangthai = $_POST['grpos_trangthai'];

			$nbv = new nhombaiviet_model();
			$nbv->add($ten, date('Y-m-d h:i:s'), date('Y-m-d h:i:s'), $trangthai);
				if(!empty($_POST['grpos_tennhom']))
					chuyentrang('?controller=nhombaiviet&action=danhsach');

		}
		$this->render('edit', array('tittle'=>'ADD'));
	}


	function xoa()
	{
		try 
		{
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				if(isset($_GET['sts'])&&is_numeric($_GET['sts']))				
					$stas = new nhombaiviet_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=nhombaiviet&action=danhsach');
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
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				$s = 0;
				if(isset($_GET['sts'])&&is_numeric($_GET['sts']))
					if($_GET['sts'] == 1)
						$s = 0;
					else 
						$s = 1;
					$stas = new nhombaiviet_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=nhombaiviet&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
}
?>