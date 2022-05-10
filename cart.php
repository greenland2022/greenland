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
    <style>
      @import url(https://fonts.googleapis.com/css?family=Fredoka+One);

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html { overflow-y: scroll; }
body {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 62.5%;
  line-height: 1;
  color: #414141;
  padding: 25px 0;
}

::selection { background: #B6E84A; }
::-moz-selection { background: #B6E84A; }
::-webkit-selection { background: #B6E84A; }

br { display: block; line-height: 1.6em; } 

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; }
em, i { font-style: italic; }

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }

h1 {
  font-family: 'Fredoka One', Helvetica, Tahoma, sans-serif;
  color: #fff;
  text-shadow: 1px 2px 0 #7184d8;
  font-size: 3.5em;
  line-height: 1.1em;
  padding: 6px 0;
  font-weight: normal;
  text-align: center;
}


/* page structure */
#w {
  display: block;
  width: 600px;
  margin: 0 auto;
}

#title {
  display: block;
  width: 100%;
  background: #B6E84A;
  padding: 10px 0;
  -webkit-border-top-right-radius: 6px;
  -webkit-border-top-left-radius: 6px;
  -moz-border-radius-topright: 6px;
  -moz-border-radius-topleft: 6px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
}

#page {
  display: block;
  background: #fff;
  padding: 15px 0;
  -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.4);
  -moz-box-shadow: 0 2px 4px rgba(0,0,0,0.4);
}

/** cart table **/
#cart {
  display: block;
  border-collapse: collapse;
  margin: 0;
  width: 100%;
  font-size: 1.2em;
  color: #444;
}
#cart thead th {
  padding: 8px 0;
  font-weight: bold;
}

#cart thead th.first {
  width: 175px;
}
#cart thead th.second {
  width: 45px;
}
#cart thead th.third {
  width: 230px;
}
#cart thead th.fourth {
  width: 130px;
}
#cart thead th.fifth {
  width: 20px;
}

#cart tbody td {
  text-align: center;
  margin-top: 4px;
}

tr.productitm {
  height: 65px;
  line-height: 65px;
  border-bottom: 1px solid #d7dbe0;
}


#cart tbody td img.thumb {
  vertical-align: bottom;
  border: 1px solid #ddd;
  margin-bottom: 4px;
}

.qtyinput {
  width: 33px;
  height: 22px;
  border: 1px solid #a3b8d3;
  background: #dae4eb;
  color: #616161;
  text-align: center;
}

tr.totalprice, tr.extracosts {
  height: 35px;
  line-height: 35px;
}
tr.extracosts {
  background: #B6E84A;
}

.remove {
  /* http://findicons.com/icon/261449/trash_can?id=397422 */
  cursor: pointer;
  position: relative;
  right: 12px;
  top: 5px;
}


.light {
  color: #888b8d;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.45);
  font-size: 1.1em;
  font-weight: normal;
}
.thick {
  color: #272727;
  font-size: 1.7em;
  font-weight: bold;
}


/** submit btn **/
tr.checkoutrow {
  background: #B6E84A;
  border-top: 1px solid #abc0db;
  border-bottom: 1px solid #abc0db;
}
td.checkout {
  padding: 12px 0;
  padding-top: 20px;
  width: 100%;
  text-align: right;
}


/* https://codepen.io/guvootes/pen/eyDAb */
#submitbtn {
  width: 150px;
  height: 35px;
  outline: none;
  border: none;
  border-radius: 5px;
  margin: 0 0 10px 0;
  font-size: 1.3em;
  letter-spacing: 0.05em;
  font-family: Arial, Tahoma, sans-serif;
  color: #fff;
  text-shadow: 1px 1px 0 rgba(0,0,0,0.2);
  cursor: pointer;
  overflow: hidden;
  border-bottom: 1px solid #B6E84A;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, red), color-stop(100%, red));
  background-image: linear-gradient(#5C2F5A,#5C2F5A);
}
#submitbtn:hover {
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #4d9cff), color-stop(100%, #338eff));
  background-image: linear-gradient(#B6E84A, #B6E84A);
}
#submitbtn:active {
  border-bottom: 0;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #338eff), color-stop(100%, #4d9cff));
  background-image: -webkit-linear-gradient(#338eff, #4d9cff);
  background-image: -moz-linear-gradient(#338eff, #4d9cff);
  background-image: -o-linear-gradient(#338eff, #4d9cff);
  background-image: linear-gradient(#338eff, #4d9cff);
  -webkit-box-shadow: inset 0 1px 3px 1px rgba(0,0,0,0.25);
  -moz-box-shadow: inset 0 1px 3px 1px rgba(0,0,0,0.25);
  box-shadow: inset 0 1px 3px 1px rgba(0,0,0,0.25);
}
footer{
  margin-top: revert;
}
    </style>

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