<?php
ob_start();
if(isset($_GET['plantsBlack'])||isset($_GET['allBlack'])||isset($_GET['soilBlack'])||isset($_GET['equipmentBlack'])||isset($_GET['medicalBlack'])||isset($_GET['discountBlack'])||isset($_GET['flowersBlack'])){
    include('header/blackHeader.php');
echo '<br><br><br>';
}
    else{
    include('header/header.php');
}
    require('admin/include/conection.php');
if (!isset($_SESSION['id'])) {
header("location:signUp.php");
}
$userId=$_SESSION['id'];

?>
    <!-- ##### Breadcumb Area Start ##### -->
    <div  class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg); ">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <?php
                        if (isset($_GET['soil'])||isset($_GET['soilBlack'])) {
                        echo "<h2 class='bord'>SOIL</h2>";
                        }else  if (isset($_GET['plants'])||isset($_GET['plantsBlack'])) {
                            echo "<h2 class='bord'>PLANTS</h2>";
                            }else  if (isset($_GET['equipment'])||isset($_GET['equipmentBlack'])) {
                                echo "<h2 class='bord'>ACCESSORIES</h2>";
                                }else  if (isset($_GET['medical'])||isset($_GET['medicalBlack'])) {
                                    echo "<h2 class='bord'>MEDICAL PLANTS</h2>";
                                    }else  if (isset($_GET['all']) ||isset($_GET['allBlack'])) {
                                        echo "<h2 class='bord'>ALL PRODUCT</h2>";
                                        }else  if (isset($_GET['discount'])||isset($_GET['discountBlack'])) {
                                            echo "<h2 class='bord'>GLOBAL SALE </h2>";
                                            }if (isset($_GET['flowers'])||isset($_GET['flowersBlack'])) {
                                                echo "<h2 class='bord'>FLOWERS </h2>";
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
                            <div id="color5"  class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <?php
if(isset($_GET['plantsBlack'])||isset($_GET['allBlack'])||isset($_GET['soilBlack'])||isset($_GET['equipmentBlack'])||isset($_GET['medicalBlack'])||isset($_GET['discountBlack'])){

                             echo '  <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#" class="licolor">Plants</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li  ><a id="licolor" href="shop.php?plantsBlack">Plants</a></li>
                                            <li><a id="color4" href="shop.php?medicalBlack">Medical Plants</a></li>
                                            <li><a id="color4" href="shop.php?flowersBlack">Flowers</a></li>

                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li class="licolor"  data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a  class="licolor" href="shop.php?soilBlack">Soils</a>
                                    </li>
                                    <!-- Single Item -->
                                    <li  data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a class="licolor" href="shop.php?equipmentBlack">accessories</a>
                                    </li>
                                    <li   data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a class="licolor" href="shop.php?discountBlack">Discount</a>
                                    </li> 
                                    <li   data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a class="licolor" href="shop.php?allBlack">All Product</a>
                                    </li>';
}else{
    echo '  <li data-toggle="collapse" data-target="#clothing">
    <a href="#" class="licolor">Plants</a>
    <ul class="sub-menu collapse show" id="clothing">
        <li  ><a id="licolor" href="shop.php?plants">Plants</a></li>
        <li><a id="color4" href="shop.php?medical">Medical Plants</a></li>
        <li><a id="color4" href="shop.php?flowers">Flowers</a></li>
    </ul>
</li>
<!-- Single Item -->
<li class="licolor"  data-toggle="collapse" data-target="#shoes" class="collapsed">
    <a  class="licolor" href="shop.php?soil">Soils</a>
</li>
<!-- Single Item -->
<li  data-toggle="collapse" data-target="#accessories" class="collapsed">
    <a class="licolor" href="shop.php?equipment">accessories</a>
</li>
<li   data-toggle="collapse" data-target="#accessories" class="collapsed">
    <a class="licolor" href="shop.php?discount">Discount</a>
</li> 
<li   data-toggle="collapse" data-target="#accessories" class="collapsed">
    <a class="licolor" href="shop.php?all">All Product</a>
</li>';
}
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">

                                        <p ><span> 
                            <?php
                                        $countpro=0;
                                   if (isset($_GET['soil'])||isset($_GET['soilBlack'])) {
                                    $query2="SELECT * FROM soil";
                                }else  if (isset($_GET['plants'])||isset($_GET['plantsBlack'])) {
                                    $query2="SELECT * FROM plants";
                                        }else  if (isset($_GET['equipment'])||isset($_GET['equipmentBlack'])) {
                                            $query2="SELECT * FROM equipment";
                                        }else  if (isset($_GET['medical'])||isset($_GET['medicalBlack'])) {
                                            $query2="SELECT * FROM medical_plant";
                                                }else  if (isset($_GET['discount'])||isset($_GET['discountBlack'])) {
                                                    $query2="SELECT * FROM discount";
                                                        }else  if (isset($_GET['flowers'])||isset($_GET['flowersBlack'])) {
                                                            $query2="SELECT * FROM flowers";
                                                                }else  if (isset($_GET['all']) ||isset($_GET['allBlack'])) {
                                                            $countpro="ALL ";
                                                }
                            $result2=mysqli_query($conn,$query2);
                                while($plants=mysqli_fetch_assoc($result2)){$countpro++ ;}
                            echo $countpro;?>
                            </span> <span id="productsfound">products found</span></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">

 
                        <!-- ----------------------------------plants Part -------------------------------------    -->

                        <?php
if(isset($_GET['plants?id'])||isset($_GET['plantsBlack?idBlack'])){
    if(isset($_GET['plantsBlack?idBlack']))
    $query="SELECT * FROM plants WHERE plants_id={$_GET['plantsBlack?idBlack']}";
else
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
    if(isset($_GET['plantsBlack?idBlack']))
     header("location:shop.php?plantsBlack");
     else
     header("location:shop.php?plants");
}

?>
                            <?php
                            if (isset($_GET['plants'])||isset($_GET['plantsBlack'])||isset($_GET['all']) ||isset($_GET['allBlack'])) {
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
                                echo "<div id='cards' class='product-description'>";
                                if (isset($_GET['plantsBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='single-product-details.php?plantsIdBlack={$plants['plants_id']}'>";
                                }else{
                                    echo "<a href='single-product-details.php?plantsId={$plants['plants_id']}'>";

                                }
                                echo "<h6 id='color3'>{$plants['plant_name']}</h6>";
                                echo "</a>";
                                echo "<span><span id='color'>{$plants['description']}</span>";

                                echo "<p class='product-price' id='color2'>$ {$plants['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                if (isset($_GET['plantsBlack'])||isset($_GET['allBlack'])) {
                                echo "<a href='shop.php?plantsBlack?idBlack={$plants['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }else{
                                echo "<a href='shop.php?plants?id={$plants['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }
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
if(isset($_GET['soil?id'])||isset($_GET['soilBlack?idBlack'])){
    if (isset($_GET['soilBlack?idBlack'])) 
    $query="SELECT * FROM soil WHERE soil_id={$_GET['soilBlack?idBlack']}";
else
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
    if (isset($_GET['soilBlack?idBlack'])) 
    header("location:shop.php?soilBlack");
else
     header("location:shop.php?soil");

}

?>

                        <?php
                            if (isset($_GET['soil'])||isset($_GET['soilBlack'])||isset($_GET['all']) ||isset($_GET['allBlack'])) {
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
                                echo "<div id='cards1' class='product-description'>";
                                if (isset($_GET['soilBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='single-product-details.php?soilIdBlack={$soil['soil_id']}'>";
                                }else{
                                echo "<a href='single-product-details.php?soilId={$soil['soil_id']}'>";}
                                echo "<h6 id='color3'>{$soil['soil_name']}</h6>";
                                echo "</a>";
                                echo "<span><span id='color20'>{$soil['description']}</span>";

                                echo "<p id='color16'class='product-price'>$ {$soil['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                if (isset($_GET['soilBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='shop.php?soilBlack?idBlack={$soil['soil_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }else{
                                        echo "<a href='shop.php?soil?id={$soil['soil_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                    }
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
                            if (isset($_GET['equipment'])||isset($_GET['equipmentBlack'])||isset($_GET['all']) ||isset($_GET['allBlack'])) {
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
                                echo "<div id='cards2' class='product-description'>";
                                if (isset($_GET['equipmentBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='single-product-details.php?equipmentIdBlack={$equipment['equipment_id']}'>";
                                }else{
                                echo "<a href='single-product-details.php?equipmentId={$equipment['equipment_id']}'>";}
                                echo "<h6 id='color13'>{$equipment['equipment_name']}</h6>";
                                echo "</a>";
                                echo "<span><span id='color21'>{$equipment['description']}</span>";

                                echo "<p id='color17' class='product-price'>$ {$equipment['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                if (isset($_GET['equipmentBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='shop.php?equipmentBlack?idBlack={$equipment['equipment_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }else{
                                    echo "<a href='shop.php?equipment?id={$equipment['equipment_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";

                            }}
                            ?>

<?php
if(isset($_GET['equipment?id'])||isset($_GET['equipmentBlack?idBlack'])){
    if(isset($_GET['equipmentBlack?idBlack']))
    $query="SELECT * FROM equipment WHERE equipment_id={$_GET['equipmentBlack?idBlack']}";
else
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
    if(isset($_GET['equipmentBlack?idBlack']))
    header("location:shop.php?equipmentBlack");
else
     header("location:shop.php?equipment");

}

?>
                        <!-- ----------------------------------equipment Part -------------------------------------    -->
                        <!-- ----------------------------------medical Part -------------------------------------    -->

                            
                            <?php
                            if (isset($_GET['medical'])||isset($_GET['medicalBlack'])||isset($_GET['all']) ||isset($_GET['allBlack'])) {
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
                                echo "<div id='cards3' class='product-description'>";
                                if (isset($_GET['medicalBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='single-product-details.php?medicalIdBlack={$plantsMed['plants_id']}'>";
                                }else{
                                echo "<a href='single-product-details.php?medicalId={$plantsMed['plants_id']}'>";}
                                echo "<h6 id='color14'>{$plantsMed['plant_name']}</h6>";
                                echo "</a>";
                                echo "<span><span id='color22'>{$plantsMed['description']}</span>";

                                echo "<p id='color18' class='product-price'>$ {$plantsMed['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                if (isset($_GET['medicalBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='shop.php?medicalBlack?idMedBlack={$plantsMed['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }else{
                                    echo "<a href='shop.php?id={$plantsMed['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        if(isset($_GET['id'])||isset($_GET['medicalBlack?idMedBlack'])){
                            if (isset($_GET['medicalBlack?idMedBlack'])) 
                            $query="SELECT * FROM medical_plant WHERE plants_id={$_GET['medicalBlack?idMedBlack']}";
else
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
                            if (isset($_GET['medicalBlack?idMedBlack'])) 
                            header("location:shop.php?medicalBlack");
else
                               header("location:shop.php?medical");
                        }
                            ?>
                           

                        <!-- ----------------------------------medical Part -------------------------------------    -->
                        <!-- ----------------------------------discount Part -------------------------------------    -->
                        <?php
if(isset($_GET['discount?id'])||isset($_GET['discountBlack?idBlack'])){
    if(isset($_GET['discountBlack?idBlack']))
    $query="SELECT * FROM discount WHERE id={$_GET['discountBlack?idBlack']}";
else
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
    if(isset($_GET['discountBlack?idBlack']))
    header("location:shop.php?discountBlack");
else
     header("location:shop.php?discount");

}

?>
                           

                            
                            <?php
                            if (isset($_GET['discount'])||isset($_GET['discountBlack'])) {
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
                                echo "<div id='cards4' class='product-description'>";
                                if (isset($_GET['discountIdBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='single-product-details.php?discountIdBlack={$product['id']}'>";
                                }else{
                                echo "<a href='single-product-details.php?discountId={$product['id']}'>";}
                                echo "<h6 id='color15'>{$product['name']}</h6>";
                                echo "</a>";
                                echo "<span><span id='color23'>{$product['description']}</span>";

                                 $num=(int)$product['price'];
                                  $dicount=$num*.4;
                                echo "<p id='color19' class='product-price'><span class='old-price'>$ {$product['price']}</span>$ $dicount</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                if (isset($_GET['discountBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='shop.php?discountBlack?idBlack={$product['id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }else{
                                    echo "<a href='shop.php?discount?id={$product['id']}' type='submit'r class='btn essence-btn'>Add to Cart</a>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            
                            }
                        }
                            ?>

                        <!-- ----------------------------------discount Part -------------------------------------    -->
                      
                        
                            <!-- ----------------------------------flowers Part -------------------------------------    -->
                            <?php
if(isset($_GET['flowers?id'])||isset($_GET['flowersBlack?idBlack'])){
    if(isset($_GET['flowersBlack?idBlack']))
    $query="SELECT * FROM flowers WHERE id={$_GET['flowersBlack?idBlack']}";
else
    $query="SELECT * FROM flowers WHERE id={$_GET['flowers?id']}";
  $result=  mysqli_query($conn,$query);
  $cart=mysqli_fetch_assoc($result);
    $cartName=$cart['name'];
    $description=$cart['description'];
    $price=$cart['price'];
    $cartImg=$cart['img'];
    $cartQuery="INSERT INTO cart (cart_name,description,price,cart_img,user_id)
     VALUES ('$cartName','$description','$price','$cartImg','$userId')";
     mysqli_query($conn,$cartQuery);
    if(isset($_GET['flowersBlack?idBlack']))
    header("location:shop.php?flowersBlack");
else
     header("location:shop.php?flowers");

}

?>
                           

                            
                            <?php
                            if (isset($_GET['flowers'])||isset($_GET['flowersBlack'])) {
                            $query2="SELECT * FROM flowers";
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
                                echo "<div id='cards4' class='product-description'>";
                                if (isset($_GET['flowersIdBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='single-product-details.php?flowersIdBlack={$product['id']}'>";
                                }else{
                                echo "<a href='single-product-details.php?flowersId={$product['id']}'>";}
                                echo "<h6 id='color15'>{$product['name']}</h6>";
                                echo "</a>";
                                echo "<span><span id='color23'>{$product['description']}</span>";

                                echo "<p id='color19' class='product-price'>$ {$product['price']}</p>";
                                echo "<div class='hover-content'>";
                                echo "<div class='add-to-cart-btn'>";
                                if (isset($_GET['flowersBlack'])||isset($_GET['allBlack'])) {
                                    echo "<a href='shop.php?flowersBlack?idBlack={$product['id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
                                }else{
                                    echo "<a href='shop.php?flowers?id={$product['id']}' type='submit'r class='btn essence-btn'>Add to Cart</a>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            
                            }
                        }
                            ?>

                        <!-- ----------------------------------flowers Part -------------------------------------    -->
                      

                        </div>
                    </div>
                    <!-- Pagination -->
                  
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

  
<?php
include('header/footer.php');
?>






