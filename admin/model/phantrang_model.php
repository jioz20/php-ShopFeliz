<?php 
	class phantrang_model extends database
	{
		function danhsach_sanpham($vitri=0,$soluong=0)
		{
			$limit ='';
			if($soluong>0)
			{
				$limit = "limit ?, ?";
				$this->setQuery("select * from xshop_sanpham join xshop_nhomsanpham on pro_manhom = grpro_ma join xshop_nhacungcap on supplier_ma  = pro_manhacungcap where pro_trangthai in (0, 1) ".$limit);
			}
			
			return $this->loadAllrow(array( $vitri, $soluong));
		}	

		function total()
		{
			$this->setQuery("select count(pro_ma) as tong from xshop_sanpham where pro_trangthai = 1");
				return $this->loadrow()->tong; 
		}
	}
 ?>