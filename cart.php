<?php
ob_start();
include('header/header.php');
require('admin/include/conection.php');
if (!isset($_SESSION['id'])) {
header("location:signUp.php");
}
$userId=$_SESSION['id'];
?>
    <link rel="stylesheet" href="css/cart.scss">

<?php
if(isset($_GET['id'])){
    $delQuery="DELETE FROM cart WHERE cart_id={$_GET['id']}";
    mysqli_query($conn,$delQuery);
}
?>


<div class="container">
  <div class="block">
    <div class="span12">
      
<div class="wrapper-no-padding shopping-cart">      
<table class="cart-table">
  <tr class="heading heading-font">
    <th class="cart-item pl">Cart Items</th>
    <th class="cart-item-price">Price</th>
    <th class="cart-item-quantity">Quantity</th>
  </tr>
      
      <?php
    $query="SELECT * FROM cart  WHERE user_id=$userId";
    $result=mysqli_query($conn,$query);
    $count=0;
    while($cart=mysqli_fetch_assoc($result)){
        echo "<tr class='item-row'>";
        echo "<td class='cart-item'>";
        echo "<table>";
        echo "<tr>";
        echo "<td><img src='admin/images/{$cart['cart_img']}' width='200px' height='200px' /></td>";
        echo "<td>";
        echo "<h5 class='item-name'>{$cart['cart_name']}</h5>";
        echo "<p><a href='cart.php?id={$cart['cart_id']}'>Remove Item</a></p>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</td>";
        echo "<td class='cart-item-price'>";
        echo "<p>$<span>{$cart['price']}</span></p>";
        echo "</td>";
        echo "<td class='cart-item-quantity'>";
        echo "<input type='number' class='span1' value='1' />";
        echo "</td>";
        echo "</tr>";
        echo "<br>";
        $count=$count+1;
        
}
echo "<caption class='slab-font'>You Have $count items In Your Cart</caption>";
    
?>
  
    </div>
  </div>
</div>