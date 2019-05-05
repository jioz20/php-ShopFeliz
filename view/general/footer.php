<?php 
	$pos = new baiviet_model();
	$bv = $pos->listdata('pos_ma', 6);
 ?>
<div class="coupons">
	<div class="coupons-grids text-center">
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>MIỄN PHÍ GIAO HÀNG</h3>
					<p>Giao hàng miễn phí cho những đơn hàng có giá trị trên &euro;100  </p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>Hỗ trợ 24/7</h3>
					<p>Hỗ trợ và chăm sóc khách hàng mọi lúc, mọi nơi</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>Uy tín - Chất lượng</h3>
					<p>Chúng tôi luôn đặt uy tín và chất lượng lên đầu. Để đảm bao nhu cầu của khách hàng</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>Quà tặng</h3>
					<p>Luôn có các dịch vụ và ưu đãi cho khách hàng</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="<?=DOMAIN.'index.html';?>"><span>F</span>eliz <span>S</span>hop </a></h2>
			<p>Được đầu tư bởi các nhà cung cấp lớn hàng đầu thế giới</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
				<li><a href="#" class="facebook">
					<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
					<li><a href="#" class="twitter"> 
						<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
							<li><a href="#" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
							</ul>
						</div>
						<div class="col-md-9 footer-right">
							<div class="sign-grds">


								<div class="col-md-8 sign-gd">
									<h4> Bài viết</h4>
									<ul>
							<?php 
								foreach($bv as $val)
								{
							 ?>			
										<li>
											<div style="margin-top:5px; ">
											<img src="<?= '/data/upload/'.$val->pos_chiase; ?>" style="width: 60px; height: 40px; border-radius: 10px">
											<a href="<?=DOMAIN.'tintuc/'.$val->pos_alias.'-'.$val->pos_ma.'.html';?>">&nbsp;<?=$val->pos_ten;?>  </a>
											</div>
										</li>
							<?php 
								}
							 ?>
									</ul>
								</div>
								
								<div class="col-md-4 sign-gd-two">
									<h4> Liên hệ </h4>
									<div class="w3-address">
										<div class="w3-address-grid">
											<div class="w3-address-left">
												<i class="fa fa-phone" aria-hidden="true"></i>
											</div>
											<div class="w3-address-right">
												<h6> Số điện thoại </h6>
												<p> 0933 834 993 </p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3-address-grid">
											<div class="w3-address-left">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<div class="w3-address-right">
												<h6> Email </h6>
												<p>Email :<a href="mailto:nguyentri.7264@gmail.com"> nguyentri.7264@gmail.com </a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3-address-grid">
											<div class="w3-address-left">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
											</div>
											<div class="w3-address-right">
												<h6> Địa chỉ </h6>
												<p>115/25 TTN01, P. Tân Thới Nhất, Quận 12, Tp. HCM 
													
												</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
						<p class="copy-right">&copy 2018 Feliz Shop. All rights reserved | Design by <a href="https://www.facebook.com/beotube20">Nguyễn Trí</a></p>
					</div>
				</div>
<!-- //footer -->