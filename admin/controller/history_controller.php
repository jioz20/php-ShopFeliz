<?php 
class history_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/history/';
	}

	function danhsach()
	{
		$his = new lichsu_model();
		$data = array('lichsu'=>$his->listdata('log_ma', 1000));
		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}
}
?>