<?php
    session_start();
?>


<!DOCKTYPE html>
<html>
    <head>
        <title>Home - Robo Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Home_Style.css">
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


<!--
        <script>

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > -1 ||                             document.documentElement.scrollTop > -1) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            };

            function cartFunction() {
                document.getElementById("myBtn").onclick = function () {
                location.href = "Contact.php";
            };
}       </script>
-->

    </head>


    <body>
<!--        <button onclick="cartFunction()" id="myBtn" title="Go to Cart">Cart</button>-->
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
                            <form action="Home_Login.php" method="post">
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
                            <a class="nav-link" href="Home.php" style="color: gray; text-transform: uppercase; font-weight: 600">Home</a>
<!--                            <hr class="line"/>-->
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
                            <a class="nav-link" href="Contact.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>

<!--
        <div class="contaier-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div id="my-slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#my-slider" data-slide-to="1"></li>
                        <li data-target="#my-slider" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" >
                            <img class="d-block w-100" src="SH.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="S.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="NT.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#my-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

-->
        <div class="container">
            <h1 class="whyre">why<span> ROBO EXPRESS</span></h1>
        </div>
<!--        <div class="container">-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-top:10%; margin-left: 18%">
                    <i class="fas fa-truck fa-10x"></i>
                </div>
                <div class="col-lg-4" style="margin-top:11%; padding-right:1%; margin-left:5%">
                    <div class="box01">
                        <p style="font-weight:bold; font-size:24px; font-family: 'Source Sans Pro', sans-serif; ">Product Delivery All Over Country.Fastest Home Delivery Inside Dhaka.</p>
                    </div>
                </div>
            </div>
        </div>

        <br /> <br /> <br /> <br /> <br />
        <div class="container">
            <div class="row">

                <div class="col-lg-4" style="padding-right:1%; margin-left:15%; margin-top:5%; padding-left: 4%">
                    <div class="box02">
                        <p style="font-weight:bold; font-size:24px; font-family: 'Source Sans Pro', sans-serif;">Customer Suppot Helpline</p>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-left:15%">
                    <i class="fas fa-headset fa-10x"></i>
                </div>
            </div>
        </div>

        <br /> <br /> <br /> <br /> <br />
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-left:18%">
                    <i class="far fa-thumbs-up fa-10x"></i>
                </div>
                <div class="col-lg-4" style="padding-right:1%; margin-left:5%; margin-top:5%">
                    <div class="box03">
                        <p style="font-weight:bold; font-size:24px; font-family: 'Source Sans Pro', sans-serif;">Original Products With Brand Warranty Guaranteed</p>
                    </div>
                </div>
            </div>
        </div>

        <br /> <br /> <br /> <br /> <br />
        <div class="container">
            <div class="row">

                <div class="col-lg-4" style="padding-right:1%; margin-left:15%; margin-top:5%; padding-left: 4%">
                    <div class="box04">
                        <p style="font-weight:bold; font-size:24px; font-family: 'Source Sans Pro', sans-serif;">User-Friendly Interface and Easy Navigation</p>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-left:18%">
                    <i class="fas fa-users fa-10x"></i>
                </div>

            </div>
        </div>

        <br /> <br />
        <div class="container" >
            <h1 class="featPro">Featured<span> PRODUCTS</span></h1>
        </div>
        <br /><br /><br />
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd.JPG" alt="4x4 Keypad Matrix (White Button)">
                    <div class="card-body">
                        <h5 class="card-title">4x4 Keypad Matrix (White Button)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT288.00</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : MOD-00076</span><br />4x4 keypad matrix with all the numbers, rows and coulums marked clearly. This one features white buttons. Also available in Red, Yellow and Green colours. </p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd1.jpg" alt="Walking Robot Kit With Servo">
                    <div class="card-body">
                        <h5 class="card-title">Walking Robot Kit With Servo</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT13506.12</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : ROB-00251</span><br />This is a 13DOF humanoid robot. This is fully ready for walking and package including full set of servos and all other accessories.</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd2.jpg" alt="RoboDuino Uno">
                    <div class="card-body">
                        <h5 class="card-title">RoboDuino Uno</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT1300.09</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : ROB-00202</span><br />An arduino compatible, all in one robot controller</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd3.jpg" alt="Nueva Universal IR Remote Controller for Android">
                    <div class="card-body">
                        <h5 class="card-title">Nueva Universal IR Remote Controller for Android</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT801.69</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : SEN-000129</span><br />Wireless Infrared Remote Controller.</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container" >
            <h1 class="bestPro">Best Selling<span> PRODUCTS</span></h1>
        </div>
        <br /><br /><br />
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd4.jpg" alt="Arduino Uno R3 (China)">
                    <div class="card-body">
                        <h5 class="card-title">Arduino Uno R3 (China)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT490.53</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : ARD-00028</span><br />The Arduino Uno is a microcontroller board based on the ATmega328.</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd5.png" alt="Bluetooth Module Breakout (HC-05)">
                    <div class="card-body">
                        <h5 class="card-title">Bluetooth Module Breakout (HC-05)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT195.98</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : WIR-00013</span><br />Serial port bluetooth module</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd6.jpg" alt="DHT11 Temperature and Humidity Sensor Module">
                    <div class="card-body">
                        <h5 class="card-title">DHT11 Temperature and Humidity Sensor Module</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT158.15</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : SEN-00182</span><br />This sensor can detect temperature and humidity simultaneously without any extra resistor and capacitor. Just need an Arduino.</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd7.jpg" alt="LCD Display (16X2)">
                    <div class="card-body">
                        <h5 class="card-title">LCD Display (16X2)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT160.61</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : DIS-00003</span><br />This is an LCD Display which can show 16 characters in each of 2 rows.</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container" >
            <h1 class="ltstPro">Latest<span> PRODUCTS</span></h1>
        </div>
        <br /><br /><br />
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd8.jpg" alt="Advanced Stepper Motor Driver">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Stepper Motor Driver</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT495.36</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : ROB-00348</span><br />A3967 based easy to use advanced bipolar stepper motor driver</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd9.jpg" alt="ESP8266 WiFi 4 Channel IoT Smart Switch">
                    <div class="card-body">
                        <h5 class="card-title">ESP8266 WiFi 4 Channel IoT Smart Switch</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT1172.82</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : WIR-00081</span><br />ESP8266 WiFi 4 Channel IoT Smart Switch</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd10.jpg" alt="ESP8266 NodeMCU IoT Relay Module">
                    <div class="card-body">
                        <h5 class="card-title">ESP8266 NodeMCU IoT Relay Module</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT497.30</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : WIR-00080</span><br />ESP8266 NodeMCU IoT Relay Module</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card" style="">
                    <img class="card-img-top" src="sd11.jpg" alt="IR Receiver Module 38Khz">
                    <div class="card-body">
                        <h5 class="card-title">IR Receiver Module 38Khz</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT119.99</h6>
                        <p class="card-text"><span style="color: #B600FF">Model : MOD-00161</span><br />IR Receiver Module 38Khz</p>
<!--                        <a href="#" class="btn btn-primary">Add to Cart</a>-->
                    </div>
                </div>
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
                        <br />
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
                            <li target="_blank" style="padding-left: 20%; padding-top: 2%">
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
