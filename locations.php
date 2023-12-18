<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";

    $db = mysqli_connect($host,$user,$password,"hci_testdb");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locations - MERC Healthcare</title>
    <!--All the CDN links, please do not remove any I had to suffer searching for all of these.-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<!--Background color-->
<body style="background-color: rgb(155, 229, 170);">
    <!--Navigation bar stuff-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <!--Collapse button-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fa fa-bars"  style="font-size: 20px; color: rgb(50, 59, 66);"></i>
                </button>

                <!--Navigation bar brand-->
                <a class="navbar-brand">MERC Healthcare</a>
            </div>

            <!--Navigation bar elements-->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="make-a-plan.php">Make a Plan</a></li>
                    <li class="active"><a href="locations.php">Locations</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
                
                <!--Navigation bar elements but for the right side-->
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['username'])){
                            echo "<li><a>" .$_SESSION['username'] . "</a></li>";
                            echo "<li><a href='logout.php'><i class='fa fa-sign-out' style='color: rgb(84, 100, 114);'></i> Log out</a></li>";
                        }else{
                            echo "<li><a href='login.php'><i class='fa fa-sign-in' style='color: rgb(84, 100, 114);'></i> Login</a></li>";
                            echo "<li><a href='register.php'><i class='fa fa-edit' style='color: rgb(84, 100, 114);'></i> Register</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="seperator-div"></div>
    <div style="background-color: #C5EEB1; padding-top: 20px; padding-bottom: 20px;">
        <div style="background-color: #fefefa; border-radius: 20px; width: 80%; margin: auto; padding: 20px; display: flex;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126904.33927352562!2d106.65194464335937!3d-6.295159699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1f00fe6edf7%3A0xb664883bee56870c!2sMayapada%20Hospital%20Jakarta%20Selatan%20(MHJS)!5e0!3m2!1sen!2sid!4v1702891416797!5m2!1sen!2sid" width="600" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <div style="margin-left: 20px;">
            <h2>Locations</h2>
            <h3 style="margin-left: 30px;">Visit our healthcare center in South Jakarta for further support and assistance.</h3>
          </div>
        </div>
      </div>
    <div class="seperator-div"></div>
</body>
</html>