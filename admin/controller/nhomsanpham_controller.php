<?php 
class nhomsanpham_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/nhomsanpham/';
	}
	function danhsach()
	{
		$nsp = new nhomsanpham_model();
		$data = array('dsnhomsp'=>$nsp->listdata('grpro_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$nhomsp = new nhomsanpham_model();

			$data = array('nsp'=>$nhomsp->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
	}

	function sua()
	{
		$nhomsp = new nhomsanpham_model();
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('nsp'=>$nhomsp->loaddata($_GET['id']), 'tittle'=>'EDIT');
			$ten = @$_POST['grpro_ten'];
			if(isset($_POST['grpro_alias'])&&$_POST['grpro_alias'])
				$alias = @$_POST['grpro_alias'];
			else 
				$alias = strtoseo($ten);

			$trangthai = @$_POST['grpro_trangthai'];
			$macha = @$_POST['grpro_macha'];
			$nhomsp->edit($ten, $macha, $alias,  $trangthai, date('Y-m-d h:i:s'), $_GET['id']);

			if(isset($trangthai))
				chuyentrang('?controller=nhomsanpham&action=danhsach');

		}
		$this->render('edit', $data);
	}
		
	function them()
	{
		if(isset($_POST['grpro_ten'], $_POST['grpro_macha']))
		{
			$ten = $_POST['grpro_ten'];
			$macha = $_POST['grpro_macha'];
			$trangthai = $_POST['grpro_trangthai'];

			if(isset($_POST['grpro_alias'])&&$_POST['grpro_alias'])
				$alias = $_POST['grpro_alias'];
			else 
				$alias = strtoseo($_POST['grpro_ten']);

			$nsp = new nhomsanpham_model();
			$nsp->add($ten, $macha, $alias, $trangthai);

			if(isset($ten, $macha)&&(!empty($ten))&&(!empty($macha)))
				chuyentrang('?controller=nhomsanpham&action=danhsach');
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
					$stas = new nhomsanpham_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=nhomsanpham&action=danhsach');
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
					$stas = new nhomsanpham_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=nhomsanpham&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}

}
?>