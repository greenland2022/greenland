<?php
if(isset($_GET['black'])){
    include('header/blackHeader.php');}
    else{
    include('header/header.php');}
    if (!isset($_SESSION['id'])) {
header("location:signUp.php");
}
$userId=$_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300&family=Stalemate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>


    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("img/bg-img/pexels-photo-1213049.jpeg");
            background-repeat: no-repeat;
            background-position: cover;
            background-size: 1356px;

            height: 100vh;
            color: rgb(156, 155, 155);
            font-family: 'Arima Madurai', cursive;
        }

        .main {
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-shadow: 0px 10px 20px black;
            overflow: hidden;
        }

        .contactUs {
            height: 430px;
            width: 700px;
            display: flex;
            color: black;
            background-color: white;
            box-shadow: 0px 10px 20px black;
            /* background-image: radial-gradient(black, white); */
        }

        .side {
            flex: 50%;
            text-align: center;
            justify-content: center;
            margin-top: 20px;
            margin-left: -20px;
        }

        .side p {
            padding: 0px 25px 0px 25px;
            font-size: small;
            color: rgb(14, 177, 14);
        }

        .side h4 {
            margin-top: 10px;
        }

        .form {
            flex: 50%;
        }

        .form>.main {
            height: 300px;
            width: 380px;
            box-shadow: 0px 10px 20px black;
            margin-left: 150px;
            text-align: center;
        }

        .form>.main>h2 {
            padding: 15px;
        }

        #txt {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid rgb(192, 189, 189);
            margin-top: 20px;
            color: #41613a;
        }

        #txt::placeholder {
            color: rgb(192, 189, 189);
        }

        #txt:focus {
            outline: none;
        }

        .button {
            padding: 10px 30px;
            margin-top: 30px;
            border: none;
            box-shadow: 0px 2px 10px black;
            background-color: rgb(75, 73, 73);
            cursor: pointer;
        }

        button>a {
            text-decoration: none;
            color: rgb(161, 155, 155);
        }

        .logo {
            font-family: 'Stalemate', cursive;
            font-size: xx-large;
            color: rgb(14, 177, 14);
            margin-right: 180px;
            margin-bottom: 15px;
        }

        .logo>a {
            color: rgb(14, 177, 14);
        }

        .icons {
            margin-top: 10px;
        }

        .icons i {
            margin-right: 10px;
        }

        .allContent {}

    </style>
</head>


<body >
    <main id="body">   
    <div  class="allContent">
        <div class="main">
            <div class="contactUs" id="contactUs">
                <div class="side">
                    <h2 class="logo">Greenland</h2>
                    <h2>CONTACT</h2>
                    <p>The best place where you can buy beautiful plants in Jordan </p>
                    <h4>Address</h4>
                    <p>Amman-Maka Street</p>
                    <h4>Contact number</h4>
                    <p>+962782602840</p>
                    <h4>Email</h4>
                    <p>Greenland@gmai.com</p>
                    <div class="icons" id="hlight">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form">
                    <div class="main">
                        <h2>CONTACT US</h2>
                        <form method="POST">
                            <input type="text" name="Name" id="txt" placeholder="Your Name" required="required">
                            <br>
                            <input type="text" name="Mail" id="txt" placeholder="Your Mail" required="required">
                            <br>
                            <input type="text" name="Massage" id="txt" placeholder="Your Message" required="required">
                            <br>
                            <button class="button" type="submit" name="submit">Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main> 
</body>

</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<?php 

if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Mail = $_POST['Mail'];
    $Massage = $_POST['Massage'];
    $sql = "INSERT INTO contact (Name,Mail,Massage) VALUES ('$Name','$Mail','$Massage')";
    $result = mysqli_query($conn,$sql);
    header("Location:contact.php");

        }
?>




<?php
require('header/footer.php');
?>