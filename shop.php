<?php
ob_start();
include('header/header.php');
require('admin/include/conection.php');
if (!isset($_SESSION['id'])) {
header("location:signUp.php");
}
$userId=$_SESSION['id'];

?>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <?php
                        if (isset($_GET['soil'])) {
                        echo "<h2>SOIL</h2>";
                        }else  if (isset($_GET['plants'])) {
                            echo "<h2>PLANTS</h2>";
                            }else  if (isset($_GET['equipment'])) {
                                echo "<h2>ACCESSORIES</h2>";
                                }else  if (isset($_GET['medical'])) {
                                    echo "<h2>MEDICAL</h2>";
                                    }else  if (isset($_GET['all'])) {
                                        echo "<h2>ALL PRODUCT</h2>";
                                        }else  if (isset($_GET['discount'])) {
                                            echo "<h2>GLOBAL SALE </h2>";
                                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#">Plants</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="shop.php?plants">Plants</a></li>
                                            <li><a href="shop.php?medical">Medical Plants</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a href="shop.php?soil">Soils</a>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="shop.php?equipment">accessories</a>
                                    </li>
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="shop.php?discount">Discount</a>
                                    </li> 
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="shop.php?all">All Product</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <!-- <div class="widget price mb-50">
                            <h6 class="widget-title mb-30">Filter by</h6>
                            <p class="widget-title2 mb-30">Price</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: $49.00 - $360.00</div>
                                </div>
                            </div>
                        </div> -->

                   

                      
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">

                                        <p><span> 
                            <?php
                                        $countpro=0;
                                   if (isset($_GET['soil'])) {
                                    $query2="SELECT * FROM soil";
                                }else  if (isset($_GET['plants'])) {
                                    $query2="SELECT * FROM plants";
                                        }else  if (isset($_GET['equipment'])) {
                                            $query2="SELECT * FROM equipment";
                                        }else  if (isset($_GET['medical'])) {
                                            $query2="SELECT * FROM medical_plant";
                                                }else  if (isset($_GET['discount'])) {
                                                    $query2="SELECT * FROM discount";
                                                        }else  if (isset($_GET['all'])) {
                                                }
                            $result2=mysqli_query($conn,$query2);
                                while($plants=mysqli_fetch_assoc($result2)){$countpro++ ;}
                            echo $countpro;?>
                            </span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

 
                        <!-- ----------------------------------plants Part -------------------------------------    -->

                        <?php
if(isset($_GET['plants?id'])){
    $query="SELECT * FROM plants WHERE plants_id={$_GET['plants?id']}";
  $result=  mysqli_query($conn,$query);
  $cart=mysqli_fetch_assoc($result);
    $cartName=$cart['plant_name'];
    $description=$cart['description'];
    $price=$cart['price'];
    $cartImg=$cart['plant_img'];
    $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img,user_id)
     VALUES ('$cartName','$description','$price','$cartImg','$userId')";
     mysqli_query($conn,$cartQuery);
     header("location:shop.php?plants");
}

?>
                            <?php
                            if (isset($_GET['plants'])||isset($_GET['all'])) {
                            $query2="SELECT * FROM plants";
                            $result2=mysqli_query($conn,$query2);
                            while($plants=mysqli_fetch_assoc($result2)){
                                echo "<div class='col-12 col-sm-6 col-lg-4'>";
                                echo "<div class='single-product-wrapper'>";
                                echo "<div class='product-img'>";
                                echo "<img src='admin/images/{$plants['plant_img']}'>";
                                echo "<img class='hover-img' src='admin/images/{$plants['img_two']}' alt=''>";
                                echo "<div class='product-favourite'>";
                                echo "<a href='' class='favme fa fa-heart'></a>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='product-description'>";
                                echo "<span><span>{$plants['description']}</span>";
                                echo "<a href='single-product-details.php?plantsId={$plants['plants_id']}'>";
                                echo "<h6>{$plants['plant_name']}</h6>";
                                echo "</a>";
                                echo "<p class='product-price'>$ {$plants['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                echo "<a href='shop.php?plants?id={$plants['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }}
                            ?>
                        <!-- ----------------------------------plants Part -------------------------------------    -->
                     
                        <!-- ----------------------------------Soil Part -------------------------------------    -->


                        <?php
if(isset($_GET['soil?id'])){
    $query="SELECT * FROM soil WHERE soil_id={$_GET['soil?id']}";
  $result=  mysqli_query($conn,$query);
  $cart=mysqli_fetch_assoc($result);
    $cartName=$cart['soil_name'];
    $description=$cart['description'];
    $price=$cart['price'];
    $cartImg=$cart['soil_img'];
    $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img,user_id)
     VALUES ('$cartName','$description','$price','$cartImg','$userId')";
     mysqli_query($conn,$cartQuery);
     header("location:shop.php?soil");

}

?>

                        <?php
                            if (isset($_GET['soil'])||isset($_GET['all'])) {
                            $query2="SELECT * FROM soil";
                            $result2=mysqli_query($conn,$query2);
                            while($soil=mysqli_fetch_assoc($result2)){
                                echo "<div class='col-12 col-sm-6 col-lg-4'>";
                                echo "<div class='single-product-wrapper'>";
                                echo "<div class='product-img'>";
                                echo "<img src='admin/images/{$soil['soil_img']}'>";
                                echo "<img class='hover-img' src='admin/images/{$soil['img_two']}' alt=''>";
                                echo "<div class='product-favourite'>";
                                echo "<a href='' class='favme fa fa-heart'></a>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='product-description'>";
                                echo "<span><span>{$soil['description']}</span>";
                                echo "<a href='single-product-details.php?soilId={$soil['soil_id']}'>";
                                echo "<h6>{$soil['soil_name']}</h6>";
                                echo "</a>";
                                echo "<p class='product-price'>$ {$soil['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                echo "<a href='shop.php?soil?id={$soil['soil_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";

                            }
                        }

                            ?>
                        <!-- ----------------------------------Soil Part -------------------------------------    -->
                        <!-- ----------------------------------equipment Part -------------------------------------    -->
                        <?php
                            if (isset($_GET['equipment'])||isset($_GET['all'])) {
                            $query2="SELECT * FROM equipment";
                            $result2=mysqli_query($conn,$query2);
                            while($equipment=mysqli_fetch_assoc($result2)){
                                echo "<div class='col-12 col-sm-6 col-lg-4'>";
                                echo "<div class='single-product-wrapper'>";
                                echo "<div class='product-img'>";
                                echo "<img src='admin/images/{$equipment['equipment_img']}'>";
                                echo "<img class='hover-img' src='admin/images/{$equipment['img_two']}' alt=''>";
                                echo "<div class='product-favourite'>";
                                echo "<a href='' class='favme fa fa-heart'></a>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='product-description'>";
                                echo "<span><span>{$equipment['description']}</span>";
                                echo "<a href='single-product-details.php?equipmentId={$equipment['equipment_id']}'>";
                                echo "<h6>{$equipment['equipment_name']}</h6>";
                                echo "</a>";
                                echo "<p class='product-price'>$ {$equipment['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                echo "<a href='shop.php?equipment?id={$equipment['equipment_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";

                            }}
                            ?>

<?php
if(isset($_GET['equipment?id'])){
    $query="SELECT * FROM equipment WHERE equipment_id={$_GET['equipment?id']}";
  $result=  mysqli_query($conn,$query);
  $cart=mysqli_fetch_assoc($result);
    $cartName=$cart['equipment_name'];
    $description=$cart['description'];
    $price=$cart['price'];
    $cartImg=$cart['equipment_img'];
    $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img,user_id)
     VALUES ('$cartName','$description','$price','$cartImg','$userId')";
     mysqli_query($conn,$cartQuery);
     header("location:shop.php?equipment");

}

?>
                        <!-- ----------------------------------equipment Part -------------------------------------    -->
                        <!-- ----------------------------------medical Part -------------------------------------    -->

                            
                            <?php
                            if (isset($_GET['medical'])||isset($_GET['all'])) {
                            $query3="SELECT * FROM medical_plant";
                            $result3=mysqli_query($conn,$query3);
                            while($plantsMed=mysqli_fetch_assoc($result3)){
                                echo "<div class='col-12 col-sm-6 col-lg-4'>";
                                echo "<div class='single-product-wrapper'>";
                                echo "<div class='product-img'>";
                                echo "<img src='admin/images/{$plantsMed['plant_img']}'>";
                                echo "<img class='hover-img' src='admin/images/{$plantsMed['plant_img_two']}' alt=''>";
                                echo "<div class='product-favourite'>";
                                echo "<a href='' class='favme fa fa-heart'></a>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='product-description'>";
                                echo "<span><span>{$plantsMed['description']}</span>";
                                echo "<a href='single-product-details.php?medicalId={$plantsMed['plants_id']}'>";
                                echo "<h6>{$plantsMed['plant_name']}</h6>";
                                echo "</a>";
                                echo "<p class='product-price'>$ {$plantsMed['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                echo "<a href='shop.php?id={$plantsMed['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        if(isset($_GET['id'])){
                            $query="SELECT * FROM medical_plant WHERE plants_id={$_GET['id']}";
                            $result=  mysqli_query($conn,$query);
                            $cart=mysqli_fetch_assoc($result);
                              $cartName=$cart['plant_name'];
                              $description=$cart['description'];
                              $price=$cart['price'];
                              $cartImg=$cart['plant_img'];
                              $cartImg=$cart['plant_img_two'];
                              $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img,user_id)
                               VALUES ('$cartName','$description','$price','$cartImg','$userId')";
                               mysqli_query($conn,$cartQuery);
                               header("location:shop.php?medical");
                        }
                            ?>
                           

                        <!-- ----------------------------------medical Part -------------------------------------    -->
                        <!-- ----------------------------------discount Part -------------------------------------    -->
                        <?php
if(isset($_GET['discount?id'])){
    $query="SELECT * FROM discount WHERE id={$_GET['discount?id']}";
  $result=  mysqli_query($conn,$query);
  $cart=mysqli_fetch_assoc($result);
    $cartName=$cart['name'];
    $description=$cart['description'];
    $price=$cart['price'];
    $cartImg=$cart['img'];
    $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img,user_id)
     VALUES ('$cartName','$description','$price','$cartImg','$userId')";
     mysqli_query($conn,$cartQuery);
     header("location:shop.php?discount");

}

?>
                           

                            
                            <?php
                            if (isset($_GET['discount'])) {
                            $query2="SELECT * FROM discount";
                            $result2=mysqli_query($conn,$query2);
                            $count=0;
                            while($product=mysqli_fetch_assoc($result2)){
                                $count++;
                                echo "<div class='col-12 col-sm-6 col-lg-4'>";
                                echo "<div class='single-product-wrapper'>";
                                echo "<div class='product-img'>";
                                echo "<img src='admin/images/{$product['img']}'>";
                                echo "<img class='hover-img' src='admin/images/{$product['imgTwo']}' alt=''>";
                                echo "<div class='product-favourite'>";
                                echo "<a href='' class='favme fa fa-heart'></a>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='product-description'>";
                                echo "<span><span>{$product['description']}</span>";
                                echo "<a href='single-product-details.php?discountId={$product['id']}'>";
                                echo "<h6>{$product['name']}</h6>";
                                echo "</a>";
                                 $num=(int)$product['price'];
                                  $dicount=$num*.4;
                                echo "<p class='product-price'><span class='old-price'>$ {$product['price']}</span>$ $dicount</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                echo "<a href='shop.php?discount?id={$product['id']}' type='submit'r class='btn essence-btn'>Add to Cart</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                if ($count>0) {
                                    break;
                                }
                            }
                        }
                            ?>

                        <!-- ----------------------------------discount Part -------------------------------------    -->
                            
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

  
<?php
include('header/footer.php');
?>






