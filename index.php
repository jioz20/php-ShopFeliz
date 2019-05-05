<?php
session_start();
include 'system/autoload.php';

if(isset($_GET['controller'], $_GET['action'])&&$_GET['controller']&&$_GET['action'])
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];      
}
else 
{
    $controller = 'hethong';
    $action = 'trangchu';
}

        $path = 'controller/'.$controller.'_controller.php';
        if(file_exists($path))
        {
            //include 'controller/sanpham_controller.php';
            $classname = $controller.'_controller';
            if(class_exists($classname)){
                $objcontroller = new $classname();
                //$sanpham = new sanpham_controller();
                if(method_exists($objcontroller,$action)){
                    $objcontroller->$action();
                }
                else
                {
                    $c = new hethong_controller();
                    $c->_404();
                }
            }
            else
            {
                $c = new hethong_controller();
                $c->_404();
            }
        }else
        {
            $c = new hethong_controller();
            $c->_404();
        }             
?>