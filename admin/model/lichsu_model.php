<?php 
	class lichsu_model extends database
	{
		function add($log_noidung, $log_nguoitao)
		{
			$times = date('Y-m-d h:i:s');
			try 
			{
				$sql = "INSERT INTO `xshop_logs`(`log_noidung`, `log_nguoitao`, `log_ngaytao`, `log_trangthai`, `log_ngaycapnhat`) VALUES (?,?,'$times',1,'$times')";
				$this->setQuery($sql);
				return $this->loadrow(array($log_noidung, $log_nguoitao));
			} catch (PDOException $e) 
			{
				return false;
			}			
		}

		function listdata($orderby, $limit)
		{
			try 
			{
				$sql = "select * from xshop_logs join xshop_quantri on log_idnguoitao = gov_ma order by ? desc limit ?";
				$this->setQuery($sql);
				return $this->loadAllrow(array($orderby, $limit));	 
			} 
			catch (PDOException $e) 
			{
				return false;
			}
		}
	}
 ?>