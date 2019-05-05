<?php 
class chucnang_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/chucnang/';
	}
	function danhsach()
	{
		$fun = new chucnang_model();
		$data = array('dschucnang'=>$fun->listdata('fun_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$fun = new chucnang_model();
			$nqt = new nhomquantri_model();

			$data = array('dsnhomquantri'=> $nqt->listdata('groupads', 100),
							'func'=>$fun->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
	}

	function sua()
	{
		$fun = new chucnang_model();
		$nqt = new nhomquantri_model();

		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('dsnhomquantri'=> $nqt->listdata('groupads_ma', 100),
						  'func'=> $fun->loaddata($_GET['id']),
						  'title'=>'EDIT');
			
			$chucnangcha = @$_POST['fun_chucnangcha'];
			$ten = @$_POST['fun_ten'];
			$_POST['fun_link'] = strtoseo(@$_POST['fun_ten']);
			$status = @$_POST['fun_trangthai'];
			$fun->edit($ten, $_POST['fun_link'], $chucnangcha, $status, $_GET['id']);

			if(isset($chucnangcha,$ten,$status))
				chuyentrang('?controller=chucnang&action=danhsach');
		}
		$this->render('edit', $data);
	}


	function them()
	{
		$nqt = new nhomquantri_model();
        $data = array('dsnhomquantri'=> $nqt->listdata('groupads_ma', 100),
    				  'title'=>'ADD');

		if(isset($_POST['fun_ten'], $_POST['fun_link'], $_POST['fun_chucnangcha'], $_POST['fun_trangthai']))
		{
			$ten = trim($_POST['fun_ten']);
			$link = trim($_POST['fun_link']);
			$chucnangcha = trim($_POST['fun_chucnangcha']);
			$trangthai = trim($_POST['fun_trangthai']);
			$fu = new chucnang_model();
			$fu->add($ten, $link, $chucnangcha, $trangthai);
				if(isset($ten, $chucnangcha, $trangthai))
					chuyentrang('?controller=chucnang&action=danhsach');
		}
		$this->render('edit', $data);
	}

	function xoa()
	{
		try 
		{
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				if(isset($_GET['sts'])&&is_numeric($_GET['sts']))				
					$stas = new chucnang_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=chucnang&action=danhsach');
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
					$stas = new chucnang_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=chucnang&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
}
?>