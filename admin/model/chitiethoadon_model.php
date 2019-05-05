<?php 
	class chitiethoadon_model extends database
	{
		function add($mahoadon, $masanpham, $soluong, $dongia, $trangthai)
		{
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_chitiethoadon`(`detail_mahoadon`, `detail_masanpham`, `detail_soluong`, `detail_dongia`, `detail_ngaytao`, `detail_trangthai`, `detail_ngaycapnhat`) VALUES (?,?,?,?,'$times',?,'$times')";
				$this->setQuery($sql);
				return $this->execute(array($mahoadon, $masanpham, $soluong, $dongia, $trangthai));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function delete($id)
		{
			try 
			{
				$sql = "delete from xshop_chitiethoadon where detail_mahoadon= ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}
		}

		function loaddata($id)
		{
			try 
			{
				$sql = "select * from xshop_chitiethoadon where detail_mahoadon = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function loaddata2($id)
		{
			try 
			{
				$sql = "select * from xshop_chitiethoadon where detail_mahoadon = ?";

				$this->setQuery($sql);

				return $this->loadAllrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}

		function listdata($orderby, $limit=100)
		{
			try 
			{
				$sql = "select * from xshop_chitiethoadon join xshop_hoadon on bill_mahoadon = detail_mahoadon join xshop_sanpham on detail_masanpham = pro_ma where detail_trangthai in (0 , 1) order by ? desc limit ?";
				$this->setQuery($sql);
				return $this->loadAllrow(array($orderby, $limit));
			} catch (PDOException $e) 
			{
				return false;
			}
		}
		function edit_trangthai($capnhat, $value, $id)
		{
			try 
			{
				$sql = "update xshop_chitiethoadon set detail_ngaycapnhat = ? ,detail_trangthai= ? where detail_mahoadon=?";
				$this->setQuery($sql);
				return $this->execute(array($capnhat, $value, $id));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}

		function edit($msp, $sl, $dg, $status, $update, $id)
		{
			try 
			{
				$sql = "UPDATE `xshop_chitiethoadon` SET `detail_masanpham`=?,`detail_soluong`=?,`detail_dongia`=?,`detail_trangthai`=?,`detail_ngaycapnhat`=? WHERE `detail_mahoadon`=?";

				$this->setQuery($sql);
				return $this->execute(array( $msp, $sl, $dg, $status, $update, $id));	
			}
			catch (PDOException $e) 
			{
				return false;
			}
		}		
	}
?>