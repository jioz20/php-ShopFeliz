<?php 
class nguoidung_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/nguoidung/';
	}
	
	function danhsach()
	{
		$nd = new nguoidung_model();
		$data = array('dsnguoidung'=>$nd->listdata('gov_ma', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}
	
	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$nd = new nguoidung_model();
			$nqt = new nhomquantri_model();

			$data = array('dsnhomquantri'=> $nqt->listdata('groupads_ma', 100),
							'nd'=>$nd->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
	}

	function user()
	{
		$this->render('user', array());
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
					$stas = new nguoidung_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=nguoidung&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}

	function sua()
	{

		$nqt = new nhomquantri_model();
        $nd = new nguoidung_model();


		if(isset($_GET['id'])&&$_GET['id'])
        {
        	$data = array('dsnhomquantri'=> $nqt->listdata('groupads_ma', 100),
    				  'nguoidung'=>$nd->loaddata($_GET['id']),
    				  'title'=>'EDIT'); 
    				         	
            $ten = @$_POST['gov_ten'];
            $matkhau = md5(@$_POST['gov_matkhau']);
            $nhom = @$_POST['gov_manhom'];
            $trangthai = @$_POST['gov_trangthai'];
            $ma = $_GET['id'];
            $nd ->edit($ten, $matkhau, $nhom, $trangthai, $ma);
            
            if(isset($_POST['gov_tendangnhap'],$_POST['gov_matkhau']))
	        		chuyentrang('?controller=nguoidung&action=danhsach');
        }   
		$this->render('edit', $data);
	}


	function them()
	{
	    $nqt = new nhomquantri_model();
        $data = array('dsnhomquantri'=> $nqt->listdata('groupads_ma', 100),
    				  'title'=>'ADD');

		if(isset($_POST['gov_ten'],$_POST['gov_tendangnhap'],$_POST['gov_email'], $_POST['gov_matkhau']))
		{  
        	$ten  = $_POST['gov_ten'];
            $user = $_POST['gov_tendangnhap'];
            $pas  = md5($_POST['gov_matkhau']);
            $email = $_POST['gov_email'];
            $group = $_POST['gov_manhom'];

            $nd = new nguoidung_model();
            $nd->register($ten, $user, $pas, $email, $group);

        	if(isset($_POST['gov_tendangnhap'],$_POST['gov_matkhau']))
	        		chuyentrang('?controller=nguoidung&action=danhsach');
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
					$stas = new nguoidung_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=nguoidung&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
}
?>