<?php
defined('DOMAIN') or die('access deny'); 
class controller
{
	var $pathview = 'view/';
	var $css ='';
	var $js = '';
	var $editor ='';
	function render($view, $data=array(), $layout = 'layouts')
	{		
		$this->load('view/'.$layout.'.php',$view,$data);
	}
	//$css : 1 mang href css hoặc 1 href css
	function loadcss($css = array())
	{
		if(is_array($css))
		{
			foreach($css as $cs)
			{
				$this->css .='<link href="'.$cs.'" rel="stylesheet">'."\n";
			}
		}else
		{
			$this->css = '<link href="'.$css.'" rel="stylesheet">'."\n";
		}
		
	}
	function loadjs($js=array())
	{
		if(is_array($js))
		{
			foreach($js as $j)
			{
				$this->js .= '<script src="'.$j.'" ></script>'."\n";
			}
		}else
		{
			$this->js = '<script src="'.$js.'" ></script>'."\n";
		}
	}
	function loadmodule($modules = array(),$path='view/general/')
	{
		if(is_array($modules))
		{
			foreach($modules as $md)
			{ 
				$this->load($path.$md.'.php');
			}
		}else
		{
			$this->load($path.$modules.'.php');
		}
	}	
	function load($path='',$view='',$data=array())
	{	
		extract($data);	
		include_once  $path;
	}

	function loadeditor($editor=array())
	{
		if(is_array($editor))
		{
			foreach($editor as $e)
			{
				$this->editor .= "<script>CKEDITOR.replace('".$e."')</script>"."\n";
			}
		}else
		{
			$this->editor = "<script>CKEDITOR.replace('".$editor."')</script>"."\n";
		}
	}


	//Chứa những phần con cắt ra từ trang chủ (index)
	function loadChilPage($modules = array(),$path='view/hethong/')
	{
		if(is_array($modules))
		{
			foreach($modules as $md)
			{ 
				$this->load($path.$md.'.php');
			}
		}else
		{
			$this->load($path.$modules.'.php');
		}
	}
	
}

?>