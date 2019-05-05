<?php 
	class cauhinh_model extends database
	{
		function add($code, $giatri, $ngaytao, $ngaycapnhat, $trangthai)
		{
			try 
			{
				$sql = "INSERT INTO `xshop_cauhinh`(`config_code`, `config_giatri`, `config_ngaytao`, `config_ngaycapnhat`, `config_trangthai`) VALUES (?,?,?,?,?)";
				$this->setQuery($sql);
				return $this->execute(array($code, $giatri, $ngaytao, $ngaycapnhat, $trangthai));
			} catch (PDOException $e) 
			{
				return false;
			}
			
		}

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "SELECT * FROM `xshop_cauhinh` where config_trangthai in (0,1) order by ? desc limit ?";

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
				$sql = "select * from xshop_cauhinh where config_ma = ?";

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
				$sql = "delete from xshop_cauhinh where config_ma = ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
			
		}

		function edit($code, $giatri, $ngaycapnhat, $trangthai, $ma)
		{
			try 
			{
				$sql = "UPDATE `xshop_cauhinh` SET `config_code`=?,`config_giatri`=?, `config_ngaycapnhat`=?,`config_trangthai`=? WHERE`config_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($code, $giatri, $ngaycapnhat, $trangthai, $ma));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}

		function edit_trangthai($ngaycapnhat, $trangthai, $id)
		{
			try 
			{
			   $sql = "UPDATE `xshop_cauhinh` SET `config_ngaycapnhat`=?,`config_trangthai`=? WHERE`config_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($ngaycapnhat, $trangthai, $id));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}

		
 	}
 ?>