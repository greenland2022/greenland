<?php
ob_start();
if(isset($_GET['black'])){
    include('header/blackHeader.php');
    echo '<br><br><br>';
  }
    else{
    include('header/header.php');}?>
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
    body {
        box-sizing: border-box;
    }

    strong {
        font-size: 2.5rem;
    }

    .cover{
        height: 30rem;
        width: 150rem;
        opacity: 0.6;
    }
    .about-us {
        justify-content: center;
        margin-left: 30rem;
        margin-right: 30rem;
        font-size: 1.65rem;
        text-align: center;
        font-family: 'Hind', sans-serif;
        line-height: 2.4rem;

    }

    .team {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: minmax(100px, auto);
        color: #000;
        font-size: 2rem;
        text-align: center;
        font-family: marydale;
        height: 90rem;
        width: 80rem;
        border: solid black 0.1rem;
        margin-left: 30rem;
        justify-content: center;

    }

    .our-team {
        width: 35rem;
        height: 5rem;
        font-size: 4rem;
        background: #b6e84a;
        margin-left: -7rem;
        transform: rotate(-15deg);


    }

    .circle1 {
        height: 18rem;
        width: 18rem;
        border: 3px solid #BADA55;
        border-radius: 50%;
        grid-column: 2 / 3;
        grid-row: 1;
        margin-top: 5rem;
    }

    .circle2 {
        height: 18rem;
        width: 18rem;
        border: 3px solid #BADA55;
        border-radius: 50%;
        grid-column: 2 / 3;
        grid-row: 2;
        margin-top: -12rem;
        background-image:url("New Images/teamImg/Abdalrahman.jpg");
        background-size: cover;
    }
#ahmad{
    background-image:url("New Images/teamImg/Ahmad.jpeg");
        background-size: cover; 
}
    .circle3 {
        height: 18rem;
        width: 18rem;
        border: 3px solid #BADA55;
        border-radius: 50%;
        grid-column: 1-3 / 3;
        grid-row: 3;
        margin-left: 2rem;
        margin-top: -16rem;
        background-size: cover;

    }
    .role {
        margin-left: -6rem;
        margin-top: 18rem;
        width: 30rem;
        color: black;
        font-size: 1.7rem;
    }
    
    ul {
    list-style: none;
    display: flex
}
</style>

<body>


    <!--LOGIN SECTION-->


    <div id="id01" class="modal">

        <form class="modal-content animate" action="action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
                <label><b>Username</b></label><br />
                <input type="text" placeholder="Enter Username" name="uname" required>
                <br />
                <label><b>Password</b></label><br />
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button> <br />
                <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="signup"> Don't have an account <a href="#">SignUp</a> here</span>
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


    <div class="about-us">
       <img src="admin/images/aboutus.jpeg" class="cover">
        <br>
        <br>
        <br>
        <br>
        <strong>OUR STORY</strong>
        <br>
        <br>
        <div> Hi! We’re GreenLand.com, a team with a passion for delivering happiness and sharing our love of plants. While our site is relatively new, our experience is not. Our team, based out of the NYC metro area, has over 40 years of experience sourcing plants and is always on the lookout for the latest plants and trends.</div>
        <br>
        <div>We collaborate with growers across the country to gather a wide variety of fresh, beautiful plants, from classic standards to on-trend faves, shipping straight from the greenhouse to arrive at your front door. We hand-select varieties to decorate our living and workspaces and uplift our moods. And we scour Instagram and our local garden centers just like you.</div>
        <br>
        <div>Our goal is to help spread the joy of plants and make everyone’s experience a positive one. We know some plants and room environments can be tricky (hello office cubicle, we are talking to you!) But don’t worry. We are here to help demystify the plant experience and make it a joyful one. Ready. Set. Grow!</div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="team">
        <h4 class="our-team">Green Land Team!</h4><br>
        <div class="circle2">
            <p class="role">Team Leader | Abd Al-Rahman Al-Hmouz</p>
        </div>
        <div class="circle3" id="ahmad">
            <p class="role">Employee | Ahmad Hammoudeh</p>
        </div>
        <div class="circle3">
            <p class="role">Project Manager | Fatimah Shareef</p>
        </div>
        <div class="circle3">
            <p class="role">Employee | Tasnim Hanini</p>
        </div>

    </div>

<br>
<br>
<br>
    


</body>

</html>


 <?php
 include('header/footer.php')
 ?>