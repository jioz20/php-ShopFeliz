<?php 
class hethong_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/hethong/';
	}
	function trangchu()
	{
		$l = new sanpham_model();
		$data = array('tab1'=> $l->loadHighlights(1), 
					  'tab2'=> $l->loadHighlights(2),
					  'tab3'=> $l->loadHighlights(7),
					  'tab4'=> $l->loadHighlights(6));
		$this->render('trangchu', $data);
	}
	function lienhe()
	{
		$this->render('lienhe');
	}
	function _404()
	{
		$this->render('404', array(), 'layoutempty');
	}

	function login()
	{
		session_start();
		if(isset($_POST['tendangnhap'], $_POST['matkhau']))
		{

			if ( trim($_POST['tendangnhap']) && trim($_POST['matkhau'])) 
			{ 
				$user  = new nguoidung_model();
				$x = $user->login($_POST['tendangnhap'],md5($_POST['matkhau']));
				$flag = false;

				if(@$x->gov_tendangnhap==$_POST['tendangnhap'] && @$x->gov_matkhau== md5($_POST['matkhau']))
				{										
					if($x->gov_trangthai == 1)
						$flag = true;
					else 
						$flag = false;    
				}
			}
			else 
				$flag = false;
				

			if($flag == true)
			{					
				$_SESSION[ 'login' ] = true;
				$_SESSION[ 'gov_ten' ] = ( string )$x->gov_ten;
				if(isset($_POST['check'])&& $_POST['check'])
				{
					$time = time()+86400;
					setcookie('login',true,$time);
					setcookie('gov_ten',$_SESSION['gov_ten'],$time);
				}

				 $data = array('user'=>$user->listdata('gov_ma', 100));

				$this->render('trangchu', $data, 'layouts');

			}
			else 
				echo '<div class="alert alert-danger text-center"> Đăng nhập thất bại </div>';
		}
		else 
			$this->render('login', array(), 'layoutlogin');	
	}

	function logout()
	{
		@session_destroy();
		@setcookie('login', true, time()-1);
		@setcookie('gov_ten',$_SESSION['gov_ten'],time()-1);
		@chuyentrang('?controller=hethong&action=login');
	}
	function register()
	{
		$x  = new nguoidung_model();
		if(isset($_POST['gov_ten'],$_POST['gov_tendangnhap'],$_POST['gov_email'], $_POST['gov_matkhau']))
		{  
			if(trim($_POST['gov_ten'])&&trim($_POST['gov_tendangnhap'])&&trim($_POST['gov_matkhau'])&&trim($_POST['gov_email']))
			{
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$ten  = $_POST['gov_ten'];
				$user = $_POST['gov_tendangnhap'];
				$pas  = md5($_POST['gov_matkhau']);
				$email = $_POST['gov_email'];

				$x->register($ten, $user, $pas, $email);


				if(@sendmail($_POST['gov_email'],'Xác nhận thông tin đăng kí tài khoản Feliz Shop','<a href="http://felizshop.us:81/?controller=hethong&action=active&co=1">Xác nhận thông tin</a>',1));
				echo 'Vào <a href="https://mail.google.com/mail/u/0/#inbox"> mail <a/>để xác nhận thông tin đăng ký.';          
			}			
		}
		else 
			$this->render('register', array(),'layoutregister');
		
	}

	function active()
	{
	$list = new nguoidung_model();
	$listdt = $list->listdata('gov_ma', 1000);
          if(isset($_GET['co'])&&$_GET['co']==1)   
          {      
            	foreach($listdt as $value)
            	{
            		$a = count($listdt) - 1;

            		if($value->gov_tendangnhap == $listdt[$a]->gov_tendangnhap)
            		{
            			$list->edit_trangthai2(1, $listdt[$a]->gov_tendangnhap);
            			chuyentrang('?=controller=sanpham&action=login');
            		}
            	}
          }	
    }
}
?>