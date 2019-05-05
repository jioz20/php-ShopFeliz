<?php
class model extends database
{
	function setwhere($dk=array(),&$param=array())
	{
		$where = '';
		if($dk)
		{
			$where = ' where ';
			$column = '';
			$param = array();
			$i = 0;
			$toantu = ' = ';
			foreach($dk as $cot=>$gt)
			{
				$ar = explode($cot,' ');
				$n = count($ar);
				if($n == 3)
					$toantu = $ar[2];
				elseif($n == 2 && $i ==0)
					$toantu = $ar[1];
				else
					$toantu = ' = ';
				$cot = str_replace($toantu,'',$cot);
				$column .= $cot .$toantu.' ? ';
				$param[] = $gt;
				$i++;
			}
			$where .= $column;
		}
					//echo $where;
		return $where;
	}	

	function setOrderBy($col, $param)
	{
		return " order by $col $param";
	}

	function setJoin($Join=array())
	{
		$join = ' join ';
		$on = ' on '; 

		foreach($Join as $bang => $dieukien)
		{

			$ondk = $on. $dieukien; 
			$join .= $bang . $ondk. ' join ';
		}
		$temp = rtrim($join, ' join ');

		return $temp;
	}

	function setIn($In=array())
	{
		$in = ' where ';
		$temp = ' in (';

		foreach($In as $bang => $param)
		{
			$in .= $bang . $temp . $param . ')';
		}
		return $in;
	}


	function setNotIn($NotIn=array())
	{
		$notin = ' where ';
		$temp = ' not in (';

		foreach($NotIn as $bang => $param)
		{
			$notin .= $bang . $temp . $param . ')';
		}
		return $notin;
	}

	function Them($bang,$dieukien=array())
	{
		$column = '';
		$hoicham = '';
		$param = array();
		if($dieukien)
		{
			foreach($dieukien as $cot=>$giatri)
			{
				$column .= $cot.' ,';
				$hoicham .= '? ,';
				$param[] = $giatri;
			}
			$column = rtrim($column,',');
			$hoicham = rtrim($hoicham,',');

		}
		$sql = "INSERT INTO $bang ($column) VALUES ($hoicham)";
				//echo $sql;
				//var_dump($param);
		$this->setquery($sql);
		return $this->execute($param);
	}


	// function danhsach($hienthi=array(), $bang, $where=array(), $orderby= ' ')
	// {
	// 	$col = '';
	// 	if($hienthi)
	// 	{
	// 		foreach($hienthi as $value)
	// 		{
	// 			$col .= $value .= ' , ';
	// 		}
	// 		$col = rtrim($col, ' , ');
	// 	}

	// 	$sql = "select $col from $bang";

	// 	$odb = $this->setOrderBy($orderby, ' desc'); 

	// 	if($where)
	// 	{
	// 				//build query
	// 		$where = $this->setwhere($where,$param);
	// 		echo $sql = "select $col from $bang $where $orderby ";

	// 		$this->setQuery($sql);
	// 		return $this->loadAllrow($param);	
	// 	}	

	// 	$this->setQuery($sql);
	// 			 //echo $sql;
	// 	return $this->loadAllrow();	
	// }



	function danhsach($select=array(), $bang, $where=array(), $join = array(), $in = array())
	{
		$col = '';
		if($select)
		{
			foreach($select as $value)
			{
				$col .= $value .= ' , ';
			}
			$col = rtrim($col, ' , ');
		}

		$ins = $this->setIn($in);
		$sql = "select $col from $bang $ins";


		if($where)
		{
			$ket = $this->setJoin($join);

			$where = $this->setwhere($where,$param);
			echo $sql = "select $col from $bang $ket $where";

			$this->setQuery($sql);
			return $this->loadAllrow($param);	
		}	

		$this->setQuery($sql);
				 //echo $sql;
		return $this->loadAllrow();	
	}




	function chitiet($bang, $dieukien = array())
	{
		if($dieukien)
		{
			$where = $this->setwhere($dieukien,$param);
			$sql = "select * from $bang $where";
					//echo $sql;
					//var_dump($param);
			$this->setquery($sql);
			return $this->loadrow($param);	
		}
	}



	function capnhat($bang, $update=array(), $where=array())
	{
		$column = '';
		$param = array();
		if($update)
		{
			foreach($update as $cot=>$giatri)
			{
				$column .= $cot.'=? ,';
				$param[] = $giatri;
			}
			$column = rtrim($column,' ,');
			$where = $this->setwhere($where,$param1);
			foreach($param1 as $gt)
				$param[]=$gt;
			$sql = "UPDATE $bang SET $column $where";
			$this->setquery($sql);
		}
		echo $sql;
				//var_dump($param);
		return $this->execute($param);
	}


	function xoa($bang, $dieukien = array())
	{
		$where = $this->setwhere($dieukien,$param);
		$sql = "DELETE FROM $bang $where";
		$this->setQuery($sql);
				//echo $sql;
				//var_dump($param);
		return $this->execute($param);
	}	
}
?>