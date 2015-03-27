<?php
 session_start();
 class common
 {
 	public function connect()
 	{
 		$mysqli=new mysqli("localhost","root","","finance");
 		return $mysqli;
 	}

 	public function loginvalid($tablename,$where)
    {
       $mysqli=$this->connect();

 
     $query=$mysqli->query("select * from $tablename where  $where");

     $result=$query->fetch_array();
 
 
     return $result;
    }
}
 ?>