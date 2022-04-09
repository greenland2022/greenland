<?php
include("header/header.php")
?>
<br><br><br><br>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Unica+One">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Vollkorn">



</head>
<style>

.nn {

background-color: gray;
opacity:0.9;
z-index:-20;
} 

.dd {
font-size:15px;
font-family:cursive;
text-align:center;
display:inline-block;
divsizing:auto;
padding:10px;

}

.animation-class,
body img + p,
.footer-sticky ul li a,
.navbar .navbar-list li a,#top-fixed a
{
    transition-timing-function: linear; 
    transition-duration: .5s;
}

#test
{
    border: 1px solid white;
  
}

#top-fixed
{
  float:right;
  font-size:1.9rem;
  font-family:'Unica One', helvetica;
  color:#eceff1;
}

#top-fixed a
{
  color:#eceff1;
  text-decoration:none;
}

#top-fixed a:hover
{
  color: #b71c1c;
}

#footer-placeholder
{
    height: 75px;
}

body
{
    background-color: gainsboro;
}
body .col-md-6 img
{
    width: 80%;
    height: auto;
    margin-left: 10%;
    padding: 70px; 

    /*transform: rotate(90deg);*/
    /*border:3px solid rgba($secondary-color,0.5);*/

    background: rgba(0, 0, 0, .03);
}
body img + p
{
    font-family: 'Unica One', helvetica;
    font-size: 1.7rem;

    padding: 15px; 

    text-align: center;
    letter-spacing: 10px;

    color: green;
    background: rgba(0, 0, 0, .03);
}
body img + p:hover
{
    color: #b71c1c;
}

.footer-sticky
{
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 75px;
    margin-top: 20px;
    padding-right: 25px;
    padding-bottom: 25px;
    padding-left: 25px;

    background: rgba(0, 0, 0, .1);
}
.footer-sticky ul
{
    padding-bottom: 20px; 

    list-style: none;
}
.footer-sticky ul li
{
    display: inline-block;
    float: left;

    margin-top: 30px; 
    margin-left: 30px;
}
.footer-sticky ul li a
{
    color: #eceff1;
}
.footer-sticky ul li a:hover
{
    color: #b71c1c;
}
.footer-sticky ul #footer-copyright
{
    font-family: 'Vollkorn', helvetica;
    font-size: 1.6rem; 
    float: right;

    color: #eceff1;
}

.footer-sticky ul #footer-copyright1
{
    font-family: 'Vollkorn', helvetica;
    font-size: 1.6rem; 
    float: left;

    color: #eceff1;
}

.main-text,
.quote-text
{
    font-family:'Vollkorn',helvetica;
    font-size: 1.8rem;

    margin-top: 10px;
    padding-top: 25px; 

    color: green;
}

.quote-text
{
    font-size: 1.6rem;
    font-style: italic;

    margin-left: 30px;
    padding: 25px;
    padding-bottom: 35px;

    border-left: 3px solid rgba(255, 255, 255, .3); 
    background: rgba(0, 0, 0, .05);
}

.navbar
{
    margin-top: 10px;
    padding: 40px;

    border: none;
    border-right: 3px solid #37474f; 
    background-color: #263238;
}
.navbar i
{
    margin-bottom: 10px;

    color: #eceff1;
}
.navbar .navbar-list
{
    list-style: none;
}
.navbar .navbar-list li
{
    font-family: 'Unica One', helvetica;
    font-size: 2.4rem;

    margin-top: 10px;
    margin-right: 10px;
}
.navbar .navbar-list li a
{
    text-decoration: none; 

    color: #cfd8dc;
}
.navbar .navbar-list li a:hover,
.navbar .navbar-list li a:active
{
    color: #b71c1c;
}

.block-saying
{
    margin-top: 30%;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;

    color: #eceff1; 
    border: 3px solid #37474f;
}


.block-saying p,.block-saying h3
{
    font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
  
    text-align: center;
}

.block-saying .fa-quote-right
{
    float: right;
}
.block-saying p
{
    padding: 10px;
}
/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
}

.container {
    padding: 16px;
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
}

span.psw {
    float: right;
    padding-top: 16px;
    font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
}

/* The Modal (background) */
.modal {
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
}

/* Set a style for all buttons */
button {
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 5px;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Modal Content/Box */
.modal-content {
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
    font-family: 'Vollkorn', helvetica;
    font-size:1.9rem;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}</style>
<body>
<!--NAVBAR-->
    <div class="container-fluid col-md-2">
    <a name ="top"><div class="navbar navbar-default navbar-left"></a>
        <ul class="navbar-list">
            <li>
            <img src="img/bg-img/628283.png" alt="">   
                 </li>
                 <li><br></li>
                 <li>
            <img src="img/bg-img/icons8-gardening-plant-64.png" alt="">   
                 </li>
                 <li><br></li>
                 <li>
            <img src="img/bg-img/icons8-potting-soil-64.png" alt="">   
                 </li>
            

        </ul>
        </div>
    </div>

<!--LOGIN SECTION-->


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="C:\Users\Jeshwin Rodriques\Desktop\BOOTSTRAP\img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label><br/>
      <input type="text" placeholder="Enter Username" name="uname" required>
    <br/>
      <label><b>Password</b></label><br/>
      <input type="password" placeholder="Enter Password" name="psw" required>
       
      <button type="submit">Login</button> <br/>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="signup">   Don't have an account <a href="#">SignUp</a> here</span>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<!--DIVIDER-->
    
<!---->
<!--BODY-->
    <div class="container-fluid col-md-6">
        <img src="https://images.unsplash.com/photo-1446071103084-c257b5f70672?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=c6dada9e3845827bf613c676d2587b35" alt="Placeholder">
            <p>greenland</p>
    </div>
  <div class="container-fluid col-md-4">
        <p class="main-text">
           GREEN LAND Store
A store specializing in indoor and outdoor ornamental plants and their accessories, which are carefully prepared to last.
We strive for a beautiful environment and good health 


        </p>
        <p class="quote-text">
            <i class="fa fa-quote-left"></i>
             Please contact us and the work team is ready to meet your requests with pleasure, and your order will be delivered to your home, all you have to do is buy what you want and we will take care of the rest.

            <i class="fa fa-quote-right"></i>

 <div class="nn">
            <h4 align="center" style="font-family:cursive;font-size:25px;">Our Team<h4><br>
<div class="dd">▶Abdalrahman Alhmouz
<p>civil engineer</p>
</div>
<div class="dd">▶Ahmad Hammoudeh
<p>Computer information systems</p>
</div>
<div class="dd">▶Rola Almaaitah 
<p>Business administrator</p>
</div>
<div class="dd">▶Tasnim Hanini
<p>Chemistry</p>
</div>
<div class="dd">
    ▶Fatimah Shareef 
<p>Mechatronics Eng</p>
</div>

        </p>


    </div>
  
    
  <!-- Back to top -->
  <div class="container-fluid" id="top-fixed">
    <a href="#top">
    <i class="fa fa-arrow-up fa-2x"></i>
        Top
    </a>
  </div>
  <!---->
    </div>
<!---->
<!--FOOTER-->
    <div class="container-fluid col-md-12 footer-sticky">
        <ul>
            <li id="footer-copyright1">
            Follow us on
            </li>
            <li>
            <a><i class="fa fa-facebook fa-2x"></i></a>
            </li>
            
            <li>
            <a><i class="fa fa-twitter fa-2x"></i></a>
            </li>

            <li>
            <a><i class="fa fa-github fa-2x"></i></a>
            </li>

            <li id="footer-copyright">
            &copy;    |    
            </li>
        
        </ul>

    </div>
<!---->
  
<!--WHITESPACE-->
    <div class="col-md-12">
    <p id="footer-placeholder">
        
    </p>
    </div>

</body>
</html>