<?php
    
    $db = mysqli_connect("localhost", "root", "", "authentication");

//    mysqli_connect("localhost", "root", "")or die("Not Connected");
//    mysqli_select_db("authentication")or die("No DB Found");
    
    
    if(isset($_POST['submitbtn'])){
        
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $subject = mysqli_real_escape_string($db,$_POST['subject']);
        $message = mysqli_real_escape_string($db,$_POST['message']);
        
        $sql = "INSERT INTO contactform(name, email, subject, message) VALUES('$name', '$email', '$subject','$message')";
        mysqli_query($db, $sql);
        header("location: Contact.php");
    }
    
?>



<!DOCKTYPE html>
<html>
    <head>
        <title>Contact - Robo Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Contact_Style.css">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    </head>
    
    
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark " style="background-color: black" id="firstnav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="firstul">
                <li class="nav-item" id="items01">
                    <a href="SignIn.php" target="_blank" class="nav-link" style="color: aqua">Sign In</a>
                </li>
                <li class="nav-item" id="items01">
                    <a href="SignUp.php" target="_blank" class="nav-link" style="color: aqua">Sign Up</a>
                </li>
                <li class="nav-item" id="items01">
                    <div class="nav-link" style="color: aqua">Hotline : +0123456789</div>
                </li>
                <li class="nav-item" id="items01">
                    <div class="nav-link" style="color: aqua">Mail : info@example.com</div>
                </li>
                
                <li class="nav-item active" id="items01">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                        <div class="dropdown-menu">
                            <form action="includes/header_login.php" method="post">
<!--                            <a class="dropdown-item" type="submit" name="logout" href="#">Log Out</a>-->
                            <input class="dropdown-item" type="submit" name="logout" href="Logout.php" value="Log Out">
                        </form>
                      </div>
                    </div>
                  </li>
<!--
                <li class="nav-item" id="items01">
                    <a href="Cart.html" target="_blank" title="Cart"><i class="fas fa-shopping-cart" style="color: aqua; font-size: 170%; padding-top: 65%;"></i></a>   
                </li>
-->
            </ul>
            </div>

        </nav>
        
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3" id="searchbox">
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-lg-4" id="logo">
                        <a href="Home.php">
                            <img src="logo2.png" alt="Robo Express Logo">
                        </a>
                    </div>
                    <div class="col-lg-5" id="sharebuttons">
                        <h4 style="margin: -1% 0% 0% 38%;">Share On : </h4>
                        <div class="icons">
                        <a href="#" class="fa fa-facebook"></a>
<!--                            <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FRoarInBangla%2F&layout=button&size=large&mobile_iframe=true&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>-->
                        <a href="#" class="fa fa-twitter"></a>
<!--                            <a href="https://twitter.com/RoarBangla?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @RoarBangla</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-google"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            <br />
            <nav class="navbar navbar-expand-sm navbar-dark " style="background-color: black" id="secondnav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav" id="secondul">
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="Home.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">Home</a>
                        </li>
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="AboutUs.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">About</a>
                        </li>
                        
                        <li class="nav-item dropdown" id="items02">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; text-transform: uppercase; font-weight: 600" >Categories</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="BurnersProgrammers.php">Burners/Programmers</a>
                                <a class="dropdown-item" href="DevelopmentBoards.php">Development Boards</a>
                                <a class="dropdown-item" href="Arduino.php">Arduino</a>
                                <a class="dropdown-item" href="FPGA.php">FPGA</a>
                                <a class="dropdown-item" href="Robotics.php">Robotics</a>
                                <a class="dropdown-item" href="Microcontrollers.php">Micro Controllers</a>
                                <a class="dropdown-item" href="Sensors.php">Sensors</a>
                                
                            </div>
                        </li>

                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="SpecialOffers.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">Special Offers</a>
                        </li>
                    
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="FAQ.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">FAQ</a>
                        </li>
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="Contact.php" style="text-transform: uppercase; font-weight: 600">Contact Us</a>
                        </li>
<!--
                        <li class="nav-item" id="items02">
                    <a href="Cart.html" target="_blank" title="Cart"><i class="fas fa-shopping-cart" style="color: aqua; font-size: 170%; padding-top: 65%;"></i></a>   
                </li>
-->
                    </ul>
                </div>
            </nav>
        <div class="hero-image">
<!--            <div class="hero-text">-->
                <h1 class="contactus" style="color: aqua">contact<span> US</span></h1>
<!--            </div>-->
        </div>
        <br /><br /><br /><br /><br /><br />
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d263.6760576595886!2d90.40680090611552!3d23.76376826575103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah+University+of+Science+and+Technology!5e0!3m2!1sen!2sbd!4v1530878249752" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="formoreInfo">for more<span> INFORMATION</span></h3>
                    <h5 style="color:aqua;letter-spacing: 2px;font-weight: bold;padding-left: 38%;padding-top: 5%">TELEPHONE</h5>
                    <p style="padding-left: 38%; color:grey">+1 (100)222-23-33</p>
                    
                    <h5 style="color:aqua;letter-spacing: 2px;font-weight: bold;padding-left: 38%;padding-top: 5%">MAIL</h5>
                    <a href="#" style="padding-left: 38%; color:grey">info@example.com</a>
                    <br /><br/>
                    <h5 style="color:aqua;letter-spacing: 2px;font-weight: bold;padding-left: 38%;padding-top: 5%">LOCATION</h5>
                    <p style="padding-left: 38%; color:grey">141 & 142, Love Road,<br/> Tejgaon Industrial Area, Dhaka-1208.</p>
                </div>
                <div class="col-lg-6">
                    <h3 style="padding-right: 30%" class="contactform">contact<span> FORM</span></h3>
                    <br />
                    <form style="padding-left: 20%" action="Contact.php" method="post">
                        <div class="name_input">
                            <label style="color:black; font-weight: bold; font-size: 16px; letter-spacing: 1px">Name</label><br/>
                            <input type="text" name="name">
                            <span></span>
                        </div>
                        <div class="email_input" style="padding-top: 5%">
                            <label style="color:black; font-weight: bold; font-size: 16px; letter-spacing: 1px">Email</label><br/>
                            <input type="text" name="email" required>
                            <span></span>
                        </div>
                        <div class="subject_input" style="padding-top: 5%">
                            <label style="color:black; font-weight: bold; font-size: 16px; letter-spacing: 1px">Subject</label><br/>
                            <input type="text" name="subject" required>
                            <span></span>
                        </div>
                        <div class="message_input" style="padding-top: 5%">
                            <label style="color:black; font-weight: bold; font-size: 16px; letter-spacing: 1px">Message</label><br/>
                            <textarea name="message" required></textarea>    
                            <span></span>
                        </div>
                        <input type="submit" name="submitbtn" value="SUBMIT" >
                    </form>
                </div>
            </div>
        </div>
        
        <br /><br /><br /><br /><br />
        <footer class="page-footer font-small pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 style="text-transform: uppercase; font-weight: 700">Robo Express</h4>
                        <br />
                        <p>Fastest and Easiest Online Tech Shopping</p>
                        <br /><br />
                        <ul class="list-unstyled list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-fb mx-1">
                                    <i class="fa fa-facebook"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-tw mx-1">
                                    <i class="fa fa-twitter"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-gplus mx-1">
                                    <i class="fa fa-google"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-li mx-1">
                                    <i class="fa fa-linkedin"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="ourInfo">our<span> INFORMATION</span></h4>
                        <ul class="list-unstyled">
                            <li target="_blank" style="padding-left: 20%; padding-top: 2%">
                                <a href="Home.php">Home</a>
                            </li>
                            <li target="_blank" style="padding-left: 20%; padding-top: 2%">
                                <a href="AboutUs.php">About</a>
                            </li>
                    
                            <li target="_blank" style="padding-left: 20%; padding-top: 2%">
                                <a href="SpecialOffers.php">Special Offers</a>
                            </li>
                            
                            <li target="_blank" style="padding-left: 20%; padding-top: 2%">
                                <a href="FAQ.php">FAQ</a>
                            </li>
                            <li style="padding-left: 20%; padding-top: 2%">
                                <a href="Contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="storeInfo">Store<span> INFORMATION</span></h4>
                        <p>
                            <i class="fa fa-home mr-3"></i> 141 & 142, Love Road, Tejgaon Industrial Area, Dhaka-1208.</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 0123456789</p>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-lg-6">
                        <h4 style="text-transform: uppercase; font-weight: 800">sign up for newsletter</h4>
                    </div>
                    <div class="col-lg-6">
                        <form class="input-group">
                        <input style="box-sizing: border-box; padding-bottom: 2%; padding-top: 2%" type="text" class="form-control form-control-sm" placeholder="Enter your email..." aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">SIGN UP</button>
                        </div>
                        </form>
                    </div>
                </div>
                <br/><br/>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright text-center py-3">&copy; 2018 AUST CSE. All rights reserved | Developed by Saiful Islam
                        </div>
                    </div>
                
                
                </div>
            
            </div>
        
        </footer>
        
    </body>
</html>