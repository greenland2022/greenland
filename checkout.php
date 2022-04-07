<?php
include('header/header.php');
require('admin/include/conection.php');
?>
  
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" value="" required>
                                </div>
                           
                                <div class="col-12 mb-3">
                                    <label for="country">City <span>*</span></label>
                                    <select name="city" class="w-100" id="country">
                                        <option value="Amman">Amman</option>
                                        <option value="zarqa">Az zarqa</option>
                                        <option value="Aqapa">Aqapa</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Jarash">Jarash</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Maan">Maan</option>
                                        <option value="Almafraq">Almafraq</option>
                                        <option value="Alkarak">Alkarak</option>
                                        <option value="Altafilla">Altafilla</option>
                                        <option value="Jarash">Jarash</option>
                                        <option value="Albalqa">Albalqa</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Address <span>*</span></label>
                                    <input name="address" type="text" class="form-control mb-3" id="street_address" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">Postcode <span>*</span></label>
                                    <input name="postcode" type="text" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input name="phone_number" type="number" class="form-control" id="phone_number" min="0" value="">
                                </div>
                              
                            </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Product</span> <span>Total</span></li>
                            <?php
                            $query="SELECT * FROM cart";
                            $result=mysqli_query($conn,$query);
                            $total=0;
                            while($cart=mysqli_fetch_assoc($result)){
                                echo "<li><span>{$cart['cart_name']}</span> <span>$ {$cart['price']}</span></li>";
                                $total+=(int)$cart['price'];
                            }
                            ?>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <?php
                            echo "<li><span>Total</span> <span>$ $total</span></li>";
                            ?>
                            
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>cash on delievery</a>
                                    </h6>
                                </div>
                              
                            </div>

                        </div>

                        <button type="submit" name="submit" class="btn essence-btn">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    
    <?php
      $queryTest="SELECT * FROM cart";
      $resultTest=mysqli_query($conn,$queryTest);
      $cartTest=mysqli_fetch_assoc($resultTest)
    ?>
<?php
if (isset($_POST['submit'])) {
    if ($cartTest) {
    $query2="SELECT * FROM cart";
    $result2=mysqli_query($conn,$query2);
    $price=array();
    $cartName=array();
    while ($cartPro=mysqli_fetch_assoc($result2)) {
        array_push($price, $cartPro['price']);
        array_push($cartName, $cartPro['cart_name']);

    }
    $ordersName= implode(" ", $cartName);
    $ordersprice= implode(" ", $price);
    $firstName=$_POST['first_name'];
    $lastName=$_POST['last_name'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $postcode=$_POST['postcode'];
    $phoneNumber=$_POST['phone_number'];
    $queryIns="INSERT INTO checkout (first_name,last_name,city,address,postcode,phone_number,cart_price,orders_name) VALUES
    ('$firstName','$lastName','$city','$address','$postcode','$phoneNumber','$ordersprice','$ordersName')";
    mysqli_query($conn,$queryIns);
    $deleteQuery="DELETE FROM cart";
    mysqli_query($conn,$deleteQuery);
    header("location:success.php");
}

}
?>
    <!-- ##### Checkout Area End ##### -->
  
    <?php
    // $query="SELECT * FROM checkout";
    // $query2="SELECT cart_name FROM cart INNER JOIN checkout ON cart.cart_id=checkout.cart_id";
    // $result=mysqli_query($conn,$query);
    // $result2=mysqli_query($conn,$query2);
    // while ($checkout=mysqli_fetch_assoc($result)) {
    // $cart=mysqli_fetch_assoc($result2);
    //     echo $checkout['first_name'];
    //     echo "{$cart['cart_name']} .vvvvvvvvvvvvvvvvvvvv";
    // }
    ?>
    <?php
    // $queryCa="SELECT * FROM cart WHERE cart_id={$checkout['cart_id']}";
    // $query2="SELECT * FROM cart";
    // $resultCa=mysqli_query($conn,$queryCa);
    // $result2=mysqli_query($conn,$query2);
    // $price=array();
    // $cartName=array();
    // while ($cartPro=mysqli_fetch_assoc($result2)) {
        // $price=$price+"."+$cartPro['cart_name'];
        // if($checkout['cart_name']!=$cartId['cart_name']){
            // echo $checkout['cart_name'];
        // }
    // }
    ?>

    <?php
include('header/footer.php');
?>