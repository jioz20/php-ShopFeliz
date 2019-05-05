<?php 
	class baiviet_model extends model
	{
		function add($pos_ten, $pos_manhomtin, $pos_alias, $pos_tukhoa, $pos_mota, $pos_noidungchitiet, $pos_noidungtomtat, $pos_timkiem, $pos_chiase, $pos_ngaytao, $pos_trangthai, $pos_ngaycapnhat)
		{
			try 
			{
				$sql = "INSERT INTO `xshop_baiviet`(
				`pos_ten`, 
				`pos_manhomtin`, 
				`pos_alias`,
				 `pos_tukhoa`, 
				 `pos_mota`, 
				 `pos_noidungchitiet`, 
				 `pos_noidungtomtat`, 
				 `pos_timkiem`, 
				 `pos_chiase`, 
				 `pos_ngaytao`, 
				 `pos_trangthai`, 
				 `pos_ngaycapnhat`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

				$this->setQuery($sql);
				return $this->execute(array($pos_ten, $pos_manhomtin, $pos_alias, $pos_tukhoa, $pos_mota, $pos_noidungchitiet, $pos_noidungtomtat, $pos_timkiem, $pos_chiase, $pos_ngaytao, $pos_trangthai, $pos_ngaycapnhat));

			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		// function listdata($orderby, $limit)
		// {
		// 	try 
		// 	{
		// 		$sql = "select * from xshop_baiviet join xshop_nhombaiviet on pos_manhomtin = grpos_ma where pos_trangthai in (0, 1) order by ? desc limit ?";
		// 		$this->setQuery($sql);
		// 		return $this->loadAllrow(array($orderby, $limit));	 
		// 	} 
		// 	catch (PDOException $e) 
		// 	{
		// 		return false;
		// 	}
		// }


		// function listdata($ma1, $odb_col)
		// {
		// 	$where = array('pos_ma '=> $ma1);
		// 	return $this->danhsach(array('pos_ma', 'pos_ten') ,'xshop_baiviet', $where, $odb_col);
		// }


		function listdata($ma1, $ins)
		{
			$temp = implode($ins, ',');

			$where = array('pos_ma'=> $ma1);
			$join = array('xshop_nhombaiviet'=>'pos_manhomtin = grpos_ma');


			$in = array('pos_ma'=> $temp);

			return $this->danhsach(array('*') ,'xshop_baiviet', array() , $join, $in);
		}



		function loaddata($id)
		{
			try 
			{
				$sql = "select * from xshop_baiviet where pos_ma = ?";

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
				$sql = $this->xoa('xshop_baiviet', array('pos_ma'=>$id));
				$this->setQuery($sql);
				return $this->execute(array($id));				
			} catch (PDOException $e) 
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