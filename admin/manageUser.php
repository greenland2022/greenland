<?php
ob_start();
include('include/header.php');
require('include/conection.php');
if(isset($_POST['submit'])){
    $firstName  =$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phoneNumber=$_POST['phoneNumber'];
    $query="INSERT INTO signup (firstname,lastname,email,password,phonenumber) VALUES (?,?,?,?,?)";
   
    mysqli_query($conn,$query);
    header("Location:manageUsser.php");
    
    }
    if(isset($_POST['submit1'])){
        $firstName  =$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phoneNumber=$_POST['phoneNumber'];
        $query="UPDATE users SET firstname='$firstName',lastname='$lastname'
        ,email='$email',
        password='$password' ,phonenumber='$phoneNumber'
        WHERE id={$_GET['id']} ";
        mysqli_query($conn,$query);
        header("Location:manageUser.php");
        
        }
        if(isset($_GET['id'])){
            $query="SELECT * FROM users WHERE id={$_GET['id']}";
            $result=mysqli_query($conn,$query);
            $user=mysqli_fetch_assoc($result);
        }
        if(isset($_GET['id1'])){
            $query="DELETE FROM users WHERE id={$_GET['id1']}";
            mysqli_query($conn,$query);
        }
?>


<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    
<div class="row">
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">User Info</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="name"  name="firstName" placeholder="First Name" value="<?php if(isset($_GET['id'])){echo $user['firstname'];}?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="lastName"  name="lastName" placeholder="Last Name" value="<?php if(isset($_GET['id'])){echo $user['lastname'];}?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="name"  name="phoneNumber" placeholder="Phone Number" value="<?php if(isset($_GET['id'])){echo $user['phonenumber'];}?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="email" id="email" name="email" placeholder="Email"  value="<?php if(isset($_GET['id'])){echo $user['email'];}?>"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" id="password" name="password" placeholder="Password"  value="<?php if(isset($_GET['id'])){echo $user['password'];}?>"  class="form-control">
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
                                                <th>User Id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th class="text-right">Edit</th>
                                                <th class="text-right">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query="SELECT * FROM users ";
                                            $result=mysqli_query($conn,$query);
                                            while($user=mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$user['id']} </td>";
                                                echo "<td>{$user['firstname']} </td>";
                                                echo "<td>{$user['firstname']} </td>";
                                                echo "<td>{$user['phonenumber']} </td>";
                                                echo "<td>{$user['email']} </td>";
                                                echo "<td><a href='manageUser.php?id={$user['id']}'>Edit</a> </td>";
                                                echo "<td><a href='manageUser.php?id1={$user['id']}'>Delete</a> </td>";
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