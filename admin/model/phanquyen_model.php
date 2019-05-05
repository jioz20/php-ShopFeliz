<?php 
	class phanquyen_model extends database
	{

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_phanquyen join xshop_chucnang on fun_ma = decentz_machucnang join xshop_quantri on gov_ma = decentz_manguoidung where fun_trangthai in (0, 1) order by ? desc limit ?";
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
				$sql = "select * from xshop_phanquyen where decentz_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}		

		function add($chucnang, $nguoidung, $ngaytao, $capnhat, $trangthai)
		{	
			try 
			{
				$sql = "INSERT INTO `xshop_phanquyen`(`decentz_machucnang`, `decentz_manguoidung`, `decentz_ngaytao`, `decentz_ngaycapnhat`, `decentz_trangthai`) VALUES (?,?,?,?,?)";
				$this->setQuery($sql);
				return $this->execute(array($chucnang, $nguoidung, $ngaytao, $capnhat, $trangthai));
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
				$sql = "delete from xshop_phanquyen where decentz_ma = ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function edit($machucnang, $manguoidung, $ngaycapnhat, $trangthai, $id)
		{
			try 
			{
				$sql = "UPDATE `xshop_phanquyen` SET `decentz_machucnang`=?,`decentz_manguoidung`=?,`decentz_ngaycapnhat`=?,`decentz_trangthai`=? WHERE `decentz_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($machucnang, $manguoidung, $ngaycapnhat, $trangthai, $id));
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function edit_trangthai($trangthai, $ngaycapnhat, $id)
		{
			try 
			{
				$sql = "UPDATE `xshop_phanquyen` SET `decentz_ngaycapnhat`=?, `decentz_trangthai`=? WHERE `decentz_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($trangthai, $ngaycapnhat, $id));
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}
	}
 ?>