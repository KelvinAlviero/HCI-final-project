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
    <title>Contact Us - MERC Healthcare</title>
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
                    <li><a href="locations.php">Locations</a></li>
                    <li class="active"><a href="contact-us.php">Contact Us</a></li>
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
    <div style="background-color: #fcfaf6; display: flex; justify-content: space-between; padding: 20px 140px 20px 140px;" >
		<div style="background-color: #fcfaf6;">
			<h1 style="font-size: 80px;">Need help?</h1>
			<p style="font-size: 32px;"><i class="fas fa-phone-alt"></i> Please contact us </p>
		</div>
		<div style="height: 12%; width:12%; padding-top: 20px;">
			<img src="calloperator.png" style="max-height: 100%; max-width: 100%; object-fit: contain;">
		</div>
	</div>
	<div style="background-color: #fefefa; border-radius: 40px; margin: 100px 60px;">
		<div style="display: flex; justify-content:flex-start; margin: 10px 40px;">	
			<h2><i class="fas fa-ribbon" style="margin:0 5px; color: #EB102F ;"></i>Connecting You to Reliable Assistance<h2>
		</div>
		<div class="contact-numbers">
			<div class="contact-number-margin">
				<h3>General inquires and company<br> 
				policy information</h3><br>
				<p>Kelvin: <a href="">+62 812-3456-7890</a><br><br>
				Monday to Friday, 6 AM to 8 PM UTC/GMT </p>
			</div>
			<div class="contact-number-margin">
				<h3>Medicare registration and <br>
				billing</h3><br>
				<p>Harry: <a href="">+62 813-4567-8901</a><br><br>
				Monday to Friday, 10 AM to 9 PM UTC/GMT </p>
			</div>
			<div class="contact-number-margin">
				<h3>Refund & Reimbursements <br>
				claim</h3><br>
				<p>Regis: <a href="">+62 815-6789-0123</a><br><br>
				Monday to Thursday, 8 AM to 8 PM UTC/GMT </p>
			</div>
		</div>
	</div>
		<div style="display: flex; justify-content: center; align-items: center;">
		  <div style="width: 1200px; height: 2px; background-color: gray; border-radius: 20px; opacity: 0.5; margin: -20px 0px 80px 0px;"></div>
		</div>
	<div class="other-contact-selection">
		<div style="display:flex; ">
			<i class="fas fa-paper-plane" style="font-size: 24px; color: #C5EEB1;"></i>
			<h2 style="margin: 20px 0  80px 0; font-size: 36px;">More ways to reach to us</h2>
		</div>
	 <label class="select-label" for="selection-contact">Select an option:</label>
		<select class="contact-select" id="selection-contact" onchange="showContent()">
		    <option value="option1">MERC Office location</option>
		    <option value="option2">MERC Mailing address</option>
		    <option value="option3">Contact form</option>
		    <option value="option" selected>Please select a choice</option>
		</select>
	</div>
	<div id="content-placeholder" style="display: grid; justify-content:center; margin:0 0 100px 0;"></div>
</body>

<script>
  function showContent() {
    var selectBox = document.getElementById("selection-contact");
    var selectedValue = selectBox.value;
    var contentPlaceholder = document.getElementById("content-placeholder");

    contentPlaceholder.innerHTML = "";

    if (selectedValue === "option1") {
      contentPlaceholder.innerHTML = "<h2>Fx Sudirman</h2><p>Floor 6</p>";
    } else if (selectedValue === "option2") {
      contentPlaceholder.innerHTML = "<h2>Mediterania Apartment</h2><p>Jakarta, 14524</p>";
    } else if (selectedValue === "option3") {
      contentPlaceholder.innerHTML = "<h2>Fill your info here</h2><p><a href=\"https://forms.gle/DMKRpmdv2rLvJ4Ld6\" target=\"blank\" >Contact form</a></p>";
    }
  }
</script>

</html>