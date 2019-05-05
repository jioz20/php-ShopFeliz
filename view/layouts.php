<!DOCTYPE html>
<html>
<head>
<title>Feliz Shop</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Feliz Shop" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link rel="icon" type="image/png" href="<?php echo TEMPLATE_PATH; ?>images/favicon.png" />
<link href="<?=TEMPLATE_PATH; ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=TEMPLATE_PATH; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=TEMPLATE_PATH; ?>css/font-awesome.css" rel="stylesheet"> 
<link href="<?=TEMPLATE_PATH; ?>css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<?php echo $this->css; ?>
<!-- //for bootstrap working -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?=TEMPLATE_PATH; ?>js/jquery-2.1.4.min.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="249793862521016"
  theme_color="#13cf13">
</div>
<?php 

  	$this->loadmodule('header');

  	$this->loadmodule('banner'); 		

    $path = $this->pathview . $view.'.php';
    $this->load($path, '', $data);
   
	$this->loadmodule('footer');
?>
<!-- js -->

<!-- //js -->
<script src="<?=TEMPLATE_PATH; ?>js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
<!-- 	<script src="<?=TEMPLATE_PATH; ?>js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script> -->

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="<?=TEMPLATE_PATH; ?>js/easy-responsive-tabs.js"></script>
<script src="<?=TEMPLATE_PATH; ?>js/horizontalTab.js"></script>
<!-- //script for responsive tabs -->		

<!-- stats -->
	<script src="<?=TEMPLATE_PATH; ?>js/jquery.waypoints.min.js"></script>
	<script src="<?=TEMPLATE_PATH; ?>js/jquery.countup.js"></script>
	<script>	
		$('.counter').countUp();
	</script>
<!-- //stats -->


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=TEMPLATE_PATH; ?>js/move-top.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_PATH; ?>js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_PATH; ?>js/scroll.js"></script>
<script type="text/javascript" src="<?=TEMPLATE_PATH; ?>js/outquart.js"></script>
<!-- for bootstrap working -->

<?php 
	echo $this->js;
 ?>
<script type="text/javascript" src="<?=TEMPLATE_PATH; ?>js/bootstrap.js"></script>
</body>
</html>
