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
		$data = array('dsbaiviet'=>$pos->listdata('pos_ma', 100));
		$this->render('list', $data);
	}

	function chitiet()
	{
		if(isset($_GET['id'])&&$_GET['id'])
		{
			$pos = new baiviet_model();
			$data = array('bv'=>$pos->loaddata($_GET['id']),
						  'dsbv'=>$pos->listdata('pos_ma', 4));
		}

		$this->loadcss(DOMAIN.'/view/layouts/css/team.css');
		$this->render('detail', $data);
	}
}
?>