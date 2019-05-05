
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Giảm giá <span> lớn nhất</span></h3>
						<p> Ngày đặt biệt </p>
						<a class="hvr-outline-out button2" href="<?=DOMAIN.'index.html';?>">Đến ngay </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Bộ sưu tập</h3>
						<p>Mới</p>
						<a class="hvr-outline-out button2" href="<?=DOMAIN.'index.html';?>">Đến ngay </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Giảm giá <span> lớn nhất</span></h3>
						<p> Ngày đặt biệt </p>
						<a class="hvr-outline-out button2" href="<?=DOMAIN.'index.html';?>">Đến ngay </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Bộ sưu tập</h3>
						<p>Mới</p>
						<a class="hvr-outline-out button2" href="<?=DOMAIN.'index.html';?>">Đến ngay </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Giảm giá <span> lớn nhất</span></h3>
						<p> Ngày đặt biệt </p>
						<a class="hvr-outline-out button2" href="<?=DOMAIN.'index.html';?>">Đến ngay </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
<!-- //banner -->

<div class="banner_bottom_agile_info">
	<div class="container">
		<div class="banner_bottom_agile_info_inner_w3ls">
			<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
				<figure class="effect-roxy">
					<img src="<?=TEMPLATE_PATH; ?>images/bottom1.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h3><span>G</span>óc mới</h3>
						<p>Điểm đến mới</p>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
				<figure class="effect-roxy">
					<img src="<?=TEMPLATE_PATH; ?>images/bottom2.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h3><span>G</span>óc mới</h3>
						<p>Điểm đến mới</p>
					</figcaption>			
				</figure>
			</div>
			<div class="clearfix"></div>
		</div> 
	</div> 
</div>

<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info"> Ngày <span>đặc biệt </span></h3>
		
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="">
				<div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
						<img src="<?=TEMPLATE_PATH; ?>images/bb1.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><span>S</span>ale </h3>
							<p>Upto 55%</p>
						</figcaption>			
					</figure>
				</div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
			<a href="<?=DOMAIN.'index.html';?>">
				<div class="bb-middle-agileits-w3layouts grid">
					<figure class="effect-roxy">
						<img src="<?=TEMPLATE_PATH; ?>images/bottom3.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><span>S</span>ale </h3>
							<p>Upto 55%</p>
						</figcaption>			
					</figure>
				</div>
			</a>
			<a href="<?=DOMAIN.'index.html';?>">
				<div class="bb-middle-agileits-w3layouts forth grid">
					<figure class="effect-roxy">
						<img src="<?=TEMPLATE_PATH; ?>images/bottom4.jpg" alt=" " class="img-responsive">
						<figcaption>
							<h3><span>S</span>ale </h3>
							<p>Upto 65%</p>
						</figcaption>		
					</figure>
				</div>
			</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>`

<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
		<h3 class="wthree_text_info"> Mới </h3>		
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
				<li> Dành cho nam</li>
				<li> Dành cho nữ</li>
				<li> Đồng hồ đôi</li>
				<li> Phụ kiện</li>

			</ul>
			<div class="resp-tabs-container">
				<!--/tab_one-->
				<div class="tab1">
					
					<?php 
						foreach($tab1 as $val)
						{
					 ?>
							<div class="col-md-3 product-men">
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
									<div  data-toggle="modal" data-target="#myModal0">	

										<form action="<?=DOMAIN.'dathang/'.$val->pro_alias. '-'. $val->pro_ma.'.html';?>" method="post">
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
										</form>
									</div>
									</div>
									
								</div>
							</div>
						</div>
					<?php
						}
					 ?>
					<div class="clearfix"></div>
				</div>
				<!--//tab_one-->
				<!--/tab_two-->
				<div class="tab2">
					
					<?php 
						foreach($tab2 as $val)
						{
					 ?>
						<div class="col-md-3 product-men">
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
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					<?php
						}
					 ?>
					<div class="clearfix"></div>
				</div>
				<!--//tab_two-->
				<div class="tab3">
					
					<?php 
						foreach($tab3 as $val)
						{
					 ?>
						<div class="col-md-3 product-men">
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
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					<?php
						}
					 ?>
					<div class="clearfix"></div>
				</div>


				<div class="tab4">
					
					<?php 
						foreach($tab4 as $val)
						{
					 ?>
						<div class="col-md-3 product-men">
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
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					<?php
						}
					 ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- //new_arrivals -->

<!-- /we-offer -->
<div class="sale-w3ls">
	<div class="container">
		<h6>Giảm giá cực sốc</h6>
		
		<a class="hvr-outline-out button2" href="<?=DOMAIN.'index.html';?>">Đến ngay </a>
	</div>
</div>
<!-- //we-offer -->
<!--/grids-->
