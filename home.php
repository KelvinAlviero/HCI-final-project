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
    <title>Home - MERC Healthcare</title>
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
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="make-a-plan.php">Make a Plan</a></li>
                    <li><a href="locations.php">Locations</a></li>
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

    <!--Content-->
    <div style="background-color: rgb(229, 242, 211); padding: 10px;">
        <h2 style="margin-left: 40px; margin-right: 40px; margin-top: 60px;">Live safer, healthier and happier.</h2>
        <h3 style="margin-left: 55px; margin-right: 40px;">You'll never miss a heartbeat</h3>
        <br>
        <p style="margin-left: 40px; margin-right: 40px; font-size: 18px;">
            Protect your health and wallet with MERC. <br>
            Discover personalized plans, extensive <br>
            provider networks, and exceptional service <br>
            Your peace of mind and body starts here. <br>
        </p>
        <p style="margin-left: 40px; margin-right: 40px; margin-top: 10px; margin-bottom: 60px; font-size: 18px;">Interested? Find out more <a href="about-us.php">here</a>.</p>
    </div>
    <div class="seperator-div"></div>
    <!--Add additional content under here-->
			<div class="main-title">
				<div style="display:flex; justify-content:center; margin-top: 3vh;">
					<div style="height:0.5vh; width:6vw; background-color:red; "></div>
				</div>
				<h1 style="font-size: clamp(28px, 2.5vw, 56px);">Providing the best for you</h1>
				<p style="justify-content: center; display:flex; margin: 2vh 0; ">Benefits for you as a member:</p>
			</div>
	<div class="green-border">
		<div class="info-container">
				<div>
					<img src="kelvindoc.png" style="border-radius: 50%;   margin: 0 4vw; ">
				</div>
				<div class="intro-text">
					<i class="fas fa-user-md" style="margin: 0 0 10px 16px; font-size: 42px;"></i>
					<div style="width:70px; height:3px; background-color: green;"></div>
					<h3>Introducing our Chief Medical Officer (CMO) Dr. Vince Kel</h3>
					<p>Dr. Vince Kel, MD, PhD, is our esteemed Chief Medical Officer (CMO). <br>
					With a strong commitment to patient care, research, and leadership,<br>
					Dr. Kellan ensures the highest standard of healthcare.<br>
					His exceptional clinical excellence, research contributions, <br>
					and strategic vision drive the advancement of our medical services.<br>
					With a deep understanding of evidence-based practices,<br>
					Dr. Kel leads our team in delivering exceptional<br>
					care and optimizing patient outcomes.
					</p>
					<div style="width:150px; height:3px; background-color: green; "></div>
				</div>
		</div>
	</div>
	<div class="green-border">
		<div class="info-container">
					<div style="position: relative;">
					  <i class="fas fa-user-friends" style="position: absolute; top: -50; right: 26; font-size: 42px;"></i>
					  <div style="width:100px; height:3px; background-color: green; float: right;"></div>
					  <h3>A reliable team always on your side</h3>
					  <p>A team that is always standb-by and trained to best support you<br>
					  A team that is always standb-by and trained to best support you
					  </p>
					  <div style="width:100px; height:3px; background-color: green; float: right;"></div>
					</div>
				<div style="width:25%; object-fit: cover; aspect-ratio: 1/1;">
					<img src="team.jpg" style="border-radius: 50%;  margin: 0 4vw; max-width:100%; max-height:100%; aspect-ratio: 1/1; ">
				</div>
		</div>
	</div>
	<div class="green-border">
		<div class="info-container">
				<div>
					<img src="kelvindoc.png" style="border-radius: 50%;   margin: 0 4vw; ">
				</div>
				<div class="intro-text">
					<i class="fas fa-user-md" style="margin: 0 0 10px 16px; font-size: 42px; "></i>
					<div style="width:100px; height:3px; background-color: green;"></div>
					<h3>A reliable team always on your side</h3>
					<p>
					</p>
					<div style="width:100px; height:3px; background-color: green;"></div>
				</div>
		</div>
	</div>
</body>
</html>