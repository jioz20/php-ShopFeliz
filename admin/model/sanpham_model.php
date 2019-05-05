<?php
	class sanpham_model extends database
	{
	   function add($pro_ten,
					$pro_alias , 
					$pro_manhacungcap, 
					$pro_manhom, 
					$pro_thuonghieu, 
					$pro_gia, 
					$pro_soluong, 
					$pro_hinh, 
					$pro_danhsachhinh, 
					$pro_tukhoa, 
					$pro_mota, 
					$pro_timkiem, 
					$pro_xuatxu, 
					$pro_hinhchiase, 
					$pro_noidungchitiet, 
					$pro_noidungtomtat,
					$pro_trangthai, 
					$pro_sku, 
					$pro_chatlieu)
		{
			$times = date('Y-m-d h:i:s');
			$pro_alias = strtoseo($pro_ten);
			try 
			{
				$sql = "INSERT INTO `xshop_sanpham`(
													`pro_ten`, 
													`pro_alias`, 
													`pro_manhacungcap`, 
													`pro_manhom`, 
													`pro_thuonghieu`, 
													`pro_gia`, 
													`pro_soluong`, 
													`pro_hinh`, 
													`pro_danhsachhinh`, 
													`pro_tukhoa`, 
													`pro_mota`, 
													`pro_timkiem`, 
													`pro_xuatxu`, 
													`pro_hinhchiase`, 
													`pro_noidungchitiet`, 
													`pro_noidungtomtat`,
													`pro_ngaytao`,
													`pro_trangthai`, 
													`pro_ngaycapnhat`, 
													`pro_sku`, 
													`pro_chatlieu`
													) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'$times',?,'$times',?,?)";
				$this->setQuery($sql);
				return $this->execute(array($pro_ten, $pro_alias, $pro_manhacungcap, $pro_manhom, $pro_thuonghieu, $pro_gia, $pro_soluong, $pro_hinh, $pro_danhsachhinh, $pro_tukhoa, $pro_mota, $pro_timkiem, $pro_xuatxu, $pro_hinhchiase, $pro_noidungchitiet, $pro_noidungtomtat, $pro_trangthai, $pro_sku, $pro_chatlieu));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function delete($id)
		{
			try 
			{
				$sql = "delete from xshop_sanpham where pro_ma = ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
			
		}
		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select pro_ma from xshop_sanpham join xshop_nhomsanpham on pro_manhom = grpro_ma join xshop_nhacungcap on supplier_ma  = pro_manhacungcap 
				where pro_trangthai in (0, 1) order by ? desc limit ?";
				$this->setQuery($sql);
				return $this->loadAllrow(array($orderby, $limit));	 
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function loaddata($id)
		{
			try 
			{
				$sql = "select * from xshop_sanpham where pro_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}
		function edit($ten, $alias, $nhacungcap, $nhom, $thuonghieu, $gia, $soluong, $hinh, $danhsachhinh, $tukhoa, $mota, $timkiem, $xuatxu, $hinhchiase, $chitiet, $tomtat, $trangthai, $sku, $chatlieu, 
			$ma)
			{
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "UPDATE  `xshop_sanpham` SET `pro_ten`= ?,
								`pro_alias`=?,
								`pro_manhacungcap`=?,
								`pro_manhom`=?,
								`pro_thuonghieu`=?,
								`pro_gia`=?,
								`pro_soluong`=?,
								`pro_hinh`=?,
								`pro_danhsachhinh`=?,
								`pro_tukhoa`=?,
								`pro_mota`=?,
								`pro_timkiem`=?,
								`pro_xuatxu`=?,
								`pro_hinhchiase`= ?,
								`pro_noidungchitiet`= ?,
								`pro_noidungtomtat`=?,
								`pro_ngaytao`='$times',
								`pro_trangthai`=?,
								`pro_ngaycapnhat`='$times',
								`pro_sku`=?,
								`pro_chatlieu`=? 
								WHERE `pro_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($ten, $alias, $nhacungcap, $nhom, $thuonghieu, $gia, $soluong, $hinh, $danhsachhinh, $tukhoa, $mota, $timkiem, $xuatxu, $hinhchiase, $chitiet, $tomtat, $trangthai, $sku, $chatlieu, $ma));				
			}
			catch (PDOException $e) 
			{
				return $false;
			}
		}


		function edit_trangthai($update, $value, $id)
		{
			try 
			{
				$sql = "update xshop_sanpham set pro_ngaycapnhat=?, pro_trangthai=? where pro_ma=?";
				$this->setQuery($sql);
				return $this->execute(array($update, $value, $id));	
			} 
			catch (PDOException $e)
			{
				return false;
			}		
		}

	}	
?>