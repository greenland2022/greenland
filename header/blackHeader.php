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
<style>
    #bottom,#top,#color6{
  background:green;
  color:black;
}
.contactUs{
    height: 430px;
    width: 700px;
    display: flex;
    color: white;
    background-color: black;
    box-shadow: 0px 10px 20px black;
    background-image: radial-gradient(rgb(77, 76, 76), black);
}

#color , #color2 ,#color3,#color13,#color14,#color15,#color16, #color20 ,#color21,#color22,#color23,#color24,#color17,#color18,#color19, #productsfound , .licolor ,h6 ,#licolor 
,#color4 , #color5,.widget .widget-title ,
.bord,#icon5,.classycloseIcon .cross-wrap span.top,#summary,#color9,#color10,#color11,#color12{
    color:green;

}
.widget .catagories-menu .sub-menu li > a 
,#headerSearch ,#classy-menu,.breakpoint-on .dd-trigger,
#shop,#pages,#contact,#icon1,#icon2,#icon3,#icon4,#icon5,
#icon6,#icon7,#icon8,#cards,#cards1,#cards2,#cards3,#cards4,.right-side-cart-area .cart-content .cart-list
,.right-side-cart-area .cart-content .cart-amount-summary ,
#megamenu,.classynav ul li .megamenu .single-mega.cn-col-4 ,
.breakpoint-off .classynav ul li .megamenu,.right-side-cart-area .cart-content .cart-amount-summary .summary-table li,
.checkout_details_area form .nice-select .list{
    background:black;
    color:green;

}
.single-product-wrapper .product-description h6,.checkout_details_area ,.order-details-confirmation{
    color:green;
}
#borde{
    background-color:none}
    .header_area .favourite-area a, .header_area .user-login-info a ,.header_area .cart-area a{
       background: dimgray;
    }
</style>
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

    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300&family=Stalemate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
       <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php">                <h2 class="logo">Greenland</h2>
</a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div id="classy-menu" class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span id="top" class="top"></span><span id="bottom"class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="headPar">
                            <li><a id="shop" href="">Shop</a>
                                <div id="megamenu" class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Plants</li>
                                        <li><a id="icon8" href="shop.php?plantsBlack">plants</a></li>
                                        <li><a id="icon7" href="shop.php?medicalBlack">Medical Plants</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Soils</li>
                                        <li><a id="icon5" href="shop.php?soilBlack">Types</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Accessories</li>
                                        <li><a id="icon6" href="shop.php?equipmentBlack">Bottels</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/pexels-photo-1083822.webp" alt="">
                                    </div>
                                </div>
                            </li>
                            <li ><a href="#" id="pages">Pages</a>
                                <ul class="dropdown">
                                    <li><a id="icon1" href="index.php?id">Home</a></li>
                                    <li><a id="icon2" href="shop.php?allBlack">Shop</a></li>
                                    <li><a id="icon3" href="checkout.php?black">Checkout</a></li>
                                    <li><a id="icon4" href="cart.php?black">Cart Page</a></li>
                                    <li><a id="contact" href="contact.php?black">Contact</a></li>
                                    <li><a id="icon5" href="aboutus.php?black">About Us</a></li>

                                </ul>
                            </li>
                            <li ><a href="contact.php?black" id="contact">Contact</a></li>
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
                        <input type="search" name="keyworde" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="logout.php"><img src="admin/images/icons8-logout-64.png" alt=""></a>
                </div>
                <div class="favourite-area">
                    <a href="index.php"><img src="admin/images/brightness (1).png" alt=""></a>
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
            echo "<img src='admin/images/{$cart['cart_img']}' class='cart-thumb' height='300px' alt=''>";
            echo " <div class='cart-item-desc'  height='300px'>";
            echo " <input type='hidden' name='delete' value='{$cart['cart_id']}'>";
            echo " <span class='product-remove'><button style='	background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;'
            type='submit' name='submit'><i class='fa fa-close' aria-hidden='true'></i></button></span>";
            echo "<span class='badge'>{$cart['description']}</span>";
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

            <h2 id="summary">Summary</h2>
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
            echo "<li id='color9'><span>subtotal:</span> <span>$ $count</span></li>";
            echo "<li id='color10'><span>delivery:</span> <span>Free</span></li>";
            echo "<li id='color11'><span>discount:</span> <span>-15%</span></li>";
            echo "<li id='color12'><span>total:</span> <span>";
            echo $discount;
            echo "</span></li>";
        }
            ?>
                
                
                
            </ul>
            <div class="checkout-btn mt-100">
                <a id="color6" href="checkout.php" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->

<?php
if (isset($_GET['keyworde'])) {
    $keyworde=$conn->escape_string($_GET['keyworde']);
    $query=$conn->query("SELECT plants_id FROM plants WHERE plant_name LIKE '%{$keyworde}%'");
    $querySoil=$conn->query("SELECT soil_id FROM soil WHERE soil_name LIKE '%{$keyworde}%'");
    $queryEquipment=$conn->query(" SELECT equipment_id FROM equipment WHERE equipment_name LIKE '%{$keyworde}%'");
    $queryMedical=$conn->query(" SELECT plants_id FROM medical_plant WHERE plant_name LIKE '%{$keyworde}%'");
    $queryDiscount=$conn->query(" SELECT id FROM discount WHERE name LIKE '%{$keyworde}%'");
    if ($query->num_rows){
        while($row = $query->fetch_object() ){
            header("location:single-product-details.php?plantsIdBlack='$row->plants_id'") ;
        }
        } 
        
        else if ($querySoil->num_rows) {
            while($result=$querySoil->fetch_object()){
                header("location:single-product-details.php?soilIdBlack='$result->soil_id'");
            }
    }
    else if ($queryEquipment->num_rows) {
        while($equResult=$queryEquipment->fetch_object()){
            header("location:single-product-details.php?equipmentIdBlack='$equResult->equipment_id'");
        }
}
else if ($queryMedical->num_rows) {
    while($medResult=$queryMedical->fetch_object()){
        header("location:single-product-details.php?medicalIdBlack='$medResult->plants_id'");
    }
}
else if ($queryDiscount->num_rows) {
    while($discountResult=$queryDiscount->fetch_object()){
        header("location:single-product-details.php?discountIdBlack='$discountResult->id'");
    }
}
        else {
            header("location:error.php?black");
        }
}

?>

  <div class="settings">
    <div class="tooltip">Click Me!!!</div>
  </div>



<style>
    body {
  margin: 0;
  padding: 0;
}

.settings {
  position: absolute;
  top: 50px;
  right: 50px;
  height: 40px;
  width: 40px;
  background: black;
  box-shadow: 0 0 6px rgba(0, 0, 0, .1);
  border-radius: 50%;
  cursor: pointer;
}
.settings:hover .tooltip {
  opacity: 0;
}

.tooltip {
  position: absolute;
  top: 50%;
  left: -150px;
  transform: translateY(-50%);
  background: white;
  padding: 10px 20px;
  border-radius: 6px;
  box-shadow: 0 0 6px rgba(0, 0, 0, .1);
  transition: all .2s linear;
}

.tooltip--disable {
  opacity: 0;
}

.tooltip:before {
  position: absolute;
  top: 50%;
  right: -5px;
  content: '';
  height: 10px;
  width: 10px;
  background: white;
  transform: translateY(-50%) rotate(45deg);
}

.change-color-block {
  margin-left: -150px;
  /* opacity: 0; */
  border: 2px solid black;
  background: white;
  transition: .2s linear;
}


.logo {
  font-family: 'Stalemate', cursive;
      font-size: xx-large;
    color: rgb(14, 177, 14);
    margin-right: 27px;
    margin-bottom: -5px;
    line-height: 1.3;
    font-weight: 700;
}

.logo>a {
    color: rgb(14, 177, 14);
}
</style>

<script>
    window.onload = function () {
const aColor = document.querySelector('.header_area .classynav ul li a');
const pages = document.querySelector('#pages');
const contact = document.querySelector('#contact');
const leftnav = document.querySelector('.header_area .header-meta');
const searchbtn = document.querySelector('.header_area .search-area form input');
const icons = document.querySelector('.header_area .favourite-area a');
const icon2 = document.querySelector(' .header_area .user-login-info a');
const icon3 = document.querySelector('.header_area .cart-area a');
const carde = document.querySelector('#cards');
const headPar = document.querySelector('.megamenu');
const aselect= document.querySelector('.header_area .classynav ul li .megamenu li a');
const pagesList= document.querySelector('.breakpoint-off .classynav ul li .dropdown');
const pagesListcolor= document.querySelector(' .header_area .classynav ul li .dropdown li a');
const pagesListcolor2= document.querySelector(' .header_area .classynav ul li .dropdown li a ');
const productsfound = document.querySelector('.widget .catagories-menu .sub-menu li > a');

const backgroundLayer = document.querySelector('body');
const product = document.querySelector('#PopularProducts');
const backgroundheader = document.querySelector('.classy-navbar');
const settingsBtn = document.querySelector('.settings');
const changeColorBlock = document.querySelector('.change-color-block');
const applyBtn = document.querySelector('.apply-btn');
const tooltip = document.querySelector('.tooltip');

  backgroundLayer.style.background = 'black';
  backgroundheader.style.background = 'black';
  leftnav.style.background = 'black';
  product.style.background = 'black';
  headPar.style.background = 'black';
  aselect.style.background = 'black';
  pagesList.style.background = 'black';
  searchbtn.style.background = 'black';
  icons.style.background = 'dimgray';
  icon3.style.background = 'dimgray';
  icon2.style.background = 'dimgray';
  searchbtn.style.color = 'green';
  contact.style.color = 'green';
  pages.style.color = 'green';
  headPar.style.color = 'green';
  aselect.style.color = 'green';
  aColor.style.color = 'green';
  pagesListcolor.style.color = 'green';
  pagesListcolor2.style.color = 'green';
  PopularProducts.style.color = 'green';
  productsfound.style.color = 'green';


}
</script>
<audio controls autoplay>
  <source src="AR Piano _ Titanium - David Guetta ft. Sia _ Cover By Biano.mp3" type="audio/ogg">
  <source src="AR Piano _ Titanium - David Guetta ft. Sia _ Cover By Biano.mp3" type="audio/mpeg">
</audio>