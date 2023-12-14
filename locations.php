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
    <link rel="stylesheet" href="styles.css">
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
    <!--Add additional content under here-->
</body>
</html>