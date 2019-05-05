<?php 
class hoadon_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/giohang/';
	}

	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$hd = new hoadon_model();
			$debill = new trangthaidonhang_model();

			$data = array('stbill'=> $debill->listdata('stb_ma', 100),
							'bi'=>$hd->loaddata($_GET['id']));
		}
		$this->render('detail', $data);
	}

	function them()
	{
		
		$r = array();

		$s = 0;
		foreach($_SESSION['giohang'] as $k => $v)
		{
			// $r = array($k => $v['soluong']);
			$r[$k]=$v['soluong'];
			$s+= $v['soluong']*$v['gia'];
		}

		if(isset($_POST['bill_tenkhachhang'])&&$_POST['bill_tenkhachhang'])
		{  
			$ma = rand(0,100).time().rand(0,1000);
			$mahoadon = 'FS'.(string)$ma; 

			if(isset($_POST['bill_magiamgia']))
				$magiamgia = $_POST['bill_magiamgia'];
			else 
				$magiamgia = '';

			$khachhang = $_POST['bill_tenkhachhang'];
			$sodienthoai = $_POST['bill_sodienthoai'];
			$diachi = $_POST['bill_diachi'];
			$email = $_POST['bill_email'];

			$hd  = new hoadon_model();
			$hd->add($mahoadon, date('Y-m-d h:i:s'), $s, $magiamgia, $khachhang, $sodienthoai, $diachi, 
				$email, 0, date('Y-m-d h:i:s'), 0, date('Y-m-d h:i:s'));
			

			$cthd = new chitiethoadon_model();

			foreach($r as $k => $val)
			{
				$cthd->add($mahoadon, $k, $val, $_SESSION['giohang'][$k]['gia']);
			}
			
			$a = new xacnhan_controller;
		@sendmail($_POST['bill_email'],'Xác nhận mua hàng tại Feliz Shop', $a->template , 1);

			 chuyentrang('index.html');
		}
	}
	function thanhtoan()
	{

		$this->render('order');
	}

	function active()
	{
	$list = new hoadon_model();
	$db = new chitiethoadon_model();

	$det = $db->listdata('detail_mahoadon', 1000);
	$listdt = $list->listdata('bill_ma', 1000);

          if(isset($_GET['co'])&&$_GET['co']==1)   
          {      
            	foreach($listdt as $value)
            	{
            		$a = count($listdt) - 1;

            		if($value->bill_mahoadon == $listdt[$a]->bill_mahoadon)
            		{
            			$list->edit_trangthai2(1, $listdt[$a]->bill_mahoadon);

            			$db->edit_trangthai2(1, $det[$a]->detail_mahoadon);
            			 chuyentrang('index.html');
            		}
            	}
          }	
    }

	
}
?>