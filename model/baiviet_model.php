<?php 
	class baiviet_model extends database
	{

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_baiviet join xshop_nhombaiviet on pos_manhomtin = grpos_ma 
				where pos_trangthai = 1 order by ? desc limit ?";
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
				$sql = "select * from xshop_baiviet where pos_trangthai = 1 and pos_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}
		function edit($ten, $manhomtin, $alias, $tukhoa, $mota, $noidungtomtat, $noidungchitiet, $timkiem,$chiase , $trangthai, $capnhat, $ma)
		{
			try 
			{
				$sql = "UPDATE `xshop_baiviet` SET 
				`pos_ten`= ?, 
				`pos_manhomtin`= ?, 
				`pos_alias`= ?, 
				`pos_tukhoa`= ?, 
				`pos_mota`= ?, 
				`pos_noidungtomtat`= ? , 
				`pos_noidungchitiet`= ?, 
				`pos_timkiem`= ?, 
				`pos_chiase`= ?, 
				`pos_trangthai`= ?, 
				`pos_ngaycapnhat`= ?
				 WHERE `pos_ma`=?";

				$this->setQuery($sql);
				return $this->execute(array($ten, $manhomtin, $alias, $tukhoa, $mota, $noidungtomtat, $noidungchitiet, $timkiem, $chiase , $trangthai, $capnhat, $ma));
			} 
			catch (PDOException $e) 
			{
				return;
			}
		}
		function edit_trangthai($capnhat, $value, $id)
		{
			try 
			{
				$sql = "update xshop_baiviet set pos_ngaycapnhat=?, pos_trangthai=? where pos_ma=?";
				$this->setQuery($sql);
				return $this->execute(array($capnhat, $value, $id));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}		
	}
?>