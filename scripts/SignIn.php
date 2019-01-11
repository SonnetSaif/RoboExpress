<?php
    session_start();

    $db = mysqli_connect("localhost", "root", "", "authentication");

    if (isset($_POST['signinbtn'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);
        
        $rows = mysqli_num_rows($result);
        
        if($rows == 1){
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: Home.php");
        }
        else{
            $_SESSION['message'] = "Username or Password Incorrect";
        }
            
    }

?>





<!DOCKTYPE html>
<html>
    <head>
        <title>Sign In - Robo Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="SignIn_Style.css">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    </head>
    
    <body>
        
        <?php
                if(isset($_SESSION['message'])){
                echo "<div class='col-lg-3' id='error_msg' >". $_SESSION['message']."</div>";
                unset($_SESSION['message']);
                }
            ?>
        
        <div class="signin">
            
            <form method="post" action="SignIn.php">
                <h2 style="font-family: 'Source Sans Pro';color: white;font-weight:lighter;font-size: 40px;
                text-align: center;">Sign In</h2>
                <input class="input1" type="text" name="username" placeholder="Enter Username">
                <input class="input1" type="password" name="password" placeholder="Enter Password">
<!--
                <input class="input1" type="checkbox" name="remember">
                <label for="remember-me">Remember me</label>
-->
                <button class="btn" name="signinbtn">Sign In</button>
            </form>
            <a href="SignUp.php" class="blabla" target="_blank">Don't have an Account? </a>
        
        </div>
    
    </body>
    
</html>