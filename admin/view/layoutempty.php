<?php 
    defined('DOMAIN') or die('Access Deny');
?>
 ?> 
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Không tìm thấy trang</title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo TEMPLATE_PATH; ?>/404/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?php echo TEMPLATE_PATH; ?>/404/css/animate.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo TEMPLATE_PATH; ?>/404/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?php echo TEMPLATE_PATH; ?>/404/css/colors/default.css" id="theme"  rel="stylesheet">

</head>
<body>
<!-- Preloader -->
<?php 
	$path = $this->pathview.$view.'.php';
	include $path;
 ?>
<!-- jQuery -->
<script src="<?php echo TEMPLATE_PATH; ?>/404/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo TEMPLATE_PATH; ?>/404/js/bootstrap.min.js"></script>


</body>
</html>
