<?php 
	class catelog_model extends database
	{
		function listCatelog()
		{
			$sql = "select * from xshop_catelog";
			$this->setQuery($sql);
			return $this->loadAllrow();
		}
	}
 ?>