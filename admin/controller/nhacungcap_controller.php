<?php 
class nhacungcap_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/nhacungcap/';
	}
	function danhsach()
	{
		$cungcap = new nhacungcap_model();
		$data = array('dsncc'=>$cungcap->listdata('supplier_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$nhacungcap = new nhacungcap_model();

			$data = array('ncc'=>$nhacungcap->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
	}

	function sua()
	{
		$cungcap = new nhacungcap_model();		

		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('ncc'=> $cungcap->loaddata($_GET['id']), 'tittle'=>'EDIT');

			$ten = @$_POST['supplier_ten'];
			$diachi = @$_POST['supplier_diachi'];
			$sdt = @$_POST['supplier_sodienthoai'];
			$nguoilienhe = @$_POST['supplier_nguoilienhe'];			
			$trangthai = @$_POST['supplier_trangthai'];

			$cungcap->edit($ten, $diachi, $sdt,  $nguoilienhe, $trangthai, date('Y-m-d h:i:s'), $_GET['id']);
			if(isset($ten, $diachi, $sdt, $nguoilienhe))
				chuyentrang('?controller=nhacungcap&action=danhsach');
		}
		$this->render('edit', $data);
	}


	function them()
	{
		if(isset($_POST['supplier_ten'], $_POST['supplier_diachi'], $_POST['supplier_sodienthoai'], $_POST['supplier_nguoilienhe']))
		{
			$ten = $_POST['supplier_ten'];
			$diachi = $_POST['supplier_diachi'];
			$sodienthoai = $_POST['supplier_sodienthoai'];
			$nguoilienhe = $_POST['supplier_nguoilienhe'];


			$ncc = new nhacungcap_model();
			$ncc->add($ten, $diachi, $sodienthoai, $nguoilienhe);

			$ds = $ncc->listdata('supplier_ma', 100);
			$a = count($ds) - 1;
			foreach($ds as $value)
        	{
        		
        		if($value->supplier_ten == $ds[$a]->supplier_ten)
        		{
        			$cate = new catelog_model();
        			$cate->insertCatelog($ds[$a]->supplier_ma);
        		}
        	}

			if(!empty($ten))
				chuyentrang('?controller=nhacungcap&action=danhsach');
		}
		$this->render('edit', array('tittle'=>'ADD'));
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
					$stas = new nhacungcap_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=nhacungcap&action=danhsach');
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
					$stas = new nhacungcap_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=nhacungcap&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}	

}
?>