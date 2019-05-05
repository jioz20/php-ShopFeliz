<div class="banner-bootom-w3-agileits">
  	<div class="container">

  		<div class="single-pro">
        <div id="kq">

<?php 
    foreach($dssanpham as $val)
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
  						<h4><a href="<?=DOMAIN.'sanpham/'.$val->pro_alias. '-'. $val->pro_ma.'.html';?>"><?=$val->pro_ten;?></a></h4>
  						<div class="info-product-price">
  							<span class="item_price"> <?=number_format($val->pro_gia);?>đ</span>
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
         </div>
  			<div class="clearfix"></div>
  		</div>
      <div class="col-md-12 text-center">
      <nav>
        <ul class="pagination">
          <li><a class="trang" id="previous" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
      <?php 
        for($i = 1; $i <= $sotrang; $i++)
        {
       ?>    
          <li><a class="trang" data-trang="<?=$i?>"><?php echo $i;?></a></li>
      <?php 
        }
       ?>
          <li><a class="trang" id="next" aria-label="Next"><span aria-hidden="true">»</span></a></li>
        </ul>
      </nav>
      </div>

      
  	</div>
  </div>	

  <script>
    $(function()
    {
        $('.trang').click(function()
        {
            var _current = $(this), _trang = _current.data('trang');
            $.get('http://felizshop.us/?controller=sanpham&action=loadsapiCategory&idgr=<?=$idgr;?>&idsup=<?=$idsup;?>', {trang: _trang})
            .done(function(data)
            {
             $('#previous').data('trang',_trang-1);
             $('#next').data('trang',_trang+1);
             $('#kq').html(data);
            })  
        })
    })

</script>