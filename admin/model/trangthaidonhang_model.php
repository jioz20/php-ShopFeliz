<?php 
	class trangthaidonhang_model extends database
	{
		function listdata($orderby, $limit)
		{
			$sql = "SELECT * FROM `xshop_trangthaidonhang` order by ? desc limit ?";
			$this->setQuery($sql);
			return $this->loadAllrow(array($orderby, $limit));
		}
		function loaddata($id)
		{
			try 
			{
				$sql = "select * from xshop_trangthaidonhang where stb_ma = ?";

				$this->setQuery($sql);

				return $this->loadrow(array($id));
			}  
			catch (PDOException $e) 
			{
				return false;
			}
		}

	}
?>