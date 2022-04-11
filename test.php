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
                                        <li><a href="shop.php?plants">Aloe Vera</a></li>
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
                            <li ><a href="#" id="pages">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php?all">Shop</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="cart.php">Cart Page</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <li ><a href="contact.php" id="contact">Contact</a></li>
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

<br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
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
#cards {
  background:black;
  color:green;
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

.change-color-block--active {
  margin-left: 0;
  opacity: 1;
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

const backgroundLayer = document.querySelector('body');
const product = document.querySelector('#PopularProducts');
const backgroundheader = document.querySelector('.classy-navbar');
const settingsBtn = document.querySelector('.settings');
const changeColorBlock = document.querySelector('.change-color-block');
const applyBtn = document.querySelector('.apply-btn');
const tooltip = document.querySelector('.tooltip');

var div = document.getElementById('product-description');
settingsBtn.addEventListener('click', function () {
  backgroundLayer.style.background = 'black';
  backgroundheader.style.background = 'black';
  leftnav.style.background = 'black';
  product.style.background = 'black';
  searchbtn.style.background = 'black';
  icons.style.background = 'dimgray';
  icon3.style.background = 'dimgray';
  icon2.style.background = 'dimgray';
  // cards.style.background = 'black';
  // cards.style.color = 'green';
  div.classList.remove('product-description');

  carde.style.background='red';
  searchbtn.style.color = 'green';
  contact.style.color = 'green';
  pages.style.color = 'green';
  aColor.style.color = 'green';
  PopularProducts.style.color = 'green';

})



}
</script>
<?php
require('admin/include/conection.php');
?>
  

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/pexels-photo-2847147.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h2>New Collection</h2>
                        <a href="shop.php?all" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/pl8.jpg);">
                        <div class="catagory-content">
                            <a href="shop.php?plants">PLANTS</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/soil-1.jpg);">
                        <div class="catagory-content">
                            <a href="shop.php?soil">Soils</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/acc-6.jpg);">
                        <div class="catagory-content">
                            <a href="shop.php?equipment">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(https://images.pexels.com/photos/1408221/pexels-photo-1408221.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2 style="color:white;">Global Sale</h2>
                                <a href="shop.php?discount" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2 id="PopularProducts">Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                    <?php
$query="SELECT * FROM plants";
$result=mysqli_query($conn,$query);

while($plants=mysqli_fetch_assoc($result)){
echo " <div class='single-product-wrapper'>";
echo "<div class='product-img'>";
echo "<img src='admin/images/{$plants['plant_img']}'>";
echo "<img class='hover-img' src='admin/images/{$plants['plant_img']}'>";
echo "<div class='product-favourite'>";
echo "<a href='' class='favme fa fa-heart'></a>";
echo " </div></div>";
echo '<div id="cards" class="product-description">';
echo "<a href='single-product-details.php?plantsId={$plants['plants_id']}'>";
echo "<h6>{$plants['plant_name']}</h6>";
echo "</a>";
echo "<p class='product-price'>$ {$plants['price']}</p>";
echo "<div class='hover-content'>";
echo "<div class='add-to-cart-btn'>";
echo "<a href='' class='btn essence-btn'>Add to Cart</a>";
echo " </div>
</div>
</div>
</div>";
}
?>
                                    
                                        
                                   
                               
                           
                       


                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    
    <?php 
    include('header/footer.php');
    ?>