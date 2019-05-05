<?php
	class nhomsanpham_model extends database
	{
		function add($grpro_ten, $grpro_macha, $alias, $trangthai)
		{
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_nhomsanpham`(`grpro_ten`, `grpro_macha`, `grpro_alias`, `grpro_ngaytao`, `grpro_trangthai`, `grpro_ngaycapnhat`) 
				VALUES (?,?,?,'$times', ? , '$times')";

				$this->setQuery($sql);
				return $this->execute(array($grpro_ten, $grpro_macha, $alias, $trangthai));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_nhomsanpham where grpro_trangthai = 1 order by ? desc limit ?";
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
				$sql = "delete from xshop_nhomsanpham where grpro_ma= ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}		
		}

		function edit($ten, $macha, $alias, $trangthai, $ngaycapnhat, $id)
		{
			try 
			{
				$sql = "UPDATE `xshop_nhomsanpham` SET `grpro_ten`=?,`grpro_macha`=?,`grpro_alias`=?,`grpro_trangthai`=?,`grpro_ngaycapnhat`=? WHERE `grpro_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($ten, $macha, $alias, $trangthai, $ngaycapnhat, $id));
			} catch (PDOException $e) 
			{
				return false; 
			}
		}

		function loaddata($id)
		{
			try 
			{
				$sql = "select * from xshop_nhomsanpham where grpro_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
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
				$sql = "UPDATE `xshop_nhomsanpham` SET `grpro_ngaycapnhat`=?, `grpro_trangthai`=? WHERE `grpro_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($ngaycapnhat, $trangthai, $id));
			} catch (PDOException $e) 
			{
				return false; 
			}
		}

	} 
?>