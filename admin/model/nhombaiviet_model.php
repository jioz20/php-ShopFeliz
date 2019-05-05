<?php 
	class nhombaiviet_model extends database
	{
		
		function add($giatri, $ngaytao, $ngaycapnhat, $trangthai)
		{
			try 
			{
				$sql = "INSERT INTO `xshop_nhombaiviet`(`grpos_tennhom`, `grpos_ngaytao`, `grpos_ngaycapnhat`, `grpos_trangthai`) VALUES (?,?,?,?)";
				$this->setQuery($sql);
				return $this->execute(array($giatri, $ngaytao, $ngaycapnhat, $trangthai));
			} catch (PDOException $e) 
			{
				return false;
			}		
		}		

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "SELECT * FROM `xshop_nhombaiviet` where grpos_trangthai in (0, 1) order by ? desc limit ? ";
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
				$sql = "select * from xshop_nhombaiviet where grpos_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
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
				$sql = "delete from xshop_nhombaiviet where grpos_ma= ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
		}

		function edit($ten, $capnhat, $status, $ma)
		{
			try 
			{
				$sql = "UPDATE `xshop_nhombaiviet` SET`grpos_tennhom`=?, `grpos_ngaycapnhat`=?,
				`grpos_trangthai`=? WHERE  `grpos_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($ten, $capnhat, $status, $ma));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}		

		function edit_trangthai($update, $value, $id)
		{
			try 
			{
				$sql = "update xshop_nhombaiviet set `grpos_ngaycapnhat`=? , grpos_trangthai=? where grpos_ma=?";
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