<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
require('admin/include/conection.php');
?>
<?php
if ($isTouch = isset($_SESSION['id'])) {
    $userIdCart=$_SESSION['id'];
} else{
    $userIdCart="";

}
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
    <link rel="stylesheet" href="css/login.css">
<style>
     .breadcumb_area:after {
    background-color: rgba(255, 255, 255, 0.9);
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -5;
    content: ''; }
</style>
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
                            <li><a href="">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Plants</li>
                                        <li><a href="shop.php?plants">Plants</a>
                                    </li>
                                        <li><a href="shop.php?flowers">Flowers</a></li>
                                        <li><a href="shop.php?medical">Medical Plants</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Soils</li>
                                        <li><a href="shop.php?soil">Types</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Accessories</li>
                                        <li><a href="shop.php?equipment">Bottels</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/pexels-photo-1083822.webp" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php?all">Shop</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="cart.php">Cart Page</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="aboutus.php">About Us</a></li>
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
                <form action="" metho="post">
                        <input type="search" name="keyword" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="logout.php"><img src="admin/images/icons8-logout-64.png" alt=""></a>
                </div>
                <div class="favourite-area">
                    <a href="index.php?id"><img src="admin/images/night-mode.png" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="signUp.php"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span><?php
                    if ($userIdCart!='') {
                            $query2="SELECT * FROM cart WHERE user_id=$userIdCart";
                            $result2=mysqli_query($conn,$query2);
                            $countpro=0;
                            while($plants=mysqli_fetch_assoc($result2)){$countpro++ ;}
                            echo $countpro;}?></span></a>
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
                    if ($userIdCart!='') {
                            $query2="SELECT * FROM cart WHERE user_id=$userIdCart";
                            $result2=mysqli_query($conn,$query2);
                            $countpro=0;
                            while($plants=mysqli_fetch_assoc($result2)){$countpro++ ;}
                            echo $countpro;}?></span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
     

           
            <?php
                    if ($userIdCart!='') {
            $query="SELECT * FROM cart WHERE user_id=$userIdCart";
            $result=mysqli_query($conn,$query);
            while ($cart=mysqli_fetch_assoc($result)) {
            echo "<form action='' method='get'>";
            echo "<div class='single-cart-item'>";
            echo "<div  class='product-image'>";
            echo "<img src='admin/images/{$cart['cart_img']}' class='cart-thumb' height='100%' alt=''>";
            echo " <div class='cart-item-desc'  height='100%'>";
            echo " <input type='hidden' name='delete' value='{$cart['cart_id']}'>";
            echo " <span class='product-remove'><button style='	background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;'
            type='submit' name='submit'><i class='fa fa-close' aria-hidden='true'></i></button></span>";
            echo "<h6>{$cart['cart_name']}</h6>";
            echo "<p class='price'>$ {$cart['price']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</form>";

                if(isset($_GET['submit'])){
                    $deletQuery="DELETE FROM cart WHERE cart_id={$_GET['delete']}";
                    mysqli_query($conn,$deletQuery);

                }
            }}
            ?>

        </div>

      
        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
            <?php
                    if ($userIdCart!='') {
            $query="SELECT * FROM cart WHERE user_id=$userIdCart";
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
        }
            ?>
                
                
                
            </ul>
            <div class="checkout-btn mt-100">
                <a href="checkout.php" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->

<?php
if (isset($_GET['keyword'])) {
    $keyword=$conn->escape_string($_GET['keyword']);
    $query=$conn->query("SELECT plants_id FROM plants WHERE plant_name LIKE '%{$keyword}%'");
    $querySoil=$conn->query("SELECT soil_id FROM soil WHERE soil_name LIKE '%{$keyword}%'");
    $queryEquipment=$conn->query(" SELECT equipment_id FROM equipment WHERE equipment_name LIKE '%{$keyword}%'");
    $queryMedical=$conn->query(" SELECT plants_id FROM medical_plant WHERE plant_name LIKE '%{$keyword}%'");
    $queryDiscount=$conn->query(" SELECT id FROM discount WHERE name LIKE '%{$keyword}%'");
    if ($query->num_rows){
        while($row = $query->fetch_object() ){
            header("location:single-product-details.php?plantsId='$row->plants_id'") ;
    
        }
        } 
        
        else if ($querySoil->num_rows) {
            while($result=$querySoil->fetch_object()){
                header("location:single-product-details.php?soilId='$result->soil_id'");
            }
    }
    else if ($queryEquipment->num_rows) {
        while($equResult=$queryEquipment->fetch_object()){
            header("location:single-product-details.php?equipmentId='$equResult->equipment_id'");
        }
}
else if ($queryMedical->num_rows) {
    while($medResult=$queryMedical->fetch_object()){
        header("location:single-product-details.php?medicalId='$medResult->plants_id'");
    }
}
else if ($queryDiscount->num_rows) {
    while($discountResult=$queryDiscount->fetch_object()){
        header("location:single-product-details.php?discountId='$discountResult->id'");
    }
}
        else {
            header("location:error.php");
        }
}

?>