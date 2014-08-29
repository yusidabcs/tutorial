<?php

class Database{
	
	private $connection;

	function __construct($host,$user,$password,$database) {
     	$this->connection = new mysqli($host, $user, $password, $database);
     	if (mysqli_connect_error()) {
		    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		}
   	}

   	public function execute($qry){
   		$result = $this->connection->query($qry);
   		return $result;
   	}

   	public function insert($qry){
   		$result = $this->connection->query($qry);
   		if($result)
   		{
   			return true;
   		}
   		else
   		{
   			return $this->connection->error();
   		}
   	}
   	public function close(){
   		$this->connection->close();
   	}

}