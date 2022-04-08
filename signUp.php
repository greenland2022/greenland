<?php
ob_start();
session_start();
include('header/header.php');
require('admin/include/conection.php');
?>

    <div>
    <div class="container">
        <!-- chỉ lấy html từ slz-signin-signp   -->
          <div class="slz-signin-signup">
            <div class="row">
               <div class="col-md-6 sign-up-wrap">
                 <div class="inner">
                   <div class="line-top"></div>
                   <div class="line-bottom"></div>
                    <h3 class="title">Register</h3>
                     <div class="sign-up-form">
                     <form action="signUp.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                         <input type="text" class="form-control" name="firstName" placeholder="Your First Name" />
                         <span class="err-lbl">please enter your  First Name</span>
                       </div>
                       <div class="form-group">
                         <input type="text" class="form-control"  name="lastName" required="required" placeholder="Your Last Name" />
                         <span class="err-lbl">please enter your last name</span>
                       </div>
                       <div class="form-group">
                         <input class="form-control" type="email"  name="email"  required="required" placeholder="Your Email" />
                         <span class="err-lbl">please enter your Email</span>
                       </div>
                       <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Your password" required="required" />
                         <span class="err-lbl">please enter your password</span>
                       </div>
                       <div class="form-group">
                         <input type="password" class="form-control" placeholder="Retype your password" required="required" />
                         <span class="err-lbl">please enter your password</span>
                       </div>
                       <div class="form-group">
                         <input type="text" class="form-control"  name="phoneNumber" required="required" placeholder="Your Phone Number" />
                         <span class="err-lbl">please enter your phone number</span>
                       </div>
                       <div class="form-group btn-wrapp">
                           <!-- <button class="slz-btn" name="save" type="submit">Sign up</button> -->
            <button type="submit" name="save" >Register Now</button>

                       </div>
                       <span class="text">You have an account? <a href="#">Sign in now</a></span>
                     </div>
                 </div>
              </div>
</form>

               <div class="col-md-6 sign-in-wrap">
                   <div class="inner">
                     <h3 class="title">Login</h3>
<form method="POST">
                     <div class="sign-in-form">
                       <div class="form-group">
                         <input type="text" name="email" class="form-control" placeholder="Your user name" />
                         <span class="err-lbl">please enter your email</span>
                       </div>
                       <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Your password" />
                         <span class="err-lbl">please enter your password</span>
                       </div>
                       <div class="form-group btn-wrapp">
                           <button class="slz-btn"  name="login" type="submit">Sign in</button>
                       </div>
</form>
                       <a href="#" class="link forgot-password">Forgot your password?</a>
                       <div class="other-sign-in">
                           <span class="text">Or sign in with</span>
                           <div class="social">
                               <a href="#" class="link share-facebook">
                                   <i class="fa fa-facebook"></i>
                               </a>
                               <a href="#" class="link share-twitter">
                                   <i class="fa fa-twitter"></i>
                               </a>
                               <a href="#" class="link share-facebook">
                                   <i class="fa fa-linkedin-square"></i>
                               </a>
                           </div>
                       </div>
                     </div>
                   </div>
              </div>
            </div>
        </div>
        </div>
        <?php
        if(isset($_POST['save'])){
            $firstName  =$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $phoneNumber=$_POST['phoneNumber'];
            $sql="INSERT INTO users (firstname,lastname,email,password,phonenumber) VALUES ('$firstName','$lastName','$email','$password','$phoneNumber')";
            $result=mysqli_query($conn,$sql);
        }
        ?>
        <?php
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$query = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
$queryAdmin = "SELECT * FROM admin WHERE email ='$email' AND password = '$password'";
$result=mysqli_query($conn,$query);
$resultAdmin=mysqli_query($conn,$queryAdmin);
$user=mysqli_fetch_assoc($result);
$admin=mysqli_fetch_assoc($resultAdmin);
echo $admin['email'];
echo $admin['admin_name'];

if(!empty($admin['admin_id'])){
  $_SESSION['id']=$admin['admin_id'];
  header("Location: admin/index.php");
  }else if(!empty($user['id'])){
  $_SESSION['id']=$user['id'];
  header("Location: index.php");
  }else{
 echo '
 <div class="alert alert-danger">
Your Password or Username not correct
</div>
 ';   
}}
?>
    </div>
</div>
<style>
    </style>
</body>
</html>



