<?php
    session_start();

//    mysqli_connect("localhost", "root", "") or die("Not Connected");
//    mysqli_select_db("authentication") or die("No DB Found");

    $db = mysqli_connect("localhost", "root", "", "authentication");

//    if(!$db){
//        
//        echo "Not Connected to Server";
//    }
//    
//    if(!mysqli_select_db('$db', 'authentication')){
//        
//        echo "Database Not Selected";
//    }

    if (isset($_POST['signupbtn'])){
        $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $address = mysqli_real_escape_string($db,$_POST['address']);
        $phoneno = mysqli_real_escape_string($db,$_POST['phoneno']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
        
        if($password == $password2){
            $password = md5($password);
            $sql = "INSERT INTO users(full_name, user_name, address, phone_no, email, password) VALUES('$fullname', '$username', '$address', '$phoneno', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: Home.php");
        }
        else{
            $_SESSION['message'] = "The passwords do not match";
        }
    }
?>



<!DOCKTYPE html>
<html>
    <head>
        <title>Sign Up - Robo Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="SignUp_Style.css">
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
                echo "<div class='col-lg-3' id='error_msg'>". $_SESSION['message']."</div>";
                unset($_SESSION['message']);
                }
            ?>
        
        <div class="signup">
            
            <form method="post" action="SignUp.php">
                <h2 style="font-family: 'Source Sans Pro';color: white;font-weight:lighter;font-size: 45px;text-align: center;">Sign Up</h2>
                <input class="input2" type="text" name="fullname" placeholder="Full Name">
                <input class="input2" type="text" name="username" placeholder="User Name">
                <input class="input2" type="text" name="address" placeholder="Address">
                <input class="input2" type="text" name="phoneno" placeholder="Phone No.">
                <input class="input2" type="email" name="email" placeholder="Email">
                <input class="input2" type="password" name="password" placeholder="Password">
                <input class="input2" type="password" name="password2" placeholder="Confirm Password">
                <button class="btn" name="signupbtn">Sign Up</button>
                <p>By clicking on "Sign Up" I acknowledge <br>the Terms & Conditions of roboexpress.com</p>
            </form>
        
        </div>
        
        
    
    </body>
    
</html>