<?php
ob_start();
if(isset($_GET['black'])){
  include('header/blackHeader.php');
  echo '<br><br><br>';
}
  else{
  include('header/header.php');}require('admin/include/conection.php');
if (!isset($_SESSION['id'])) {
header("location:signUp.php");
}
$userId=$_SESSION['id'];
?>
    <link rel="stylesheet" href="css/cart.css">

<?php
if(isset($_GET['id'])){
    $delQuery="DELETE FROM cart WHERE cart_id={$_GET['id']}";
    mysqli_query($conn,$delQuery);
}
?>


      
      <?php
//     $query="SELECT * FROM cart  WHERE user_id=$userId";
//     $result=mysqli_query($conn,$query);
//     $count=0;
//     while($cart=mysqli_fetch_assoc($result)){
//         echo "<tr class='item-row'>";
//         echo "<td class='cart-item'>";
//         echo "<table>";
//         echo "<tr>";
//         echo "<td><img src='admin/images/{$cart['cart_img']}' width='200px' height='200px' /></td>";
//         echo "<td>";
//         echo "<h5 class='item-name'>{$cart['cart_name']}</h5>";
//         echo "<p><a href='cart.php?id={$cart['cart_id']}'>Remove Item</a></p>";
//         echo "</td>";
//         echo "</tr>";
//         echo "</table>";
//         echo "</td>";
//         echo "<td class='cart-item-price'>";
//         echo "<p>$<span>{$cart['price']}</span></p>";
//         echo "</td>";
//         echo "<td class='cart-item-quantity'>";
//         echo "<input type='number' class='span1' value='1' />";
//         echo "</td>";
//         echo "</tr>";
//         echo "<br>";
//         $count=$count+1;
        
// }
// echo "<caption class='slab-font'>You Have $count items In Your Cart</caption>";
    
?>
  

<br><br><br><br><br><br><br><br><br><br>
<body>
  <div id="w">
    <header id="title">
      <h1>Shopping Cart</h1>
    </header>
    <div id="page">
      <table id="cart">
        <thead>
          <tr>
            <th class="first"> &nbsp;&nbsp;&nbsp;Photo</th>
            <th class="second">Qty</th>
            <th class="third">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Product</th>
            <th class="fourth">Line Total</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
        <?php
    $query="SELECT * FROM cart  WHERE user_id=$userId";
    $result=mysqli_query($conn,$query);
    $total=0;
    while($cart=mysqli_fetch_assoc($result)){
    echo '<tr class="productitm">';
    echo "<td><img src='admin/images/{$cart['cart_img']}' class='thumb' style='width: 100px; height:100px;'></td>";
    echo '<td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>';
    echo "<td>{$cart['cart_name']}</td>";
    echo "<td>$ {$cart['price']}</td>";
    echo "<td><span class='remove'><a href='cart.php?id={$cart['cart_id']}'><img src='https://i.imgur.com/h1ldGRr.png' alt='X'></a></span></td>";
    echo '</tr>';
    $sumValue=$cart['price'];
    $total+=$sumValue;
    }
    ?>
            
          <!-- tax + subtotal -->
          <tr class="extracosts">
            <td class="light">Discount</td>
            <td colspan="2" class="light"></td>
            <td>-15%</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="totalprice">
            <td class="light">Total:</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><span class="thick">$ <?php echo $total*0.85?></span></td>
          </tr>
          
          <!-- checkout btn -->
          <tr class="checkoutrow">
            <td colspan="5" class="checkout"><a href="checkout.php"><button id="submitbtn">Checkout Now!</button></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
<br><br><br><br><br><br><br><br>
<?php
include("header/footer.php");
?>