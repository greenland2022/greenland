<?php
include('header/header.php');
ob_start();
require('admin/include/conection.php');
?>
<?php
if(isset($_GET['id'])){
    $query="SELECT * FROM plants WHERE plants_id={$_GET['id']}";
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);
}else if(isset($_GET['idAdd'])){
    $queryCart="SELECT * FROM plants WHERE plants_id={$_GET['idAdd']}";
  $resultCart=  mysqli_query($conn,$queryCart);
  $plant=mysqli_fetch_assoc($resultCart);
    $cartName=$plant['plant_name'];
    $description=$plant['description'];
    $price=$plant['price'];
    $cartImg=$plant['plant_img'];
    $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img)
     VALUES ('$cartName','$description','$price','$cartImg')";
     mysqli_query($conn,$cartQuery);
}
?>

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                    <?php
echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";

?>
                        
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                    <?php
echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";

?>                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
   
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                    <?php
echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";

?>                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.php" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
            <?php
echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";

?>                

            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <!-- <span>mango</span> -->
            <a href="cart.php">
            <?php echo "<h2>{$plant['plant_name']}</h2>";?>  
            </a>
            <p class="product-price"><span class="old-price"></span><?php echo "{$plant['price']}";?> </p>
            <?php echo "<p class='product-desc'>{$plant['description']}</p>";?>  
            
            <form>

                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <?php 
                               echo "<a href='single-product-details.php?idAdd={$plant['plants_id']}' class='btn essence-btn'>Add To Cart</a>";
?>
                    <!-- <button type="submit"  class="btn essence-btn">Add to cart</button> -->
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <?php
include('header/footer.php');
?>