<?php 
class sanpham_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/sanpham/';
	}

	// function danhsach()
	// {
	// 	//Lấy dữ liệu từ model
		
		
	// 	$sp = new phantrang_model();
	// 	$tong = $sp->total();
	// 	$tintrentrang = 5;
	// 	$tongsotrang = ceil($tong/$tintrentrang);
	// 	$trang = (isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang)?$_GET['trang']:1;
	// 	$vitri = ($trang-1)*$tintrentrang;

	// 	$ds = $sp->danhsach_sanpham($vitri, $tintrentrang);
	// 	$total = count($ds);
	// 	// Đưa giá trị vào mảng và nén nó lại

	// 	$data = array('dssanpham'=>$ds,
	// 				  'tong'=>$total,
	// 				  'sotrang'=>$tongsotrang,
	// 				  'get' => $trang
	// 				 );

	// 	$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
	// 	$this->render('lists', $data);
	// }



	function danhsach()
	{
		//Lấy dữ liệu từ model
		
		
		$sp = new sanpham_model();
		
		$ds = $sp->listdata('pro_ma', 100);
		$data = array('dssanpham'=>$ds);

		$this->loadjs(DOMAIN.'admin/view/layouts/assets/js/tab.js');
		$this->render('list', $data);
	}



	function chitiet()
	{
		if(isset($_GET['id']))
	    {
			$ncc = new nhacungcap_model();
			$nsp = new nhomsanpham_model();
			$sp = new sanpham_model();

			 $k = array();
			 $k = $sp->loaddata($_GET['id']);
			 $dsh = explode('#', $k->pro_danhsachhinh);
			 $data = array('dsnhacungcap'=>$ncc->listdata('supplier_ma', 100), 
						  'dsnhomsanpham'=> $nsp->listdata('grpro_ma', 100),
							'sanpham'=>$k,
							'dsh'=>$dsh
							);
		}
		$this->loadeditor(array('contentx', 'contentxd', 'contentxx'));
		$this->render('detail', $data);
	}

	function sua()
	{
		try
		{
			$sp = new sanpham_model();
			$ncc = new nhacungcap_model();
			$nsp = new nhomsanpham_model();
			
			if(isset($_GET['id']))
	        {

	            $ten  = trim(@$_POST['pro_ten']);

				if(isset($_POST['pro_alias'])&&$_POST['pro_alias'])
					$alias = $_POST['pro_alias'];
				else 
					$alias = strtoseo($ten);	            

	            $nhom = trim(@$_POST['pro_manhom']);
	            $nhacungcap  = trim(@$_POST['pro_manhacungcap']);
	            $thuonghieu = trim(@$_POST['pro_thuonghieu']);
	            $gia = trim(@$_POST['pro_gia']);
	            $soluong = trim(@$_POST['pro_soluong']); 	


	           	$k = @$_FILES['pro_hinhchiase']['error'][0];
	           	if($k == 0)
	           	{
	           		$sfile = new file_model(@$_FILES['pro_hinhchiase'], 'upload', 10);
	        		$_POST['pro_hinhchiase'] = $sfile->myUpLoads();
	           	}


	           	$g = @$_FILES['pro_hinh']['error'][0];
	           	if($g == 0)
	           	{
	           		$ofile =  new file_model(@$_FILES['pro_hinh'], 'upload', 10);
	           		$_POST['pro_hinh'] = $ofile->myUpLoads();
	           	}
				
          			$tesdsh  = $sp->loaddata($_GET['id']);
          			$dsh = explode('#', $tesdsh->pro_danhsachhinh);

          		$dshsp = @$_FILES['pro_danhsachhinh']['error'];

                for($i = 0; $i < count($dsh); $i++)
          		{
	          			if($dshsp[$i] == 0)
	          			{
	          				$nfile = new file_model(@$_FILES['pro_danhsachhinh'], 'upload', 10);
	      					$_POST['pro_danhsachhinh'] = $nfile->myUpLoads();	      				
	          			}
          		}

	            $tukhoa = trim(@$_POST['pro_tukhoa']);
	            $mota = trim(@$_POST['pro_mota']);
	            $timkiem = trim(@$_POST['pro_timkiem']);
	            $xuatxu =  trim(@$_POST['pro_xuatxu']);            
	            
	            $noidungchitiet = trim(@$_POST['pro_noidungchitiet']);
	            $noidungtomtat = trim(@$_POST['pro_noidungtomtat']);
	            $trangthai = @$_POST['pro_trangthai'];
	            $sku = trim(@$_POST['pro_sku']);
	            $chatlieu =  trim(@$_POST['pro_chatlieu']);


	            $ma = $_GET['id']; 

	        	$sp ->edit($ten, $alias, $nhacungcap, $nhom, $thuonghieu , $gia, $soluong, $_POST['pro_hinh'], 
	        		@$_POST['pro_danhsachhinh'], $tukhoa, $mota, $timkiem, $xuatxu, $_POST['pro_hinhchiase'],   
	        		$noidungchitiet, $noidungtomtat, $trangthai, $sku, $chatlieu, $ma);
				 if(isset($_POST['pro_trangthai']))
	         		chuyentrang('?controller=sanpham&action=danhsach');

		     
	        }
			$data = array('dssanpham'=>$sp->listdata('pro_ma', 100), 
	        				  'dsnhacungcap'=>$ncc->listdata('supplier_ma', 100),
	        				  'dsnhomsanpham'=> $nsp->listdata('grpro_ma', 100),
	        				  'sanpham'=>$sp->loaddata($_GET['id']),
	        				  'a'=>'EDIT',
	        				  'dsh'=>$dsh
	        				);	        
	    }
		catch (PDOException $e) 
		{
			return false;
		}
		 $this->loadeditor(array('contentx', 'contentxd', 'contentxx'));
		 $this->render('edit', $data);
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
					$stas = new sanpham_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , $s,  $_GET['id']);
					chuyentrang('?controller=sanpham&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}
	function them()
	{
			try 
			{
			$sp = new sanpham_model();
			$ncc = new nhacungcap_model();
			$nsp = new nhomsanpham_model();			
		
			if(isset($_POST['pro_ten']))
			{ 
				$ten  = trim($_POST['pro_ten']);
		        $alias = trim($_POST['pro_alias']);
		        $nhom = trim($_POST['pro_manhom']);
		        $nhacungcap  = trim($_POST['pro_manhacungcap']);
		        $thuonghieu = trim($_POST['pro_thuonghieu']);
		        $gia = trim($_POST['pro_gia']);
		        $soluong = trim($_POST['pro_soluong']);


	           	$k = @$_FILES['pro_hinhchiase']['error'][0];
	           	if($k == 0)
	           	{
	           		$sfile = new file_model(@$_FILES['pro_hinhchiase'], 'upload', 10);
	        		$_POST['pro_hinhchiase'] = $sfile->myUpLoads();		
	           	}


	           	$g = @$_FILES['pro_hinh']['error'][0];
	           	if($g == 0)
	           	{
	           		$ofile =  new file_model(@$_FILES['pro_hinh'], 'upload', 10);
	           		$_POST['pro_hinh'] = $ofile->myUpLoads();
	           	}

	           	$h = @$_FILES['pro_danhsachhinh']['error'][0];

	           	if($h == 0)
	           	{
	           		$nfile = new file_model(@$_FILES['pro_danhsachhinh'], 'upload', 10);
					$_POST['pro_danhsachhinh'] = $nfile->myUpLoads();
	           	}
	           	

		        $tukhoa = trim($_POST['pro_tukhoa']);
		        $mota = trim($_POST['pro_mota']);
		        $timkiem = trim($_POST['pro_timkiem']);
		        $xuatxu =  trim($_POST['pro_xuatxu']);
		        


		        $noidungchitiet = trim($_POST['pro_noidungchitiet']);
		        $noidungtomtat = trim($_POST['pro_noidungtomtat']);
		        $trangthai = $_POST['pro_trangthai'];
		        $sku = trim($_POST['pro_sku']);
		        $chatlieu =  trim($_POST['pro_chatlieu']);       

					  	

	        	$sp->add($ten, $alias, $nhacungcap, $nhom, $thuonghieu, $gia, $soluong, $_POST['pro_hinh'], @$_POST['pro_danhsachhinh'] , $tukhoa, $mota, $timkiem, $xuatxu, $_POST['pro_hinhchiase'], $noidungchitiet, $noidungtomtat, $trangthai, $sku, $chatlieu);


	        	if(isset($_POST['pro_trangthai']))
	        		chuyentrang('?controller=sanpham&action=danhsach');
	        	

 			exit();
	   		}				
			} catch (PDOException $e) 
			{
				return false;
			}
			$this->loadeditor(array('contentx', 'contentxd', 'contentxx'));			
	   		$this->render('edit', array('a'=>'ADD','dsnhacungcap'=>$ncc->listdata('supplier_ma', 100),
	        				  'dsnhomsanpham'=> $nsp->listdata('grpro_ma', 100), 'dsh'=>''));

	}

	function xoa()
	{
		try 
		{
			if(isset($_GET['id'])&&is_numeric($_GET['id']))
			{
				if(isset($_GET['sts'])&&is_numeric($_GET['sts']))				
					$stas = new sanpham_model();
					$data = $stas->edit_trangthai( date('Y-m-d h:i:s') , 2,  $_GET['id']);
					chuyentrang('?controller=sanpham&action=danhsach');
			}
		} 
		catch (PDOException $e) 
		{
			return false;
		}
	}

	function loadapi()
	{
		$sp = new phantrang_model();
		$tong = $sp->total();
		$tintrentrang = 5;
		$tongsotrang = ceil($tong/$tintrentrang);
		$trang = isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang?$_GET['trang']:1;
		$vitri = ($trang-1)*$tintrentrang;

		$ds = $sp->danhsach_sanpham($vitri, $tintrentrang);
		$total = count($ds);

		foreach($ds as $v)
		{
			if($v->pro_trangthai == 1 || $v->pro_trangthai == 0)
				{
?>
			<tr>
				<td class="text-center"><?=$v->pro_ma;?></td>
				<td class="text-center"><img style="width: 50px; height: 50px; " src="<?php echo DOMAIN.'data/upload/'.@$v->pro_hinh; ?>"></td>                                   
				<td class="text-center"><?=$v->pro_ten;?></td>
				<td class="text-center"><?=number_format($v->pro_gia);?>đ</td>
				<td class="text-center"><?=$a=($v->pro_trangthai == 1) ? 'Bật' : 'Tắt';?></td>

				<td class="td-actions text-center">
					<a href="?controller=sanpham&action=chitiet&id=<?=$v->pro_ma;?>"><button type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">more_horiz</i></button></a>

					<a href="?controller=sanpham&action=sua&id=<?=$v->pro_ma;?>"><button type="button" rel="tooltip" class="btn btn-success btn-round"><i class="material-icons">edit</i></button></a>
					<a href="?controller=sanpham&action=editsts&id=<?= $v->pro_ma; ?>&sts=<?=$v->pro_trangthai;?>">
						<button type="button" rel="tooltip" class="btn btn-warning btn-round">
							<i class="material-icons">vpn_key</i>
						</button>
					</a>
					<a href="?controller=sanpham&action=xoa&id=<?=$v->pro_ma;?>&sts=<?=$v->pro_trangthai;?>">
						<button type="button" rel="tooltip" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-danger btn-round">
							<i class="material-icons">close</i>
						</button>
					</a>

				</td>
			</tr>
<?php 
		}
	}
	}
}
?>