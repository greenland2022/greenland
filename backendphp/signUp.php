<?php
require_once('configration.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Finance Portal</title>

</head>
<body>

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
    </form>
    <div>
        <?php
        if(isset($_POST['save'])){
            $firstName  =$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $phoneNumber=$_POST['phoneNumber'];
            echo $firstName ."  " . $lastName ;
            $sql="INSERT INTO signup (firstname,lastname,email,password,phonenumber) VALUES (?,?,?,?,?)";
            $stmtinsert=$db->prepare($sql);
            $result=$stmtinsert->execute([$firstName,$lastName,$email,$password,$phoneNumber]);
            if($result){
                echo "donepro";
            }
        }
        ?>
    </div>
</div>
</body>
</html>

