<?php 
class phanquyen_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/phanquyen/';
	}
	function danhsach()
	{
		$pq = new phanquyen_model();
		$data = array('dez'=>$pq->listdata('decentz_manguoidung', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$dez = new chucnang_model();
			$adm = new nguoidung_model();
			$pq = new phanquyen_model();

			$data = array('dschucnang'=> $dez->listdata('decentz_ma', 100),
						  'dsnguoidung'=>$adm->listdata('gov_ma', 100),
						  'dezc'=>$pq->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
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
					$stas = new phanquyen_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=phanquyen&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}

	function them()
	{
		$fu = new chucnang_model();
		$go = new nguoidung_model();
		$data = array('dschucnang'=>$fu->listdata('fun_ma', 100),
				  'dsnguoidung'=>$go->listdata('gov_ma', 100),
				  'tittle'=>'ADD');

		if(isset($_POST['decentz_machucnang'], $_POST['decentz_manguoidung']))
		{
			$phanquyen = new phanquyen_model();
			$phanquyen->add($_POST['decentz_machucnang'],
							$_POST['decentz_manguoidung'],
							date('Y-m-d h:i:s'),
							date('Y-m-d h:i:s'),
							$_POST['decentz_trangthai']);
			if(isset($_POST['decentz_trangthai']))
				chuyentrang('?controller=phanquyen&action=danhsach');
		}
		$this->render('edit', $data);
	}


	function sua()
	{
		$fu = new chucnang_model();
		$go = new nguoidung_model();
		$pq = new phanquyen_model();
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$data = array('dschucnang'=>$fu->listdata('fun_ma', 100),
						  'dsnguoidung'=>$go->listdata('gov_ma', 100),
						  'phanquyen'=>$pq->loaddata($_GET['id']),
						  'tittle'=>'EDIT');

			$chucnang = @$_POST['decentz_machucnang'];
			$nguoidung = @$_POST['decentz_manguoidung'];
			$trangthai = @$_POST['decentz_trangthai'];
			$id = $_GET['id'];
			$pq->edit($chucnang, $nguoidung, date('Y-m-d h:i:s') , $trangthai, $id);
				if(isset($trangthai))
					chuyentrang('?controller=phanquyen&action=danhsach');
		}
		$this->render('edit', $data);
	}

}
?>