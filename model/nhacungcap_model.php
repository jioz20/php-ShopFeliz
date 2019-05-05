<?php 
	class nhacungcap_model extends database
	{
		function add($supplier_ten, $supplier_diachi, $supplier_sodienthoai, $supplier_nguoilienhe)
		{
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_nhacungcap`(`supplier_ten`, `supplier_diachi`, `supplier_sodienthoai`, `supplier_nguoilienhe`, `supplier_ngaytao`, `supplier_trangthai`, `supplier_ngaycapnhat`) VALUES (?,?,?,?,'$times', 1, '$times')";
				$this->setQuery($sql);
				return $this->execute(array($supplier_ten, $supplier_diachi, $supplier_sodienthoai, $supplier_nguoilienhe));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_nhacungcap order by ? desc limit ?";
				$this->setQuery($sql);
				return $this->loadAllrow(array($orderby, $limit));	 
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function delete($id)
		{
			try 
			{
				$sql = "delete from xshop_nhacungcap where supplier_ma= ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
		}

		function edit($ten, $diachi, $sdt, $nguoilienhe, $trangthai, $ngaycapnhat, $id)
		{
		   $sql = "UPDATE `xshop_nhacungcap` SET `supplier_ten`=?,`supplier_diachi`=?,`supplier_sodienthoai`=?,`supplier_nguoilienhe`=?, `supplier_trangthai`=?,`supplier_ngaycapnhat`=? WHERE `supplier_ma`=?";
			$this->setQuery($sql);
				return $this->execute(array($ten, $diachi, $sdt, $nguoilienhe, $trangthai, $ngaycapnhat, $id));	
		}

		function edit_trangthai($ngaycapnhat, $value, $id)
		{
			try 
			{
				$sql = "update xshop_nhacungcap set supplier_ngaycapnhat=? , supplier_trangthai=? where supplier_ma=?";
				$this->setQuery($sql);
				return $this->loadrow(array($ngaycapnhat, $value, $id));	
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
				$sql = "select * from xshop_nhacungcap where supplier_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function loadCate($orderby, $limit)
		{
			try 
			{
				$sql = "select supplier_ma, supplier_ten from xshop_nhacungcap where supplier_trangthai = 1 order by ? desc limit ?,7";	
				$this->setQuery($sql);
				return $this->loadAllrow(array($orderby, $limit));	 
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}	
	}
?>