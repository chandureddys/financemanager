<?php
 session_start();
 class common
 {
 	public function connect()
 	{
 		$mysqli=new mysqli("localhost","root","","finance");
 		return $mysqli;
 	}
 }

 ?>