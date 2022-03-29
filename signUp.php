<?php
include('header/header.php');
ob_start();
require('admin/include/conection.php');
?>


<!-- <link rel="styleSheet" href="css/login.css"> -->
<!-- <body> -->
<!-- 
    <form action="signUp.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p >Create your account</p>
        <div>
        <label for="firstName"> First Name</label>    
        <input type="text"  name="firstName" placeholder="First Name" required="required"></div>
				<div><input type="text"  name="lastName" placeholder="Last Name" required="required"></div>
			
        <div>
        	<input type="email"  name="email" placeholder="Email" required="required">
        </div>
		<div>
            <input type="password"  name="password" placeholder="Password" required="required">
        </div>
		<div>
            <input type="password"  name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <div>
            <input type="number"  name="phoneNumber" placeholder="phoneNumber" required="required">
        </div>
        <div>
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div>
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div >Already have an account? <a href="login.php">Sign in</a></div>
    </form> -->
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
                     <div class="sign-in-form">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Your user name" />
                         <span class="err-lbl">please enter your user name</span>
                       </div>
                       <div class="form-group">
                         <input type="password" class="form-control" placeholder="Your password" />
                         <span class="err-lbl">please enter your password</span>
                       </div>
                       <div class="form-group btn-wrapp">
                           <button class="slz-btn" type="button">Sign in</button>
                       </div>
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
    </div>
</div>
<style>
    </style>
</body>
</html>



