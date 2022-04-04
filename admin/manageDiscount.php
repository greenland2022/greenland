<?php
ob_start();
include('include/header.php');
require('include/conection.php');
if(isset($_POST['submit'])){
    $catName=$_POST['name'];
    $catImg=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];

    $imgTwo=$_FILES['image']['name'];
    $imgTow_name=$_FILES['image']['tmp_name'];

    $path='images/';
    move_uploaded_file($tmp_name,$path.$catImg);
    move_uploaded_file($imgTow_name,$path.$imgTwo);
    $description=$_POST['description'];
    $price=$_POST['price'];
    $query="INSERT INTO discount (name,img,imgTwo,price,description) VALUES ('$catName','$catImg','$imgTwo','$price','$description') ";
    mysqli_query($conn,$query);
    header("Location:manageDiscount.php");
    
    }

  

    if(isset($_POST['submit1'])){
        $catName=$_POST['name'];
        $catImg=$_FILES['img']['name'];
        $tmp_name=$_FILES['img']['tmp_name'];

        $imgTwo=$_FILES['image']['name'];
        $imgTow_name=$_FILES['image']['tmp_name'];

    $path='images/';
    move_uploaded_file($tmp_name,$path.$catImg);
    move_uploaded_file($imgTow_name,$path.$imgTwo);

    $description=$_POST['description'];
    $price=$_POST['price'];

        $query="UPDATE discount SET name='$catName',
        img='$catImg'  ,
        imgTwo='$imgTwo',
        price='$price' ,
        description='$description'

        WHERE id={$_GET['id']} ";
        mysqli_query($conn,$query);
        header("Location:manageDiscount.php");
        
        }
        if(isset($_GET['id'])){
            $query="SELECT * FROM discount WHERE id={$_GET['id']}";
            $result=mysqli_query($conn,$query);
            $cat=mysqli_fetch_assoc($result);
        }
        if(isset($_GET['id1'])){
            $query="DELETE FROM discount WHERE id={$_GET['id1']}";
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
                                                    <input type="text" id="name" name="name" placeholder="Category Name" value="<?php if(isset($_GET['id'])){echo $cat['name'];}?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="file" id="img" name="img" placeholder="Category Image" value="<?php if(isset($_GET['id'])){echo $catName;}?><images/<?php echo $cat['img'];?>>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="file" id="image" name="image" placeholder="Category Image" value="<?php if(isset($_GET['id'])){echo $catName;}?><images/<?php echo $cat['img'];?>>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="email" name="description" placeholder="description"  value="<?php if(isset($_GET['id'])){echo $cat['description'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="price" name="price" placeholder="price"  value="<?php if(isset($_GET['id'])){echo $cat['price'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <?php
                                                if(isset($_GET['id'])){
                                                    echo '<button type="submit" name="submit1"  value="Edit" class="btn btn-success btn-sm">Edit</button>';

                                                }elseif(!isset($_GET['id'])){
                                                    echo '<button type="submit" name="submit"  value="Create" class="btn btn-success btn-sm">Add Plants</button><br>';
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
                                                <th>Category Second Image</th>
                                                <th>Category description</th>
                                                <th>Category price</th>
                                                <th class="text-right">Edit</th>
                                                <th class="text-right">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query="SELECT * FROM discount ";
                                            $result=mysqli_query($conn,$query);
                                            while($category=mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$category['id']} product </td>";
                                                echo "<td>{$category['name']} </td>";
                                                echo "<td><img src='images/{$category['img']}' width='100px' height='100px'/> </td>";
                                                echo "<td><img src='images/{$category['imgTwo']}' width='100px' height='100px'/> </td>";
                                                echo "<td>{$category['description']} </td>";
                                                echo "<td>{$category['price']} </td>";
                                                echo "<td><a href='manageDiscount.php?id={$category['id']}'>Edit</a> </td>";
                                                echo "<td><a href='manageDiscount.php?id1={$category['id']}'>Delete</a> </td>";
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