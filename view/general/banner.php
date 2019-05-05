<?php 
  	$cateLog = new nhacungcap_model();
	$a = $cateLog->loadCate('supplier_ten',0);
	$b = $cateLog->loadCate('supplier_ten',7);


  	$nsp = new nhomsanpham_model();
  	$d = $nsp->listdata('grpro_ma', 100);

  	$hr = new catelog_model(); 
	$hf = $hr->listCatelog();

 ?>
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">			
				  <ul class="nav navbar-nav">

			<?php
				foreach($d as $v)
				{ 
			 ?>	
					<li class="menu__item">

						<a href="<?=DOMAIN.'mucluc/'.$v->grpro_alias.'-'.$v->grpro_ma.'.html'?>" 

							<?=$kt=($v->grpro_ma == 1 || $v->grpro_ma == 2) ? 'data-toggle="dropdown"': ''; ?> 
						class="dropdown-toggle menu__link" aria-haspopup="true" aria-expanded="false">
						<?php echo $v->grpro_ten; ?></a>
						
					<?php 
						if($v->grpro_ma == 1 || $v->grpro_ma == 2)
						{
					 ?>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="#"><img src="<?=DOMAIN; ?>view/layouts/images/bia.png" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
								<?php 
									foreach($a as $val)
									{
										foreach($hf as $value)
										{
											if($val->supplier_ma == $value->t_nhacungcap)
											{
												if($v->grpro_ma == 1)
												{
								 ?>
											<li><a href="<?=DOMAIN.'danhmuc/'.$v->grpro_alias.'-'.$value->t_nhacungcap.'-'.$v->grpro_ma.'.html';?>">
												<?=$val->supplier_ten;?></a></li>
								<?php
												}
												if($v->grpro_ma == 2)
												{
								?>
											<li><a href="<?=DOMAIN.'danhmuc/'.$v->grpro_alias.'-'.$value->t_nhacungcap.'-'.$v->grpro_ma.'.html';?>">
												<?=$val->supplier_ten;?></a></li>
								<?php 
												}
											}
										}	
									} 

								 ?>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
								<?php 
									foreach($b as $val)
									{
										foreach($hf as $value)
										{
											if($val->supplier_ma == $value->t_nhacungcap)
											{
												if($v->grpro_ma == 1)
												{
								 ?>
											<li><a href="<?=DOMAIN.'danhmuc/'.$v->grpro_alias.'-'.$value->t_nhacungcap.'-'.$v->grpro_ma.'.html';?>">
												<?=$val->supplier_ten;?></a></li>
								<?php
												}
												if($v->grpro_ma == 2)
												{
								?>
											<li><a href="<?=DOMAIN.'danhmuc/'.$v->grpro_alias.'-'.$value->t_nhacungcap.'-'.$v->grpro_ma.'.html';?>">
												<?=$val->supplier_ten;?></a></li>
								<?php 
												}
											}
										}	
									} 

								 ?>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
							<?php 
							} 
							?>
						</li>
				<?php 
				} ?>
					<li class=" menu__item"><a class="menu__link" href="<?=DOMAIN.'lienhe.html'?>">Liên hệ</a></li>

				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right"  style="width: 50px; height: 50px;">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1" > 
					<form action="#" method="post" class="last"> 
						<a href="<?=DOMAIN.'giohang.html';?>" class="w3view-cart"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 30px; color: black;"></i></a>
					</form>  
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->