<?php

	class Db
	{
		private $dbh;
		
		function __construct($host, $user, $pass, $name)
		{
			try
			{
				$this->dbh = new PDO('mysql:host='.$host.';dbname='.$name, $user, $pass);
			}
			catch(Exception $ex)
			{
				die('Error connect to database.');
				//die('Error. '.$ex->getMessage());
			}
		}
		
		function query($sql, $queryParams = array())
		{
			$sth = $this->dbh->prepare($sql);
			
			$sth->execute($queryParams);
			
			return $sth->fetchAll();
		}
	}

?>