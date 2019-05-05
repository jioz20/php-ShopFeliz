<?php 
class sanpham_controller extends controller
{
	function __construct()
	{
		$this->pathview = 'view/sanpham/';
	}

	function chitiet()
	{
		if(isset($_GET['id']))
		{	
			$sp = new sanpham_model();
			$giohang = new giohang_controller();
			$giohang->phatgiohang();

			$k = $sp->loaddata($_GET['id']);
			$dsh = explode('#', $k->pro_danhsachhinh);

			$data = array('sanpham'=>$k,
				'dssanpham'=>$sp->listdata('pro_ma', 4),
				'dsh'=>$dsh);
		}

		$this->loadcss(DOMAIN.'view/layouts/css/flexslider.css');
		$this->loadjs(array(DOMAIN.'view/layouts/js/imagezoom.js',
			DOMAIN.'view/layouts/js/jquery.flexslider.js',
			DOMAIN.'view/layouts/js/flexslider.js'));
		$this->render('detail', $data);
	}


	// function newspro()
	// {
	// 	$sp = new sanpham_model();
	// 	$data = array('dssanpham'=>$sp->listdata('pro_ngaytao', 20));
	// 	$this->render('list', $data);
	// }


	function search()
	{
		$sp = new sanpham_model();
		$giohang = new giohang_controller();
		$giohang->phatgiohang();

		$pt = new phantrang_model();
		$tong = $pt->total();
		$tintrentrang = 12;
		$tongsotrang = ceil($tong/$tintrentrang);
		$trang = (isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang)?$_GET['trang']:1;
		$vitri = ($trang-1)*$tintrentrang;

		$ds = $sp->Search('xshop_sanpham','pro_trangthai', 'pro_ten', @$_POST['search'], $vitri, $tintrentrang);
		$total = count($ds);

		$data = array('dssanpham'=>$ds,
			'tong'=>$total,
			'sotrang'=>$tongsotrang,
			'get' => $trang
		);
		$this->render('list', $data);
	}


	function loadapiSearch()
	{
		$sp = new sanpham_model();
		$x = new phantrang_model();


		$tong = $x->total();
		$tintrentrang = 12;
		$tongsotrang = ceil($tong/$tintrentrang);
		$trang = isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang?$_GET['trang']:1;
		$vitri = ($trang-1)*$tintrentrang;

		$ds =  $sp->Search('xshop_sanpham','pro_trangthai', 'pro_ten', @$_POST['search'], $vitri, $tintrentrang);
		$total = count($ds);

		foreach($ds as $v)
		{
			if($v->pro_trangthai == 1 || $v->pro_trangthai == 0)
			{
				?>


				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="<?= '/data/upload/'.$v->pro_hinh; ?>" alt="" class="pro-image-front">
							<img src="<?= '/data/upload/'.$v->pro_hinh; ?>" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="<?php echo 'sanpham/'.$v->pro_alias. '-'. $v->pro_ma.'.html';?>" class="link-product-add-cart">Chi tiết sản phẩm</a>
								</div>
							</div>
							<span class="product-new-top">Mới</span>

						</div>
						<div class="item-info-product ">
							<h4><a href="<?php echo 'sanpham/'.$v->pro_alias. '-'. $v->pro_ma.'.html';?>"><?=$v->pro_ten;?></a></h4>
							<div class="info-product-price">
								<span class="item_price"> <?=number_format($v->pro_gia);?>đ</span>
							</div>
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
								<form action="?controller=capnhatgiohang&action=dathang&id=<?=$v->pro_ma; ?>" method="post">
									<fieldset>
										<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
									</fieldset>
								</form>
							</div>

						</div>
					</div>
				</div>
				<?php 		
			}
			
		}
	}


	//Load dssp chung
	function loadOneCate()
	{
		$sp = new sanpham_model();

		$giohang = new giohang_controller();
		$giohang->phatgiohang(); 		

		$pt = new phantrang_model();

		if(isset($_GET['id']))
		{
			$tong = $pt->total_OneCate($_GET['id']);

			$tintrentrang = 8;
			$tongsotrang = ceil($tong/$tintrentrang);
			$trang = (isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang)?$_GET['trang']:1;
			$vitri = ($trang-1)*$tintrentrang;
			$ds = $sp->loadOneID('xshop_sanpham', 'pro_trangthai', 'pro_manhom', $_GET['id'], $vitri, $tintrentrang);


			$total = count($ds);


			$data = array('dssanpham'=>$ds,
				'tong'=>$total,
				'sotrang'=>$tongsotrang,
				'id'=>$_GET['id']
			);
			$this->render('listOneCate', $data);	
		}
		
	}


	function loadapiOneCate()
	{
		$sp = new sanpham_model();
		$x = new phantrang_model();


		$tong = $x->total_OneCate($_GET['id']);
		$tintrentrang = 8;
		$tongsotrang = ceil($tong/$tintrentrang);
		$trang = isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang?$_GET['trang']:1;
		$vitri = ($trang-1)*$tintrentrang;

		$ds =  $sp->loadOneID('xshop_sanpham', 'pro_trangthai', 'pro_manhom', $_GET['id'] , $vitri, $tintrentrang);
		$total = count($ds);

		foreach($ds as $v)
		{
			if($v->pro_trangthai == 1 || $v->pro_trangthai == 0)
			{
				?>


				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="<?= '/data/upload/'.$v->pro_hinh; ?>" alt="" class="pro-image-front">
							<img src="<?= '/data/upload/'.$v->pro_hinh; ?>" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="<?php echo 'sanpham/'.$v->pro_alias. '-'. $v->pro_ma.'.html';?>" class="link-product-add-cart">Chi tiết sản phẩm</a>
								</div>
							</div>
							<span class="product-new-top">Mới</span>

						</div>
						<div class="item-info-product ">
							<h4><a href="<?php echo 'sanpham/'.$v->pro_alias. '-'. $v->pro_ma.'.html';?>"><?=$v->pro_ten;?></a></h4>
							<div class="info-product-price">
								<span class="item_price"> <?=number_format($v->pro_gia);?>đ</span>
							</div>
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
								<form action="?controller=capnhatgiohang&action=dathang&id=<?=$v->pro_ma; ?>" method="post">
									<fieldset>
										<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
									</fieldset>
								</form>
							</div>

						</div>
					</div>
				</div>
				<?php 		
			}
			
		}
	}


			//load dssp theo nhà cung cấp
	function loadsCategory()
	{
		if(isset($_GET['idgr'], $_GET['idsup']))
		{
			$sp = new sanpham_model();
			$giohang = new giohang_controller();
			$giohang->phatgiohang();

			$pt = new phantrang_model();

				$tong = $pt->total_Categories($_GET['idgr'], $_GET['idsup']);

				$tintrentrang = 8;
				$tongsotrang = ceil($tong/$tintrentrang);
				$trang = (isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang)?$_GET['trang']:1;
				$vitri = ($trang-1)*$tintrentrang;
				$ds = $sp->loadCategory($_GET['idgr'], $_GET['idsup'], $vitri, $tintrentrang);


				$total = count($ds);


				$data = array('dssanpham'=> $ds,
							  'tong'=>$total,
							  'sotrang'=>$tongsotrang,
							  'idgr'=> $_GET['idgr'],
							  'idsup'=>$_GET['idsup']);

				$this->loadcss(DOMAIN.'view/layouts/css/jquery-ui.css');

				$this->loadjs(array(DOMAIN.'view/layouts/js/scrollPrice.js',
					DOMAIN.'view/layouts/js/jquery-ui.js',
					DOMAIN.'view/layouts/js/responsiveslides.min.js', 
					DOMAIN.'view/layouts/js/responslide.js',
					DOMAIN.'view/layouts/js/scrollingIcon.js'));

			}
			$this->render('listCategories', $data);
		}


		function loadsapiCategory()
		{
			$sp = new sanpham_model();
		$x = new phantrang_model();


		$tong = $x->total_Categories($_GET['idgr'], $_GET['idsup']);
		$tintrentrang = 8;
		$tongsotrang = ceil($tong/$tintrentrang);
		$trang = isset($_GET['trang']) && $_GET['trang']>1 && $_GET['trang']<=$tongsotrang?$_GET['trang']:1;
		$vitri = ($trang-1)*$tintrentrang;

		$ds =  $sp->loadCategory($_GET['idgr'], $_GET['idsup'], $vitri, $tintrentrang);
		$total = count($ds);

		foreach($ds as $v)
		{
			if($v->pro_trangthai == 1 || $v->pro_trangthai == 0)
			{


?>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="<?= '/data/upload/'.$v->pro_hinh; ?>" alt="" class="pro-image-front">
						<img src="<?= '/data/upload/'.$v->pro_hinh; ?>" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="<?php echo 'sanpham/'.$v->pro_alias. '-'. $v->pro_ma.'.html';?>" class="link-product-add-cart">Chi tiết sản phẩm</a>
							</div>
						</div>
						<span class="product-new-top">Mới</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="<?php echo 'sanpham/'.$v->pro_alias. '-'. $v->pro_ma.'.html';?>"><?=$v->pro_ten;?></a></h4>
						<div class="info-product-price">
							<span class="item_price"> <?=number_format($v->pro_gia);?>đ</span>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="?controller=capnhatgiohang&action=dathang&id=<?=$v->pro_ma; ?>" method="post">
								<fieldset>
									<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>

<?php
			}
		}
	}
}
?>