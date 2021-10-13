<?php
//Database Connection
 $server="localhost";
 $username="root";
 $password="";
 //Localhost Database name
$db="webs";
$conn=new mysqli($server,$username,$password,$db);
if ($conn->connect_error) {
	//Databases connection fail Message
	die("connection failed".connect_error);
}
?>