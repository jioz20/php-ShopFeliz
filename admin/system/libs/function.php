<?php 
  function islogin()
  {
    if(isset($_SESSION['login'])&& $_SESSION['login'])
      return true;
    else 
      return false;
  }
  function chuyentrang($link = 'index.php')
  {
    header('location: '. $link);
  }
  function viewar($l)
  {
    echo '<pre>';
    print_r($l);
    echo '</pre>';
  }

  function getClientIP() 
  {
      return $_SERVER['REMOTE_ADDR']; 
  }


  
function strtoseo($value) //Được sử dụng để làm link alias ("Đường dẫn ảo") -              
{ 

  $marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",

  "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề"

  ,"ế","ệ","ể","ễ",

  "ì","í","ị","ỉ","ĩ",

  "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"

  ,"ờ","ớ","ợ","ở","ỡ",

  "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",

  "ỳ","ý","ỵ","ỷ","ỹ",

  "đ",

  "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"

  ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",

  "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",

  "Ì","Í","Ị","Ỉ","Ĩ",

  "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"

  ,"Ờ","Ớ","Ợ","Ở","Ỡ",

  "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",

  "Ỳ","Ý","Ỵ","Ỷ","Ỹ",

  "Đ",

  " ","?",":","\"","'",",",".","!","#","@","$","(",")","[","]","{","}","|","+","`","&","/","%","\\","<",">");



  $marKoDau=array("a","a","a","a","a","a","a","a","a","a","a"

  ,"a","a","a","a","a","a",

  "e","e","e","e","e","e","e","e","e","e","e",

  "i","i","i","i","i",

  "o","o","o","o","o","o","o","o","o","o","o","o"

  ,"o","o","o","o","o",

  "u","u","u","u","u","u","u","u","u","u","u",

  "y","y","y","y","y",

  "d",

  "A","A","A","A","A","A","A","A","A","A","A","A"

  ,"A","A","A","A","A",

  "E","E","E","E","E","E","E","E","E","E","E",

  "I","I","I","I","I",

  "O","O","O","O","O","O","O","O","O","O","O","O"

  ,"O","O","O","O","O",

  "U","U","U","U","U","U","U","U","U","U","U",

  "Y","Y","Y","Y","Y",

  "D",

  "-","","","","","","","","","","","","","","","","","","","","","","","-","","");

  $value = str_replace($marTViet,$marKoDau,$value); //Thay thế tất cả chữ có dấu thành chữ không dấu

  $value = mb_strtolower(trim($value), "UTF-8"); //Chuyển tất cả chuỗi đó thành chữ hoa

  $value = str_replace(' ','-',$value); // Thay các dấu ' ' thành dấu '-'



  $value = str_replace('?','',$value);

  $value = str_replace('/','-',$value); 
  $value = str_replace('%','',$value);  

  $charaterA = '#(à|ả|ã|á|ạ|ă|ằ|ẳ|ẵ|ắ|ặ|â|ầ|ẩ|ẫ|ấ|ậ)#imsU'; //#imsU là một chuỗi các kí tự đặc biệt     

  $replaceCharaterA = 'a';     

  $value = preg_replace($charaterA, $replaceCharaterA, $value);               

  $charaterD = '#(đ)#imsU';    

  $replaceCharaterD = 'd';      

  $value = preg_replace($charaterD,$replaceCharaterD,$value);            

  $charaterE = '#(è|ẻ|ẽ|é|ẹ|ê|ề|ể|ễ|ế|ệ)#imsU';      

  $replaceCharaterE = 'e';      

  $value = preg_replace($charaterE,$replaceCharaterE,$value);         

  $charaterI = '#(ì|ỉ|ĩ|í|ị)#imsU';      

  $replaceCharaterI = 'i';      

  $value = preg_replace($charaterI,$replaceCharaterI,$value);            

  $charaterO = '#(ò|ỏ|õ|ó|ọ|ô|ồ|ổ|ỗ|ố|ộ|ơ|ờ|ở|ỡ|ớ|ợ)#imsU';      

  $replaceCharaterO = 'o';      

  $value = preg_replace($charaterO,$replaceCharaterO,$value);                  

  $charaterU = '#(ù|ủ|ũ|ú|ụ|ư|ừ|ử|ữ|ứ|ự)#imsU';      

  $replaceCharaterU = 'u';      

  $value = preg_replace($charaterU,$replaceCharaterU,$value);            

  $charaterY = '#(ỳ|ỷ|ỹ|ý|ỵ)#imsU';      

  $replaceCharaterY = 'y';      

  $value = preg_replace($charaterY,$replaceCharaterY,$value); 

  $value = str_replace(',','',$value); 

  $value = str_replace('---','-',$value);   

  $value = str_replace('--','-',$value);   

  $value = str_replace('-–-','-',$value);    

  $value = str_replace('_','-',$value); 

  $value = str_replace('(','',$value); 

  $value = str_replace(')','',$value); 

  $value = str_replace('{','',$value); 

  $value = str_replace('&','',$value); 

  $value = str_replace('}','',$value); 

  $value = str_replace('.','-',$value); 

  $value = str_replace('--','-',$value);    

  $value = str_replace('ỏ','o',$value); 

  $value = preg_replace('/[^\p{L}\p{N}]/u', '-', $value);

  $value = str_replace("--",'-',$value);  

  return $value;  
}


class FileManager
{
    private $filename;
    private $path;
    private $filetype = array('png','jpg','gif');
    private $name='file_';
    private $maxsize;
    function __construct($fileinfo, $dd, $msize) {
        $this->filename = $fileinfo;
        $this->maxsize =$msize;
        $this->path = $dd;
        
    }
    function myUpLoads()
    {
        if($this->filename)
        {
            if(is_array($this->filename['name']))
            {
                $maxs = $this->maxsize *1024 *1024;
                $kq ='';
                foreach($this->filename['name'] as $i=>$name)
                {
                    $type = $this->filename['type'][$i];
                    $size = $this->filename['size'][$i];
                    $tmp_name = $this->filename['tmp_name'][$i];
                    $error = $this->filename['error'][$i];
                    if($size > 0 && $size <=$maxs)
                    {
                        $tachduoi = explode('.', $name);
                        $duoi = end($tachduoi);
                        $duoi = strtolower($duoi);
                        //echo $duoi;
                        if(in_array($duoi, $this->filetype))
                        {
                            $newname = $this->name.rand(0,100).time().$i.rand(0,100).'.'.$duoi;
                            $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/admin/'.$this->path.'/'.$newname;
                            move_uploaded_file($tmp_name,$fullpath);
                            return $newname;                  
                        } 
                    }
                }
                
            }
    }
  }
}
?>