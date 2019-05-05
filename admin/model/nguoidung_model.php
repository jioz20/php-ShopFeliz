<?php 
	class nguoidung_model extends database
	{
		function login($user,$pass)
		{
			try 
			{
				$sql = "select  * from xshop_quantri where gov_tendangnhap=? and gov_matkhau=?";
				$this->setquery($sql);
				return $this->loadrow(array($user,$pass));	
			} catch (PDOException $e) 
			{
				return false;
			}
			
		}

		function register($name, $user, $pass, $email, $manhom = 3)
		{
			$server = $_SERVER['REMOTE_ADDR'];
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_quantri`(`gov_ten`, `gov_tendangnhap`, `gov_matkhau`, `gov_email`, `gov_manhom`, `gov_ip_dangnhap`, `gov_truycaplancuoi`, `gov_ngaytao`, `gov_ngaycapnhat`, `gov_trangthai`) VALUES (?, ?, ?, ?, ?, '$server', '$times','$times','$times',0)";
				$this->setQuery($sql);
				return $this->execute(array($name, $user, $pass, $email, $manhom));
			} catch (PDOException $e) 
			{
				return false;
			}
			
		}

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_quantri join xshop_nhomquantri on gov_manhom = groupads_ma 
				where gov_trangthai in (0, 1) order by ? desc limit ?";

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
				$sql = "select * from xshop_quantri where gov_ma = ?";

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
				$sql = "delete from xshop_quantri where gov_ma = ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
			
		}

		function edit($ten, $gov_matkhau, $manhom, $trangthai, $ma)
		{
			try 
			{
				$sql = "update xshop_quantri set gov_ten=?, gov_matkhau=?, gov_manhom=?, gov_trangthai=? where gov_ma=?";
				$this->setQuery($sql);
				return $this->execute(array($ten, $gov_matkhau, $manhom, $trangthai,$ma));	
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
				$sql = "update xshop_quantri set gov_ngaycapnhat=?, gov_trangthai=? where gov_ma=?";
				$this->setQuery($sql);
				return $this->execute(array($update, $value, $id));	
			} 
			catch (PDOException $e)
			{
				return false;
			}		
		}

		function edit_trangthai2($value, $tendangnhap)
		{
			$update=date('Y-m-d h:i:s');
			try 
			{
				$sql = "update xshop_quantri set gov_ngaycapnhat='$update', gov_trangthai=? where gov_tendangnhap=?";
				$this->setQuery($sql);
				return $this->execute(array($value, $tendangnhap));	 
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}
 	}
 ?>