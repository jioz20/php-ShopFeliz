<?php 
class cauhinh_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/cauhinh/';
	}
	function danhsach()
	{
		$conf = new cauhinh_model();
		$data = array('dscauhinh'=>$conf->listdata('config_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');		
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {		
			$conf = new cauhinh_model();
			$data = array('config'=>$conf->loaddata($_GET['id']));
			$this->loadeditor('contentx');
			$this->render('detail', $data);
		}
	}
	function sua()
	{	
		$conf = new cauhinh_model();
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('config'=>$conf->loaddata($_GET['id']));
			$trangthai = @$_POST['config_trangthai'];
			$code = trim(@$_POST['config_code']);
			$giatri = @$_POST['config_giatri'];
			$id = $_GET['id'];
			
			$conf->edit($code, $giatri, date('Y-m-d h:i:s'), $trangthai, $id);

			if(isset($trangthai))
				chuyentrang('?controller=cauhinh&action=danhsach');
		}
		$this->loadeditor('contentx');		
		$this->render('edit', $data);
	}
	function them()
	{

		if(isset($_POST['config_code'], $_POST['config_giatri'])&&(!empty($_POST['config_code']))&&(!empty($_POST['config_giatri'])))
		{
			$trangthai = $_POST['config_trangthai'];
			$code = $_POST['config_code'];
			$giatri = $_POST['config_giatri'];

			$data = new cauhinh_model();
			$data->add($code, $giatri, date('Y-m-d h:i:s'), date('Y-m-d h:i:s'), $trangthai);

			if(isset($trangthai))
				chuyentrang('?controller=cauhinh&action=danhsach');
		}
		$this->loadeditor('contentx');		
		$this->render('edit', array());
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
					$stas = new cauhinh_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=cauhinh&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}

}
?>