
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					<ul class="slides">
						<?php 
							for($i = 0; $i < 3; $i++)
							{
						 ?>
						<li data-thumb="<?php echo DOMAIN.'data/upload/'.@$dsh[$i]; ?>">
							<div class="thumb-image"><img src="<?php echo DOMAIN.'data/upload/'.@$dsh[$i]; ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<?php 
							}
						 ?>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>		
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $sanpham->pro_ten;?></h3>
					<p>Giá: <span class="item_price"><?php echo  number_format($sanpham->pro_gia);?>đ</span></p>
					<p>Số lượng: <span class="item_price"><?php echo  $sanpham->pro_soluong;?></span></p>
					<p>Xuất xứ: <span class="item_price"><?php echo  $sanpham->pro_xuatxu;?></span></p>
					<p>Chất liệu: <span class="item_price"><?php echo  $sanpham->pro_chatlieu;?></span></p>
					<p>Sku: <span class="item_price"><?php echo  $sanpham->pro_sku;?></span></p>

					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5>Nhập mã kiểm tra để được hưởng ưu đãi</h5>
						 <form action="#" method="post">
						<input type="text" value="Nhập mã ưu đãi" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập mã ưu đãi';}" required="">
						<input type="submit" value="Kiểm tra">
						</form>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="<?=DOMAIN.'dathang/'.$sanpham->pro_alias. '-'. $sanpham->pro_ma.'.html';?>" method="post">
								<fieldset>
									<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
								</fieldset>
							</form>
						</div>											
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">

						<li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
						</li>

						<li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
						</li>

						<li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
						</li>

						<li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
						</li>
					</ul>					
		</div>
	 	<div class="clearfix"> </div>
				<!-- /new_arrivals --> 

		<div class="responsive_tabs_agileits"> 
					<div id="horizontalTab">
							<ul class="resp-tabs-list">
								<li>Mô tả</li>
								<li>Thông tin chi tiết</li>
							</ul>
						<div class="resp-tabs-container">
						<!--/tab_one-->
						   <div class="tab1">

								<div class="single_page_agile_its_w3ls">
								   <p><?=$sanpham->pro_mota;?></p>
								</div>
							</div>

							<div class="tab3">
								<div class="single_page_agile_its_w3ls">
								   <p><?=$sanpham->pro_noidungchitiet;?></p>
								</div>
							</div>


						</div>
					</div>	
		</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			 <div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Xem thêm</h3>	

				<?php 
					foreach($dssanpham as $val)
					{
				 ?>
					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
			  						<img src="<?= '/data/upload/'.$val->pro_hinh; ?>" alt="" class="pro-image-front">
			  						<img src="<?= '/data/upload/'.$val->pro_hinh; ?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?=DOMAIN.'sanpham/'.$val->pro_alias. '-'. $val->pro_ma.'.html';?>" class="link-product-add-cart">Chi tiết sản phẩm</a>
												</div>
											</div>
											<span class="product-new-top">Mới</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?=DOMAIN.'sanpham/'.$val->pro_alias. '-'. $val->pro_ma.'.html';?>"><?=$val->pro_ten; ?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?=number_format($val->pro_gia);?>đ</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="<?=DOMAIN.'dathang/'.$val->pro_alias. '-'. $val->pro_ma.'.html';?>" method="post">
												<fieldset>
													<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
												</fieldset>
											</form>
										</div>
																			
									</div>
								</div>
						</div>
				<?php 
					}
				 ?>


			<div class="clearfix"> </div>
					<!--//slider_owl
		    </div> -->
	</div>
</div>