<?php 
require('connector.php');

if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$email=$_POST['email'];
	
	if($password == $password2){
		$new = mysqli_query($sql, "INSERT INTO soundcloud (userId, userName, userPass, email) VALUES (NULL, '".$name."', '".$password."', '".$email."')");
		if(!$new){
			echo "PSSST!";
		}
		$_SESSION['username'] = $name;
		header('location:index.php');
	}else{
		echo "Password doesn't match";
	}
}
?>