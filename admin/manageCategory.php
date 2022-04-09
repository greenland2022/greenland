<?php
ob_start();
include('include/header.php');
require('include/conection.php');
if(isset($_POST['submit'])){
    $catName=$_POST['name'];
    $catImg=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path='images/';
    move_uploaded_file($tmp_name,$path.$catImg);
    
    $catImgTwo=$_FILES['img_two']['name'];
    $tmp_nameTwo=$_FILES['img_two']['tmp_name'];
    move_uploaded_file($tmp_nameTwo,$path.$catImgTwo);
    $description=$_POST['description'];
    $price=$_POST['price'];
    $query="INSERT INTO plants (plant_name,description,price,plant_img,img_two) VALUES ('$catName','$description','$price','$catImg','$catImgTwo') ";
    mysqli_query($conn,$query);
    header("Location:manageCategory.php");
    
    }

    if(isset($_POST['submitEqu'])){
        $catName=$_POST['name'];
        $catImg=$_FILES['img']['name'];
        $tmp_name=$_FILES['img']['tmp_name'];
        $path='images/';
        $catImgTwo=$_FILES['img_two']['name'];
        $tmp_nameTwo=$_FILES['img_two']['tmp_name'];
        move_uploaded_file($tmp_nameTwo,$path.$catImgTwo);
        move_uploaded_file($tmp_name,$path.$catImg);
        $description=$_POST['description'];
        $price=$_POST['price'];
        $query="INSERT INTO equipment (equipment_name,description,price,equipment_img,img_two) VALUES ('$catName','$description','$price','$catImg','$catImgTwo') ";
        mysqli_query($conn,$query);
        header("Location:manageCategory.php");
        
        }

        if(isset($_POST['submitSoil'])){
            $catName=$_POST['name'];
            $catImg=$_FILES['img']['name'];
            $tmp_name=$_FILES['img']['tmp_name'];
            $path='images/';
            $catImgTwo=$_FILES['img_two']['name'];
            $tmp_nameTwo=$_FILES['img_two']['tmp_name'];
            move_uploaded_file($tmp_nameTwo,$path.$catImgTwo);
            move_uploaded_file($tmp_name,$path.$catImg);
            $description=$_POST['description'];
            $price=$_POST['price'];
            $query="INSERT INTO soil (soil_name,description,price,soil_img,img_two) VALUES ('$catName','$description','$price','$catImg','$catImgTwo') ";
            mysqli_query($conn,$query);
            header("Location:manageCategory.php");
            
            }

            if(isset($_POST['submit1'])){
                $catName=$_POST['name'];
            $catImg=$_FILES['img']['name'];
            $tmp_name=$_FILES['img']['tmp_name'];
            $path='images/';
            $catImgTwo=$_FILES['img_two']['name'];
            $tmp_nameTwo=$_FILES['img_two']['tmp_name'];
            move_uploaded_file($tmp_nameTwo,$path.$catImgTwo);
            move_uploaded_file($tmp_name,$path.$catImg);
            $description=$_POST['description'];
            $price=$_POST['price'];
        
                $query="UPDATE plants SET plant_name='$catName'
                ,description='$description',
                price='$price' ,
                plant_img='$catImg' ,
                img_two='$catImgTwo' 
        
                WHERE plants_id={$_GET['id']} ";
                mysqli_query($conn,$query);
                header("Location:manageCategory.php");
                
                }
                if(isset($_GET['id'])){
                    $query="SELECT * FROM plants WHERE plants_id={$_GET['id']}";
                    $result=mysqli_query($conn,$query);
                    $cat=mysqli_fetch_assoc($result);
                }
                if(isset($_GET['id1'])){
                    $query="DELETE FROM plants WHERE plants_id={$_GET['id1']}";
                    mysqli_query($conn,$query);
                }
        ?>
<?php
if(isset($_POST['submit2'])){
        $catName=$_POST['name'];
    $catImg=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path='images/';
    $catImgTwo=$_FILES['img_two']['name'];
    $tmp_nameTwo=$_FILES['img_two']['tmp_name'];
    move_uploaded_file($tmp_nameTwo,$path.$catImgTwo);
    move_uploaded_file($tmp_name,$path.$catImg);
    $description=$_POST['description'];
    $price=$_POST['price'];

        $query="UPDATE equipment SET equipment_name='$catName'
        ,description='$description',
        price='$price' ,
        equipment_img='$catImg' ,
        img_two='$catImgTwo' 

        WHERE equipment_id={$_GET['idEquipment']} ";
        mysqli_query($conn,$query);
        header("Location:manageCategory.php");
        
        }
        if(isset($_GET['idEquipment'])){
            $query="SELECT * FROM equipment WHERE equipment_id={$_GET['idEquipment']}";
            $result=mysqli_query($conn,$query);
            $cat=mysqli_fetch_assoc($result);
        }
        if(isset($_GET['idEquipment1'])){
            $query="DELETE FROM equipment WHERE equipment_id={$_GET['idEquipment1']}";
            mysqli_query($conn,$query);
        }
?>

<?php
    if(isset($_POST['submit3'])){
        $catName=$_POST['name'];
    $catImg=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path='images/';
    $catImgTwo=$_FILES['img_two']['name'];
    $tmp_nameTwo=$_FILES['img_two']['tmp_name'];
    move_uploaded_file($tmp_nameTwo,$path.$catImgTwo);
    move_uploaded_file($tmp_name,$path.$catImg);
    $description=$_POST['description'];
    $price=$_POST['price'];

        $query="UPDATE soil SET soil_name='$catName'
        ,description='$description',
        price='$price' ,
        soil_img='$catImg' ,
        img_two='$catImgTwo' 

        WHERE soil_id={$_GET['idSoil']} ";
        mysqli_query($conn,$query);
        header("Location:manageCategory.php");
        
        }
        if(isset($_GET['idSoil'])){
            $query="SELECT * FROM soil WHERE soil_id={$_GET['idSoil']}";
            $result=mysqli_query($conn,$query);
            $cat=mysqli_fetch_assoc($result);
        }
        if(isset($_GET['idSoil1'])){
            $query="DELETE FROM soil WHERE soil_id={$_GET['idSoil1']}";
            mysqli_query($conn,$query);
        }
?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    
<div class="row">
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Category Info</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="name" name="name" placeholder="Category Name" value="<?php if(isset($_GET['idEquipment'])){echo $cat['equipment_name'];} else if(isset($_GET['idSoil'])){echo $cat['soil_name'];} else if(isset($_GET['id'])){echo $cat['plant_name'];}?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="file" id="img" name="img" placeholder="Category Image" value="<?php if(isset($_GET['idEquipment'])){echo $cat['equipment_name'];} else if(isset($_GET['idSoil'])){echo $catName;} else if(isset($_GET['id'])){echo $catName;}?><images/<?php echo $cat['plant_img'];?>>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="file" id="img_two" name="img_two" placeholder="Category Image" value="<?php if(isset($_GET['idEquipment'])){echo $cat['equipment_name'];} else if(isset($_GET['idSoil'])){echo $catName;} else if(isset($_GET['id'])){echo $catName;}?><images/<?php echo $cat['plant_img'];?>>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="email" name="description" placeholder="description"  value="<?php if(isset($_GET['idEquipment'])){echo $cat['description'];} else if(isset($_GET['idSoil'])){echo $cat['description'];} else if(isset($_GET['id'])){echo $cat['description'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="price" name="price" placeholder="price" value="<?php if(isset($_GET['idEquipment'])){echo $cat['price'];} else if(isset($_GET['idSoil'])){echo $cat['price'];} else if(isset($_GET['id'])){echo $cat['price'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <?php
                                                if(isset($_GET['id'])){
                                                    echo '<button type="submit" name="submit1"  value="Edit" class="btn btn-success btn-sm">Edit</button>';

                                                }else  if(isset($_GET['idEquipment'])){
                                                    echo '<button type="submit" name="submit2"  value="Edit" class="btn btn-success btn-sm">Edit</button>';

                                                }else  if(isset($_GET['idSoil'])){
                                                    echo '<button type="submit" name="submit3"  value="Edit" class="btn btn-success btn-sm">Edit</button>';

                                                }else if(!isset($_GET['id'])){
                                                    echo '<button type="submit" name="submit"  value="Create" class="btn btn-success btn-sm">Add Plants</button><br>';
                                                    echo '<button type="submit" name="submitEqu"  value="Create" class="btn btn-success btn-sm">Add farming equipment</button><br>';
                                                    echo '<button type="submit" name="submitSoil"  value="Create" class="btn btn-success btn-sm">Add Fertilizer and soil</button>';
                                                }
                                                ?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

                        <div class="row">
      <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Category Id</th>
                                                <th>Category Name</th>
                                                <th>Category Image</th>
                                                <th>Category description</th>
                                                <th>Category price</th>
                                                <th class="text-right">Edit</th>
                                                <th class="text-right">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query="SELECT * FROM plants ";
                                            $result=mysqli_query($conn,$query);
                                            while($category=mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$category['plants_id']}plants </td>";
                                                echo "<td>{$category['plant_name']} </td>";
                                                echo "<td><img src='images/{$category['plant_img']}' width='100px' height='100px'/> </td>";
                                                echo "<td>{$category['description']} </td>";
                                                echo "<td>{$category['price']} </td>";
                                                echo "<td><a href='manageCategory.php?id={$category['plants_id']}'>Edit</a> </td>";
                                                echo "<td><a href='manageCategory.php?id1={$category['plants_id']}'>Delete</a> </td>";
                                            echo "</tr>";
                                            }
                                            ?>

                                            <?php
                                            $query="SELECT * FROM equipment ";
                                            $result=mysqli_query($conn,$query);
                                            while($category=mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$category['equipment_id']} equipment </td>";
                                                echo "<td>{$category['equipment_name']} </td>";
                                                echo "<td><img src='images/{$category['equipment_img']}' width='100px' height='100px'/> </td>";
                                                echo "<td>{$category['description']} </td>";
                                                echo "<td>{$category['price']} </td>";
                                                echo "<td><a href='manageCategory.php?idEquipment={$category['equipment_id']}'>Edit</a> </td>";
                                                echo "<td><a href='manageCategory.php?idEquipment1={$category['equipment_id']}'>Delete</a> </td>";
                                            echo "</tr>";
                                            }
                                            ?>
                                            
                                            <?php
                                            $query="SELECT * FROM soil ";
                                            $result=mysqli_query($conn,$query);
                                            while($category=mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$category['soil_id']} soil </td>";
                                                echo "<td>{$category['soil_name']} </td>";
                                                echo "<td><img src='images/{$category['soil_img']}' width='100px' height='100px'/> </td>";
                                                echo "<td>{$category['description']} </td>";
                                                echo "<td>{$category['price']} </td>";
                                                echo "<td><a href='manageCategory.php?idSoil={$category['soil_id']}'>Edit</a> </td>";
                                                echo "<td><a href='manageCategory.php?idSoil1={$category['soil_id']}'>Delete</a> </td>";
                                            echo "</tr>";
                                            }
                                            ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<?php
 include('include/footer.php')
 ?>