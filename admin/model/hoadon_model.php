<?php 
	class hoadon_model extends database
	{
		function add($mahoadon, $ngaydat, $trigia,  $magiamgia='', $tenkhachhang, $sodienthoai, $diachi, $email,$trangthaidonhang, $ngaytao, $trangthai, $ngaycapnhat)
		{
			try 
			{
				$sql = "INSERT INTO `xshop_hoadon`(`bill_mahoadon`, 
													`bill_ngaydat`, 
													`bill_trigia`,
													 `bill_magiamgia`, 
													 `bill_tenkhachhang`, 
													 `bill_sodienthoai`, 
													 `bill_diachi`, 
													 `bill_email`, 
													 `bill_trangthaidonhang`,
													 `bill_ngaytao`,
													 `bill_trangthai`, 
													 `bill_ngaycapnhat`) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
				$this->setQuery($sql);
				return $this->execute(array($mahoadon, $ngaydat, $trigia,  $magiamgia, $tenkhachhang, $sodienthoai, $diachi, $email, $trangthaidonhang, $ngaytao, $trangthai, $ngaycapnhat));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}


		function loaddata($id)
		{
			try 
			{
				$sql = "select * from xshop_hoadon where bill_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}


		function listdata($orderby, $limit)
		{
			try 
			{
			  $sql = "select * from xshop_hoadon join xshop_trangthaidonhang on bill_trangthaidonhang = stb_ma 
			  where bill_trangthai in (0, 1) order by ? desc limit ? ";
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
				$sql = "delete from xshop_hoadon where bill_ma= ?";
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function edit($mahoadon, $ngaydat, $trigia, $magiamgia='', $khachhang, $sdt, $diachi, $email, $stbill, $status, $capnhat, $ma)
		{
			try 
			{
				$sql = "UPDATE `xshop_hoadon` SET 
				`bill_mahoadon`=?,
				`bill_ngaydat`=?,
				`bill_trigia`=?,
				`bill_magiamgia`=?,
				`bill_tenkhachhang`=?,
				`bill_sodienthoai`=?,
				`bill_diachi`=?,
				`bill_email`=?,
				`bill_trangthaidonhang`=?,
				`bill_trangthai`=?,
				`bill_ngaycapnhat`=? WHERE 
				`bill_ma`=?";
				$this->setQuery($sql);
				return $this->execute(array($mahoadon, $ngaydat, $trigia, $magiamgia, $khachhang, $sdt, $diachi, 
					$email, $stbill, $status, $capnhat, $ma));	
			}
			catch (PDOException $e) 
			{
				return false;
			}
		}
		function edit_trangthai($ngaycapnhat, $value, $id)
		{
			try 
			{
				$sql = "update xshop_hoadon set bill_ngaycapnhat = ?, bill_trangthai=? where bill_ma=?";
				$this->setQuery($sql);
				return $this->execute(array($ngaycapnhat, $value, $id));	
			} 
			catch (PDOException $e) 
			{
				return false;
			}		
		}

	}
	?>