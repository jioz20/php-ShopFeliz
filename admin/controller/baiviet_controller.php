<?php 
class baiviet_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/baiviet/';
	}

	
	function danhsach()
	{
		$pos = new baiviet_model();

		$data = array('dsbaiviet'=>$pos->listdata(16, array(14,16,17, 19)));


		// viewar($data);
		
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$bv = new baiviet_model();
			$nbv = new nhombaiviet_model();			

			$data = array('dsnhombaiviet'=>$nbv->listdata('grpos_ma', 100), 
						  'po'=>$bv->loaddata($_GET['id']));
		}
		$this->loadeditor(array('contentx', 'contentxd', 'contentxx'));
		$this->render('detail', $data);
	}

	function sua()
	{
		$bv = new baiviet_model();
		$nbv = new nhombaiviet_model();	

		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('dsnhombaiviet'=>$nbv->listdata('grpos_ma', 100), 
			  'po'=>$bv->loaddata($_GET['id']),
			  'tittle'=>'EDIT');

			$ten = @$_POST['pos_ten'];

			if(isset($_POST['pos_alias'])&&$_POST['pos_alias'])
				$alias = @$_POST['pos_alias'];
			else 
				$alias = strtoseo($ten);

			$manhomtin = @$_POST['pos_manhomtin'];
			$tukhoa = @$_POST['pos_tukhoa'];
			$mota = @$_POST['pos_mota'];
			$ndct = @$_POST['pos_noidungchitiet'];

			$k = @$_FILES['pos_chiase']['error'][0];
           	if($k == 0)
           	{
           		$sfile = new file_model(@$_FILES['pos_chiase'], 'upload', 10);
        		$_POST['pos_chiase'] = $sfile->myUpLoads();
           	}


			$ndtt = @$_POST['pos_noidungtomtat'];
			$timkiem = @$_POST['pos_timkiem'];
			$id = $_GET['id'];
			$trangthai = @$_POST['pos_trangthai'];
			$bv->edit($ten, $manhomtin, $alias, $tukhoa, $mota, $ndtt, $ndct, $timkiem, $_POST['pos_chiase'],  $trangthai, date('Y-m-d h:i:s'), $_GET['id']);

			if(isset($_POST['pos_trangthai']))
				chuyentrang('?controller=baiviet&action=danhsach');
		}
		$this->loadeditor(array('contentx', 'contentxd', 'contentxx'));
		$this->render('edit', $data);
	}



	function them()
	{

		$nbv = new nhombaiviet_model();	
		$data = array('dsnhombaiviet'=>$nbv->listdata('grpos_ma', 100),
					  'tittle'=>'ADD');
		if(isset($_POST['pos_ten'],$_POST['pos_manhomtin'],$_POST['pos_trangthai']))
		{ 
			$ten = $_POST['pos_ten'];
			$manhomtin = $_POST['pos_manhomtin'];
			if(isset($_POST['pos_alias'])&&$_POST['pos_alias'])
				$alias = $_POST['pos_alias'];
			else
				$alias = strtoseo($_POST['pos_ten']);


			$tukhoa = $_POST['pos_tukhoa'];
			$mota = $_POST['pos_mota'];
			$chitiet = $_POST['pos_noidungchitiet'];
			$tomtat = $_POST['pos_noidungtomtat'];
			$timkiem = $_POST['pos_timkiem'];

		    $k = @$_FILES['pos_chiase']['error'][0];
           	if($k == 0)
           	{
           		$sfile = new file_model(@$_FILES['pos_chiase'], 'upload', 10);
        		$_POST['pos_chiase'] = $sfile->myUpLoads();
           	}

			
			$trangthai = $_POST['pos_trangthai'];
			$times = date('Y-m-d h:i:s');

			$bv = new baiviet_model();
			$bv->add($ten, $manhomtin, $alias, $tukhoa, $mota, $chitiet, $tomtat, $timkiem, $_POST['pos_chiase'], $times, $trangthai, $times);
			if(isset($ten))
				chuyentrang('?controller=baiviet&action=danhsach');
		}
		$this->loadeditor(array('contentx', 'contentxd', 'contentxx'));
		$this->render('edit', $data);
	}




	// function xoa()
	// {
	// 	try 
	// 	{
	// 		if(isset($_GET['id'])&&is_numeric($_GET['id']))
	// 		{
	// 			if(isset($_GET['sts'])&&is_numeric($_GET['sts']))				
	// 				$stas = new baiviet_model();
	// 				$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
	// 				chuyentrang('?controller=baiviet&action=danhsach');
	// 		}
	// 	} 
	// 	catch (PDOException $e) 
	// 	{
	// 		return false;
	// 	}
	// }


	function xoa()
	{
		try 
		{
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				$bv = new baiviet_model();
				$bv->delete($_GET['id']);
				chuyentrang('?controller=baiviet&action=danhsach');
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
					$stas = new baiviet_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=baiviet&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
}
?>