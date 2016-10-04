<?php
session_start(); 
if (!isset($_SESSION['user'])) {
	header("index.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
    .title{
        color: white;
        font-size: 20px;
        font-weight: bold;
        margin-top: 50px;
    }
    .img{
        width:8%;
        margin-left: 100px;
    }
    span{
        color: white;
    }
    .gray{
        color: gray;
        margin-left: 10px;
        margin-right: 10px;
    }
</style>
</head>
<body>
	<nav class='navbar navbar-inverse'>
        <div class='container'>
        <div class='navbar-header'>
            <img src="img/favicon.png" class='img'>
            <span class='title'>MUSIC HUB</span>
            
        </div>
        <div class='pull-right' style='padding-top:7px;'>
             <button class='btn btn-musichub' data-toggle='modal' data-target='#myModal'><span>Sign In</span></button> <span class='gray'>or</span>
            <button class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Create Account</button>
        </div>
        </div>
    </nav>
	<h1 class='text-center'></h1>
	<p class='text-center'>
		<a href="logout.php">
			<button class='btn btn-sm btn-danger'>SIGN OUT!</button>
			
		</a>
	</p>
</body>
</html>