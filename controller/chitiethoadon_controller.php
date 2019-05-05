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
		$data = array('dbl'=>$debill->listdata('detail_mahoadon', 100));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}

	function them()
	{
		if(isset($_POST['detail_mahoadon'], $_POST['detail_masanpham']))
		{
			$mahoadon = $_POST['detail_mahoadon'];
			$masanpham = $_POST['detail_masanpham'];
			$dongia = $_POST['detail_dongia'];
			$soluong = $_POST['detail_soluong'];
			$db = new chitiethoadon_model();
			$db->add($mahoadon, $masanpham, $soluong, $dongia);
			if(!empty($mahoadon))
					chuyentrang('?controller=chitiethoadon&action=danhsach');
		}
		$this->render('edit', array());
	}

}
?>