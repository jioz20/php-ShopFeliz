<?php 
	class catelog_model extends database
	{
		function insertCatelog($id)
		{
			$sql = "INSERT INTO `xshop_catelog`(`t_nhom1`, `t_nhom2`, `t_nhacungcap`) VALUES (1,2,?)";
			$this->setQuery($sql);
			return $this->execute(array($id));
		}

	}
 ?>