<?php 
class file_model
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
        $kq="";
        if($this->filename)
        {
            if(is_array($this->filename['name']))
            {  // xem_arr($this->filename['name']);
                $maxs = $this->maxsize *1024 *1024;
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
                            
                            $newname = $this->name.rand(100,999).time(100,999).$i.'.'.$duoi;
                            $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/data/'.$this->path.'/'.$newname;
                             //echo $fullpath;
                            move_uploaded_file($tmp_name,$fullpath);
                            // echo $newname;
                            $kq=$kq.'#'.$newname;
                        }   
                    }
                   
                }
              
            }
        }
        $kq=ltrim($kq,'#');
       // echo $kq;
        return $kq;
    }
}
 ?>