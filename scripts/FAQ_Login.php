<?php
    session_start();

?>


<!DOCKTYPE html>
<html>
    <head>
        <title>FAQ - Robo Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="FAQ_Style.css">
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
            function faqControl(){
                $(".a").hide();
                $(".q").on("click". function(){
                    $(this).next().slideToggle();           
                })
            }
            
            $(document).ready(function(){
                faqControl();
            });
        
        
        </script>
-->
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
                            <form action="header_login.php" method="post">
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
                            <a class="nav-link" href="#" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">Special Offers</a>
                        </li>
                        
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="FAQ.php" style="color: gray; text-transform: uppercase; font-weight: 600">FAQ</a>
                        </li>
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="Contact.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <div class="hero-image">
<!--            <div class="hero-text">-->
                <h1 class="faq" style="color: aqua">f<span>AQ</span></h1>
<!--            </div>-->
        </div>
        
        <br /><br /><br /><br />
        <div class="container">
            <ul>
                <li class="q">How will I place an order?</li>
                <li class="a">First, make sure you are logged in to your account. Then, you can start looking for items you wish to purchase. Use the search box on the top of the website to find items. Then click "add to cart" to add them to your online shopping cart. If you would like to add more than one, enter the quantity you want to purchase and then click the Add to cart button.<br />Once you have all the items you want to purchase in your cart, click the "Checkout" button. Select the address you wish to ship to, along with with the shipping method you want to use (please see our Shipping Policy page for more information). In the second column on this page, select the Payment Method you would like to use. Please note that the billing address you select here must match what is on file with your bank if you are using a credit card. You can edit the address from this page if you need to.<br />Once you have all the shipping and payment information entered, verify that you have read the "Terms & Conditions and Shipping Policy". This will bring you to the final, end-of-the-road-check page - you aren't done yet! Please review the information to make sure it is correct before scrolling to the bottom right of the page and clicking the Place Order button. Once you've hit the Place Order button, your order is locked in our system and its possible we may not be able to change it. You should receive a 7 digit order number. If you do not see the 7 digit order number, you have not placed your order! Please check to see if there was an error processing the order, and fix it.</li><br />
                
                <li class="q">What payment methods do you accept?</li>
                <li class="a"> We accept Payment through BKASH and Cash On Delivery.</li><br />
                
                <li class="q">How much will it cost to ship my order?</li>
                <li class="a">Shipping costs will vary widely depending on what you're ordering and what shipping method you choose. Once you have added all the items you want to your shopping cart, you can click on the Checkout button to see your total shipping cost. It will give you a pretty accurate estimate of the actual shipping charges for available shipping options. In addition to shipping charges, we also charge a BDT 15.00 handling fee on all orders.</li><br />
                
                <li class="q">How can I get my order shipped out today?</li>
                <li class="a">Our same-day shipping guarantee states than an order placed before 10:00am which abides by certain rules will be shipped out that day.<br />If your order does not meet the required criteria, or it is after 10:00am, we can not guarantee that your order will ship that same day. However, all hope is not lost! Please call us as soon as you can with your order number to request your order be expedited, and we will do all we can to make sure it gets processed quickly.</li><br />
                
                <li class="q">Why can I not see the quantity discounts?!?!</li>
                <li class="a">Are you logged in to your TechShopBD account? You have to be logged in to your account to see the quantity discounts, and after that, you need to be on the product page where the quantity discounts are shown.</li><br />
                
                <li class="q">Do you ship to any place?</li>
                <li class="a">We can ship products to any place in Bangladesh where S.A Parabahan or Sundarban Courier service is available.</li>
            </ul>
        </div>
        
        <br /><br /><br /><br /><br /><br />
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
                                <a href="#!">Special Offers</a>
                            </li>
                            <li style="padding-left: 20%; padding-top: 2%">
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

