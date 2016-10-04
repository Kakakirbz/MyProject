<?php
session_start(); 
$_SESSION['user'] = $_POST['username'];
if (!isset($_SESSION['user'])) {
	header("index.php");
}
require('connector.php');

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
        <div class='pull-right' >
			<div class="dropdown" style='padding-top:12px;'>
			  <button class='btn btn-musichub' id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="glyphicon glyphicon-option-horizontal"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dLabel">
				<li>View Profile</li>
				<a href='logout.php'><li>Sign Out</li></a>
			  </ul>
			</div>
             
        </div>
        </div>
    </nav>
	
	<h1 class='text-center'>Welcome <?php echo $_SESSION["user"]?></h1>
	<p class='text-center'>
	</p>
</body>
</html>
<script src='js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>