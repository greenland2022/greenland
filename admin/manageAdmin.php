<?php
ob_start();
include('include/header.php');
require('include/conection.php');
if(isset($_POST['submit'])){
    $fullname=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO admin (admin_name,email,password) VALUES ('$fullname','$email','$password') ";
    mysqli_query($conn,$query);
    header("Location:manageAdmin.php");
    
    }
    if(isset($_POST['submit1'])){
        $fullname=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="UPDATE admin SET admin_name='$fullname'
        ,email='$email',
        password='$password' 
        WHERE admin_id={$_GET['id']} ";
        mysqli_query($conn,$query);
        header("Location:manageAdmin.php");
        
        }
        if(isset($_GET['id'])){
            $query="SELECT * FROM admin WHERE admin_id={$_GET['id']}";
            $result=mysqli_query($conn,$query);
            $admin=mysqli_fetch_assoc($result);
        }
?>


<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    
<div class="row">
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Admin Info</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="name" name="name" placeholder="Admin Name" value="<?php if(isset($_GET['id'])){echo $admin['admin_name'];}?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="email" id="email" name="email" placeholder="Email"  value="<?php if(isset($_GET['id'])){echo $admin['email'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" id="password" name="password" placeholder="Password"  value="<?php if(isset($_GET['id'])){echo $admin['password'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <?php
                                                if(isset($_GET['id'])){
                                                    echo '<button type="submit" name="submit1"  value="Edit" class="btn btn-success btn-sm">Edit</button>';

                                                }elseif(!isset($_GET['id'])){
                                                    echo '<button type="submit" name="submit"  value="Create" class="btn btn-success btn-sm">Submit</button>';
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
                                                <th>Admin Id</th>
                                                <th>Admin Name</th>
                                                <th>Email</th>
                                                <th class="text-right">Edit</th>
                                                <th class="text-right">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query="SELECT * FROM admin ";
                                            $result=mysqli_query($conn,$query);
                                            while($admin=mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$admin['admin_id']} </td>";
                                                echo "<td>{$admin['admin_name']} </td>";
                                                echo "<td>{$admin['email']} </td>";
                                                echo "<td><a href='manageAdmin.php?id={$admin['admin_id']}'>Edit</a> </td>";
                                                echo "<td><a href=''>Delete</a> </td>";
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