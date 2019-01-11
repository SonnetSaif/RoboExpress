<?php
session_start();
$developmentboards_ids = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        
        //keep track of how mnay products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);
        
        //create sequantial array for matching array keys to products id's
        $developmentboards_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        if (!in_array(filter_input(INPUT_GET, 'id'), $developmentboards_ids)){
        $_SESSION['shopping_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'title' => filter_input(INPUT_POST, 'title'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($developmentboards_ids); $i++){
                if ($developmentboards_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'title' => filter_input(INPUT_POST, 'title'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $developmentboards){
        if ($developmentboards['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $developmentboards_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    prfloat_r($array);
    echo '</pre>';
}
?>

<!DOCKTYPE html>
<html>
    <head>
        <title>Development Boards - Robo Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="DevelopmentBoards_Style.css">
        <!-- jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js" floategrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" floategrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" floategrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" floategrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" floategrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        
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
                            <img src="logo2.png" alt="Tech Express Logo">
                        </a>
                    </div>
                    <div class="col-lg-5" id="sharebuttons">
                        <h4 style="margin: -1% 0% 0% 40%;">Share On : </h4>
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
                            <a class="nav-link" href="Home.php" style="color: white; text-transform: uppercase; font-weight: 600">Home</a>
<!--                            <hr class="line"/>-->
                        </li>
                        <li class="nav-item" id="items02">
                            <a class="nav-link" href="AboutUs.php" target="_blank" style="color: white; text-transform: uppercase; font-weight: 600">About</a>
                        </li>
                        
                        <li class="nav-item dropdown" id="items02">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; text-transform: uppercase; font-weight: 600" >Categories</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="BurnersProgrammers.php">Burners/Programmers</a>
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
        
        <div class="hero-image">
<!--            <div class="hero-text">-->
                <h1 class="developmentboards_products" style="color: aqua">categories<span> -  DEVELOPMENT BOARDS </span></h1>
<!--            </div>-->
        </div>
        
        <div class="container">
        <br/><br/><br/><br/><br/><br/>
        <?php

        $connect = mysqli_connect('localhost', 'root', '', 'sdproject');
        $query = 'SELECT * FROM developmentboards ORDER by id ASC';
        $result = mysqli_query($connect, $query);

        if ($result):
            if(mysqli_num_rows($result)>0):
                while($developmentboards = mysqli_fetch_assoc($result)):
                //prfloat_r($developmentboards);
                ?>
                <div class="col-sm-4 col-md-3" >
                    <form method="post" action="DevelopmentBoards.php?action=add&id=<?php echo $developmentboards['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $developmentboards['image']; ?>" class="img-responsive" />
                            <h4 class="text-info"><?php echo $developmentboards['title']; ?></h4>
                            <h6> <?php echo $developmentboards['modelno']; ?></h6>
                            <h5 style="color:red">BDT <?php echo $developmentboards['price']; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="title" value="<?php echo $developmentboards['title']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $developmentboards['price']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
                        </div>
                    </form>
                </div>
                <?php
                endwhile;
            endif;
        endif;   
        ?>
        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $developmentboards): 
        ?>  
        <tr>  
           <td><?php echo $developmentboards['title']; ?></td>  
           <td><?php echo $developmentboards['quantity']; ?></td>  
           <td>BDT <?php echo $developmentboards['price']; ?></td>  
           <td>BDT <?php echo number_format((float)$developmentboards['quantity']* (float)$developmentboards['price'], 2); ?></td>  
           <td>
               <a href="DevelopmentBoards.php?action=delete&id=<?php echo $developmentboards['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  (float)$total = $total + ((float)$developmentboards['quantity']* (float)$developmentboards['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">BDT <?php echo number_format((float)$total, 2); ?></td>  
             <td></td>  
        </tr>  
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="Home.php" class="button">Checkout</a>
             <?php session_destroy(); endif; endif; ?>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
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
                        <div class="footer-copyright text-center py-3">&copy; 2018 AUST CSE. All rights reserved | Design by Saiful Islam
                        </div>
                    </div>
                
                
                </div>
            
            </div>
        
        </footer>
        
    </body>
</html>