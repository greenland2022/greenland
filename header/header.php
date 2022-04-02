<!DOCTYPE html>
<html lang="en">
<?php
require('admin/include/conection.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Green Land</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/bg-img/628283.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/bg-img/logo.jpeg" width="100px" height="100px" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="shop.php">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Plants</li>
                                        <li><a href="shop.php">Aloe Vera</a></li>
                                        <li><a href="shop.php">Flowers</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Soils</li>
                                        <li><a href="shopSoil.php">Types</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Accessories</li>
                                        <li><a href="shopEquipment.php">Bottels</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/pexels-photo-1083822.webp" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="single-product-details.php">Product Details</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="cart.php">Cart Page</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="signUp.php"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span><?php
                            $query2="SELECT * FROM cart";
                            $result2=mysqli_query($conn,$query2);
                            $countpro=0;
                            while($plants=mysqli_fetch_assoc($result2)){$countpro++ ;}
                            echo $countpro;?></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
  <!-- ##### Right Side Cart Area ##### -->
  <div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span><?php
                            $query2="SELECT * FROM cart";
                            $result2=mysqli_query($conn,$query2);
                            $countpro=0;
                            while($plants=mysqli_fetch_assoc($result2)){$countpro++ ;}
                            echo $countpro;?></span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
     

           
            <?php
            $query="SELECT * FROM cart";
            $result=mysqli_query($conn,$query);
            while ($cart=mysqli_fetch_assoc($result)) {
            echo "<div class='single-cart-item'>";
            echo "<a href='#' class='product-image'>";
            echo "<img src='admin/images/{$cart['cart_img']}' class='cart-thumb' height='300px' alt=''>";
            echo " <div class='cart-item-desc'  height='300px'>";
            echo "<span class='product-remove'><i class='fa fa-close' aria-hidden='true'></i></span>";
            echo "<span class='badge'>{$cart['description']}</span>";
            echo "<h6>{$cart['cart_name']}</h6>";
            echo "<p class='price'>$ {$cart['price']}</p>";
            echo "</div>";
            echo "</a>";
            echo "</div>";

            }
            ?>

        </div>

      
        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
            <?php
            $query="SELECT * FROM cart";
            $result=mysqli_query($conn,$query);
            $count=0;
            while ($cart=mysqli_fetch_assoc($result)) {
                $num=(int)$cart['price'];
                $count+=(int)$num;
            }
            $discount=$count*0.85;
            echo "<li><span>subtotal:</span> <span>$ $count</span></li>";
            echo "<li><span>delivery:</span> <span>Free</span></li>";
            echo "<li><span>discount:</span> <span>-15%</span></li>";
            echo "<li><span>total:</span> <span>";
            echo $discount;
            echo "</span></li>";
            ?>
                
                
                
            </ul>
            <div class="checkout-btn mt-100">
                <a href="checkout.php" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->