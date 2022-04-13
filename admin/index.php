<?php
ob_start();
include('include/header.php');
require('include/conection.php');

?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <?php
                                                $query="SELECT * FROM users";
                                                $result=mysqli_query($conn,$query);
                                                $count=0;
                                                while($user=mysqli_fetch_assoc($result)){
                                                    $count++;
                                                }
                                                
                                                echo "<h2>$count</h2>"
                                                ?>
                                             
                                                <span>members</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                            <?php
                                                $queryCart="SELECT * FROM checkout";
                                                $resultCart=mysqli_query($conn,$queryCart);
                                                $countTotal=0;
                                                while($cart=mysqli_fetch_assoc($resultCart)){
                                                    $array=explode(" ",$cart['cart_price']);
                                                    $countCart=count($array);
                                                    $countTotal+=$countCart;
                                                }
                                                
                                                echo "<h2>$countTotal</h2>"
                                                ?>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                            <?php
                                                $queryCart="SELECT * FROM checkout";
                                                $resultCart=mysqli_query($conn,$queryCart);
                                                $countTotal=0;
                                                while($cart=mysqli_fetch_assoc($resultCart)){
                                                    $array=explode(" ",$cart['cart_price']);
                                                    foreach($array As $price){
                                                    $countTotal+=$price;
                                                    }
                                                }
                                                
                                                echo "<h2>$countTotal</h2>"
                                                ?>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

 <?php
 include('include/footer.php')
 ?>
