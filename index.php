<?php 
require('connector.php');

if (isset($_FORM['username']) && isset($_FORM['password']) && isset($_FORM['email'])) {
    $username = $_FORM['username'];
    $password = $_FORM['password'];
    $email = $_FORM['email'];

    $qry = mysqli_query($sql, "SELECT * FROM soundcloud WHERE userName='".$username."'AND userPass='".$password."' AND email='".$email."'");

    if ($qry) {
    $x = mysqli_num_rows($qry);
    if($x==1){
        session_start();
        $_SESSION['user'] = $username;
        header("location:homepage.php");
    }else{
        $login = false;
    }
}
}
?>
<head>
<style>
    .title{
        color: white;
        font-size: 20px;
        font-weight: bold;
        margin-top: 50px;
    }
    .img{
        width: 8%;
   }
</style>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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

    <div id='myModal' class='modal fade' role='dialog'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <form method='POST' action='homepage.php' autocomplete='off'>
					<br>
                    <input type='text' require='required' name='username' placeholder='Username or Email' class='form-control'>
                    <input type='password' require='required' name='password' placeholder='Password' class='form-control'>
					<br>
                    <button type='submit' class='btn btn-primary' >Sign In</button>
                </form>
            </div>
        </div>
    </div>

    <div class='col-md-10 col-md-offset-1 text-center'>
        <img src="img/musichub.png" style='width:50%;'><br>
        <h1>WELCOME TO MUSICHUB</h1>
    </div>
    <br><br>
    <div class='col-md-10 col-md-offset-1'>
        <span style='color:black; margin-top:50px; font-size:40px; font-weight:'>MusicHub is a place where you will get to share your music, listen to other people's tracks and contribute to the music community.</span>
    </div>
</div>
</body>
<script src='js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>
<script>
</script>
