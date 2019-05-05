<?php 
	class nhomquantri_model extends database
	{
		function add($groupads_ten)
		{
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_nhomquantri`(`groupads_ten`, `groupads_ngaytao`, `groupads_nogaycapnhat`, `groupads_trangthai`) VALUES (?,'$times', '$times',1)";
				$this->setQuery($sql);
				return $this->loadrow(array($groupads_ten));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}
		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_nhomquantri where groupads_trangthai in (0, 1) order by ? desc limit ?";
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
				$sql = "delete from xshop_nhomquantri where groupads_ma = ?";
				$this->setQuery($sql);
				return $this->loadrow(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}			
		}
		function edit_ten($value, $id)
		{
			try 
			{
				$sql = "update xshop_nhomquantri set groupads_ten=? where groupads_ma=?";
				$this->setQuery($sql);
				return $this->loadrow(array($value, $id));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}

		function edit_trangthai($value, $id)
		{
			try 
			{
				$sql = "update xshop_nhomquantri set groupads_trangthai=? where groupads_ma=?";
				$this->setQuery($sql);
				return $this->loadrow(array($value, $id));	 
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}
	}
?>