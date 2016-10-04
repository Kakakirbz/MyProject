<?php 

$sql = mysqli_connect("localhost", "root", "", "Project");

if(!$sql){
	echo "Error Connecting to DB!";
	exit();
}

?>