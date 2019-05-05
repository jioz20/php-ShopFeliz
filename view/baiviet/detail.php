<div class="banner_bottom_agile_info text-center">
	<div class="container ">
		<div class="agile_ab_w3ls_info ">
			<div class="col-md-12 ab_pic_w3ls ">
				<img src="<?php echo DOMAIN.'data/upload/'.$bv->pos_chiase; ?>" alt=" " class="img-responsive" style="margin-left: 220px; "/>
								<p></p>
			</div>
			<div class="col-md-12 ab_pic_w3ls_text_info">
				<h5><?=$bv->pos_ten;?></h5>
			</div>
			<div class="col-md-12 ab_pic_w3ls_text_info">
				<p><?=$bv->pos_noidungchitiet;?></p>
			</div>
		</div>    
	</div> 
</div>
<!-- team -->
<div class="banner_bottom_agile_info team">
	<div class="container">
		<h3 class="wthree_text_info"> Xem thêm </h3>
	<?php
		foreach($dsbv as $val)
		{
	 ?>
		<div class="inner_w3l_agile_grids">
			<div class="col-md-3 team-grids">
				<div class="thumbnail team-w3agile">
					<img src="<?php echo DOMAIN.'data/upload/'.$val->pos_chiase; ?>" class="img-responsive" alt="" 
					style="width: 255px; height: 190px; border-radius: 10px;">
					<div class="social-icons team-icons right-w3l fotw33">
						<div class="caption">
							<a href="<?=DOMAIN.'tintuc/'.$val->pos_alias.'-'.$val->pos_ma.'.html';?>"><h4><?=$val->pos_ten;?></h4></a>
													
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
		} 
	 ?>
	</div>
</div>
						