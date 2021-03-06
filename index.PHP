<?php
if(isset($_GET['id'])){
include('header/blackHeader.php');}
else{
include('header/header.php');}

require('admin/include/conection.php');
?>
  

     <!-- ##### Welcome Area Start ##### -->
     <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/pexels-photo-2847147.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h2>New Collection</h2>
                        <?php
                        if(isset($_GET['id'])){echo "<a href='shop.php?allBlack' class='btn essence-btn'>view collection</a>";}else{echo "<a href='shop.php?all' class='btn essence-btn'>view collection</a>";}?>
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
                            <?php
                        if(isset($_GET['id'])){echo "<a href='shop.php?plantsBlack'>PLANTS</a>";}else{echo "<a href='shop.php?plants'>PLANTS</a>";}?>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/soil-1.jpg);">
                        <div class="catagory-content">
                            <?php
                        if(isset($_GET['id'])){echo "<a href='shop.php?soilBlack'>Soils</a>";}else{echo "<a href='shop.php?soil'>Soils</a>";}?>
                      
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/acc-6.jpg);">
                        <div class="catagory-content">
                            <?php
                        if(isset($_GET['id'])){echo "<a href='shop.php?equipmentBlack'>Accessories</a>";}else{echo "<a href='shop.php?equipment'>Accessories</a>";}?>
                      
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
                                <?php
                        if(isset($_GET['id'])){echo "<a href='shop.php?discountBlack' class='btn essence-btn' >Buy Now</a>";}else{echo "<a href='shop.php?discount' class='btn essence-btn'> Buy Now</a>";}?>
                      
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
$query="SELECT * FROM flowers";
$result=mysqli_query($conn,$query);

while($flowers=mysqli_fetch_assoc($result)){
echo " <div class='single-product-wrapper'>";
echo "<div class='product-img'>";
echo "<img src='admin/images/{$flowers['img']}'>";
echo "<img class='hover-img' src='admin/images/{$flowers['imgTwo']}'>";
echo "<div class='product-favourite'>";
echo "<a href='' class='favme fa fa-heart'></a>";
echo " </div></div>";
echo '<div id="cards" class="product-description">';
if(isset($_GET['id'])){echo "<a href='single-product-details.php?flowersIdBlack={$flowers['id']}'>";}else{echo "<a href='single-product-details.php?flowersId={$flowers['id']}'>";}

echo "<h6 id='color'>{$flowers['name']}</h6>";
echo "</a>";
echo "<p id='color20' class='product-price'>$ {$flowers['price']}</p>";
echo "<div class='hover-content'>";
echo "<div class='add-to-cart-btn'>";
if (isset($_GET['id'])) {
    echo "<a href='shop.php?flowersBlack?idBlack={$flowers['id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
    }else{
    echo "<a href='shop.php?flowers?id={$flowers['id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
    }echo " </div>
</div>
</div>
</div>";
}
?>     


                    <?php
$query="SELECT * FROM plants";
$result=mysqli_query($conn,$query);

while($plants=mysqli_fetch_assoc($result)){
echo " <div class='single-product-wrapper'>";
echo "<div class='product-img'>";
echo "<img src='admin/images/{$plants['plant_img']}'>";
echo "<img class='hover-img' src='admin/images/{$plants['img_two']}'>";
echo "<div class='product-favourite'>";
echo "<a href='' class='favme fa fa-heart'></a>";
echo " </div></div>";
echo '<div id="cards" class="product-description">';
if(isset($_GET['id'])){echo "<a href='single-product-details.php?plantsIdBlack={$plants['plants_id']}'>";}else{echo "<a href='single-product-details.php?plantsId={$plants['plants_id']}'>";}

echo "<h6 id='color'>{$plants['plant_name']}</h6>";
echo "</a>";
echo "<p id='color20' class='product-price'>$ {$plants['price']}</p>";
echo "<div class='hover-content'>";
echo "<div class='add-to-cart-btn'>";
if (isset($_GET['id'])) {
    echo "<a href='shop.php?plantsBlack?idBlack={$plants['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
    }else{
    echo "<a href='shop.php?plants?id={$plants['plants_id']}' type='submit' name='add' class='btn essence-btn'>Add to Cart</a>";
    }echo " </div>
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