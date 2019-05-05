<?php 
	class database extends dbconfig
	{
		protected $pdo, $query, $statement;
		function __construct()
		{
			try 
			{
				$opt = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES=>false);
				$this->pdo = new PDO('mysql:host='.$this->HOST.';dbname='.$this->DBNAME,$this->USER,$this->PASSWORD,$opt);
				$this->pdo->query($this->UTF8);
			} catch (PDOException $e) 
			{
				exit('sever error');
			}
		}
	 	function setQuery($sql)
	 	{
	 		$this->query = $sql;
	 	}

	 	function getid()
		{
			try{
				return $this->pdo->lastInsertId();	
			}
			catch(PDOException $e)
			{
				//muon show ra loi
				//exit('server error');
				//muon lay ket qua tra ve la false de thong bao noi loi tren man hinh nguoi dung
				return false;
			}
		}

		function execute($param=array())
		{
			try 
	 		{
	 			//new một pdo trong statement
	 			$this->statement = $this->pdo->prepare($this->query);

	 			 //thực thi câu lệnh trong statement
	 			return $this->statement->execute($param);
	 			
	 		} catch (PDOException $e) 
	 		{	 			
				return false;
	 		}
		}

	 	function loadAllrow($param = array())
	 	{
	 		try 
	 		{
	 			//new một pdo trong statement
	 			$this->statement = $this->pdo->prepare($this->query);

	 			 //thực thi câu lệnh trong statement
	 			$this->statement->execute($param);

	 			return $this->statement->fetchAll(PDO::FETCH_OBJ);
	 		} catch (PDOException $e) 
	 		{	 			
	 		//muon show ra loi
			//exit('server error');
			//muon lay ket qua tra ve la false de thong bao noi loi tren man hinh nguoi dung
				exit('sever error' . $e->getMessage());
				return false;
	 		}
	 	}


	 	function loadrow($param = array())
	 	{
	 		try 
	 		{
	 			//new một pdo trong statement
	 			$this->statement = $this->pdo->prepare($this->query);

	 			 //thực thi câu lệnh trong statement
	 			$this->statement->execute($param);

	 			return $this->statement->fetch(PDO::FETCH_OBJ);
	 		} catch (PDOException $e) 
	 		{	 			
	 		//muon show ra loi
			//exit('server error');
			//muon lay ket qua tra ve la false de thong bao noi loi tren man hinh nguoi dung
				return false;
	 		}
	 	}
	}
	function disconnect()
	{
		$this->pdo = NULL;
		$this->statement = NULL;
		$this->query ='';
	}


 ?>