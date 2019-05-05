<?php
	class sanpham_model extends database
	{
		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_sanpham join xshop_nhomsanpham on pro_manhom = grpro_ma join xshop_nhacungcap on supplier_ma  = pro_manhacungcap where pro_trangthai = 1 order by ? desc limit ? ";
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
				$sql = "select * from xshop_sanpham where pro_ma = ? and pro_trangthai = 1";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}

		//Load sản phẩm mới
		function loadHighlights($id)
		{
			try 
			{
				$sql = "select * from xshop_sanpham join xshop_nhomsanpham 
						on grpro_ma = pro_manhom 
						where grpro_ma = ? and pro_trangthai = 1 order by pro_ma desc limit 8";

				$this->setQuery($sql);
				return $this->loadAllrow(array($id));		
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}


		function loadCategory($id_nhacungcap, $id_manhom, $vitri =0, $soluong=0)
		{
			try 
			{
				$sql = "select * from xshop_sanpham join xshop_nhacungcap on pro_manhacungcap = supplier_ma
														join xshop_nhomsanpham on pro_manhom = grpro_ma
								where pro_manhacungcap = ? and pro_manhom = ? and pro_trangthai = 1 limit ?, ?";
				$this->setQuery($sql);
				return $this->loadAllrow(array($id_nhacungcap, $id_manhom, $vitri, $soluong));
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}



		function loadOneID($table, $cols_trangthai, $cols_ma, $id, $vitri=0,$soluong=0)
		{
			if($soluong>0)
			{
				$sql ="select * from $table where $cols_trangthai = 1 and $cols_ma = ? limit ?, ?";
				$this->setQuery($sql);
				return $this->loadAllrow(array($id, $vitri, $soluong));
			}
		}

		function Search($table, $status, $rows_ma, $keyword, $vitri=0,$soluong=0)
		{
			try 
			{ 
				$limit ='';
				if($soluong>0)
				{
					$limit = "limit ?, ?";
					$sql = "select * from $table where $status = 1 and $rows_ma like '"."%$keyword%'".$limit;
					$this->setQuery($sql);
				}

				return $this->loadAllrow(array($vitri, $soluong));
			} catch (PDOException $e) 
			{
				return false;
			}
		}

	}	
?>