<?php
	class chucnang_model extends database
	{
		function add($fun_ten, $fun_link, $fun_chucnangcha, $fun_trangthai)
		{	
			$fun_link = strtoseo($fun_ten);
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_chucnang`(`fun_ten`, `fun_link`, `fun_chucnangcha`, `fun_ngaytao`, `fun_ngaycapnhat`, `fun_trangthai`) VALUES (?, ?, ?, '$times', '$times', ?)";
				$this->setQuery($sql);
				return $this->execute(array($fun_ten, $fun_link, $fun_chucnangcha, $fun_trangthai));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_nhomquantri join xshop_chucnang on fun_chucnangcha = groupads_ma
				where fun_trangthai in (0, 1) order by ? desc limit ?";
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
				$sql = "select * from xshop_chucnang where fun_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function edit($ten, $link, $chucnangcha, $trangthai, $ma)
		{
			try
			{
				$sql = "update xshop_chucnang set fun_ten=?, fun_link=?, fun_chucnangcha = ?, fun_trangthai=? where fun_ma=?";
				$this->setQuery($sql);
				return $this->execute(array($ten, $link, $chucnangcha, $trangthai, $ma));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function edit_trangthai($update, $status, $id)
		{
			try 
			{
				$sql = "update xshop_chucnang set fun_ngaycapnhat = ?, fun_trangthai = ? where fun_ma = ?";
				$this->setQuery($sql);
				return $this->execute(array($update, $status, $id));
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
				$sql = "delete from xshop_chucnang where fun_ma = ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
		}	
	} 
?>