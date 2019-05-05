<?php 
defined('DOMAIN') or die('Access Deny');
ob_start();
if(isset($_COOKIE['login']) && $_COOKIE['login'])
{
    $_SESSION['login'] = true;
    $_SESSION['gov_ten'] = $_COOKIE['gov_ten'];
    $_SESSION['gov_ma'] = $_COOKIE['gov_ma'];
}
if ( islogin() == false ) 
    chuyentrang('?controller=hethong&action=login');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo TEMPLATE_PATH; ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo TEMPLATE_PATH; ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Feliz Shop</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo TEMPLATE_PATH; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo TEMPLATE_PATH; ?>assets/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo TEMPLATE_PATH; ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <script src="<?php echo TEMPLATE_PATH; ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script>

        var DOMAIN  = 'http://felizshop.us:81/';

        function chonfile(field)
        {
           CKFinder.popup( '../../', null, null, function(url) {caigiatrichoinput( url,field)} ) ;
        }
       function caigiatrichoinput(fileUrl,id )
       {
        $('#'+id).val(fileUrl);
        $('#'+id).parent().children('img').attr('src',fileUrl);
        }
</script>
<script src="<?php echo DOMAIN; ?>admin/system/libs/ckeditor/ckeditor.js"></script>
<script src="<?php echo DOMAIN; ?>admin/system/libs/ckfinder/ckfinder.js"></script>    
</head>

<body>
    <div class="wrapper">

        <?php $this->loadmodule('sidebar'); ?> 
       <div class="main-panel">

        <?php $this->loadmodule('navbar'); ?>

        <?php 
        $path = $this->pathview . $view.'.php';
        $this->load($path, '', $data);
        ?>

        <?php $this->loadmodule('footer'); ?>

    </div>
</div>
</body>
<!--   Core JS Files   -->

<script src="<?php echo TEMPLATE_PATH; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/arrive.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/moment.min.js"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/bootstrap-notify.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/bootstrap-datetimepicker.js"></script>

<script src="<?php echo TEMPLATE_PATH; ?>assets/js/demo.js"></script>

<script src="<?php echo TEMPLATE_PATH; ?>assets/js/nouislider.min.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/fullcalendar.min.js"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo TEMPLATE_PATH; ?>assets/js/material-dashboard.js?v=1.2.1"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<?php 
echo $this->editor;
echo $this->js; 
?>
</html>