<?php
	function openConnection(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="supplychain";
		$port="3306";

		$con = new mysqli($host, $user, $pw,$db, $port) or die("Connect failed: %s\n". $conn -> error);
		return $con; 
	}

	function closeConnection($con){
		$con -> close();
	}
?>
<!-- Developed by Anubhav Dutta : https://www.linkedin.com/in/iamanubhavdutta/ -->