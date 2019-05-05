<?php 
	class phantrang_model extends database
	{
		function total()
		{
			$this->setQuery("select count(pro_ma) as tong from xshop_sanpham where pro_trangthai = 1");
				return $this->loadrow()->tong; 
		}


		//Tong san pham cua nhom co nhieu nha cung cap
		function total_OneCate($id_nhom)
		{
			$this->setQuery("select count(pro_ma) as tong from xshop_sanpham where pro_trangthai = 1 and pro_manhom = ?");
				return $this->loadrow(array($id_nhom))->tong;
		}

		//Tổng sản phẩm theo nhóm của từng nhà cung cấp
		function total_Categories($id_nhacungcap, $id_manhom)
		{
			$this->setQuery("select count(pro_ma) as tong from xshop_sanpham join xshop_nhacungcap on pro_manhacungcap = supplier_ma join xshop_nhomsanpham on pro_manhom = grpro_ma
								where pro_manhacungcap = ? and pro_manhom = ? and pro_trangthai = 1");
				return $this->loadrow(array($id_nhacungcap, $id_manhom))->tong; 
		}

	}
 ?>