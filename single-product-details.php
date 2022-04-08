<?php
ob_start();
include('header/header.php');
require('admin/include/conection.php');
session_start();
if (!isset($_SESSION['id'])) {
header("location:signUp.php");
}
?>
<?php
if(isset($_GET['plantsId'])){
    $query="SELECT * FROM plants WHERE plants_id={$_GET['plantsId']}";
}else if (isset($_GET['soilId'])) {
    $query="SELECT * FROM soil WHERE soil_id={$_GET['soilId']}";
}else if (isset($_GET['equipmentId'])) {
    $query="SELECT * FROM equipment WHERE equipment_id={$_GET['equipmentId']}";
}else if (isset($_GET['medicalId'])) {
    $query="SELECT * FROM medical_plant WHERE plants_id={$_GET['medicalId']}";
}else if (isset($_GET['discountId'])) {
    $query="SELECT * FROM discount WHERE id={$_GET['discountId']}";
}
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);

?>
<?php
if(isset($_GET['idAdd'])){
    $query="SELECT * FROM plants WHERE plants_id={$_GET['idAdd']}";
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);
    $cartName=$plant['plant_name'];
    $cartImg=$plant['plant_img'];
}else if(isset($_GET['idAsoil'])){
    $query="SELECT * FROM soil WHERE soil_id={$_GET['idAsoil']}";
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);
    $cartName=$plant['soil_name'];
    $cartImg=$plant['soil_img'];

 }else if(isset($_GET['idAequipment'])){
    $query="SELECT * FROM equipment WHERE equipment_id={$_GET['idAequipment']}";
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);
    $cartName=$plant['equipment_name'];
    $cartImg=$plant['equipment_img'];

 }else if(isset($_GET['idAMedical'])){
    $query="SELECT * FROM medical_plant WHERE plants_id={$_GET['idAMedical']}";
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);
    $cartName=$plant['plant_name'];
    $cartImg=$plant['plant_img'];

 }else if(isset($_GET['idAdiscount'])){
    $query="SELECT * FROM discount WHERE id={$_GET['idAdiscount']}";
    $result=mysqli_query($conn,$query);
    $plant=mysqli_fetch_assoc($result);
    $cartName=$plant['name'];
    $cartImg=$plant['img'];

 }
if(isset($_GET['plantsId'])||isset($_GET['soilId'])||isset($_GET['equipmentId'])||isset($_GET['medicalId'])||isset($_GET['discountId'])){

}else{
    $description=$plant['description'];
    $price=$plant['price'];
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
                    if(isset($_GET['plantsId'])){
                        echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
                    }else if (isset($_GET['soilId'])) {
                        echo "<img src='admin/images/{$plant['soil_img']}' class='cart-thumb'>";
                    }else if (isset($_GET['equipmentId'])) {
                        echo "<img src='admin/images/{$plant['equipment_img']}' class='cart-thumb'>";
                    }else if (isset($_GET['medicalId'])) {
                        echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
                    }else if (isset($_GET['discountId'])) {
                        echo "<img src='admin/images/{$plant['img']}' class='cart-thumb'>";

                    }

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
     if(isset($_GET['plantsId'])){
        echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
    }else if (isset($_GET['soilId'])) {
        echo "<img src='admin/images/{$plant['soil_img']}' class='cart-thumb'>";
    }else if (isset($_GET['equipmentId'])) {
        echo "<img src='admin/images/{$plant['equipment_img']}' class='cart-thumb'>";
    }else if (isset($_GET['medicalId'])) {
        echo "<img src='admin/images/{$plant['plant_img_two']}' class='cart-thumb'>";
    }else if (isset($_GET['discountId'])) {
        echo "<img src='admin/images/{$plant['imgTwo']}' class='cart-thumb'>";

    }
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
if(isset($_GET['plantsId'])){
    echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
}else if (isset($_GET['soilId'])) {
    echo "<img src='admin/images/{$plant['soil_img']}' class='cart-thumb'>";
}else if (isset($_GET['equipmentId'])) {
    echo "<img src='admin/images/{$plant['equipment_img']}' class='cart-thumb'>";
}else if (isset($_GET['medicalId'])) {
    echo "<img src='admin/images/{$plant['plant_img_two']}' class='cart-thumb'>";
}else if (isset($_GET['discountId'])) {
    echo "<img src='admin/images/{$plant['imgTwo']}' class='cart-thumb'>";

}
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
if(isset($_GET['plantsId'])||isset($_GET['idAdd'])){
    echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
    echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
}else if (isset($_GET['soilId'])||isset($_GET['idAsoil'])) {
    echo "<img src='admin/images/{$plant['soil_img']}' class='cart-thumb'>";
    echo "<img src='admin/images/{$plant['soil_img']}' class='cart-thumb'>";
}else if (isset($_GET['equipmentId'])||isset($_GET['idAequipment'])) {
    echo "<img src='admin/images/{$plant['equipment_img']}' class='cart-thumb'>";
    echo "<img src='admin/images/{$plant['equipment_img']}' class='cart-thumb'>";
}else if (isset($_GET['medicalId'])||isset($_GET['idAMedical'])) {
    echo "<img src='admin/images/{$plant['plant_img']}' class='cart-thumb'>";
    echo "<img src='admin/images/{$plant['plant_img_two']}' class='cart-thumb'>";
}else if (isset($_GET['discountId'])||isset($_GET['idAdiscount'])) {
    echo "<img src='admin/images/{$plant['img']}' class='cart-thumb'>";
    echo "<img src='admin/images/{$plant['imgTwo']}' class='cart-thumb'>";

}

?>                

            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <!-- <span>mango</span> -->
            <a href="cart.php">
            <?php 
             if(isset($_GET['plantsId'])||isset($_GET['idAdd'])){
                echo "<h2>{$plant['plant_name']}</h2>"; 
            }else if (isset($_GET['soilId'])||isset($_GET['idAsoil'])) {
                echo "<h2>{$plant['soil_name']}</h2>"; 
            }else if (isset($_GET['equipmentId'])||isset($_GET['idAequipment'])) {
                echo "<h2>{$plant['equipment_name']}</h2>"; 
            }else if (isset($_GET['medicalId'])||isset($_GET['idAMedical'])) {
                echo "<h2>{$plant['plant_name']}</h2>"; 
            }else if (isset($_GET['discountId'])||isset($_GET['idAdiscount'])) {
                echo "<h2>{$plant['name']}</h2>"; 
            
            }
            ?>
            </a>
            <p class="product-price"><span class="old-price"></span><?php echo "{$plant['price']}";?> </p>
            <?php echo "<p class='product-desc'>{$plant['description']}</p>";?>  
            
            <form>

                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <?php 
                        if(isset($_GET['plantsId'])||isset($_GET['idAdd'])){
                            echo "<a href='single-product-details.php?idAdd={$plant['plants_id']}' class='btn essence-btn'>Add To Cart</a>";
                        }else if (isset($_GET['soilId'])||isset($_GET['idAsoil'])) {
                            echo "<a href='single-product-details.php?idAsoil={$plant['soil_id']}' class='btn essence-btn'>Add To Cart</a>";
                        }else if (isset($_GET['equipmentId'])||isset($_GET['idAequipment'])) {
                            echo "<a href='single-product-details.php?idAequipment={$plant['equipment_id']}' class='btn essence-btn'>Add To Cart</a>";
                        }else if (isset($_GET['medicalId'])||isset($_GET['idAMedical'])) {
                            echo "<a href='single-product-details.php?idAMedical={$plant['plants_id']}' class='btn essence-btn'>Add To Cart</a>";
                        }else if (isset($_GET['discountId'])||isset($_GET['idAdiscount'])) {
                            echo "<a href='single-product-details.php?idAdiscount={$plant['id']}' class='btn essence-btn'>Add To Cart</a>";
                        
                        }
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