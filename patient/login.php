<?php

//login.php


include('../connect.php');


if(isset($_POST['patient_login_button']))
{
         
		
			
				$patient_email_address	=	$_POST["patient_email_address"];
                $patient_password	=	$_POST["patient_password"];
                			

			$query = "SELECT * FROM patient_table WHERE patient_email_address='$patient_email_address' and patient_password = '$patient_password'";
			
            $result = mysqli_query($conn, $query);
            $count  = mysqli_num_rows($result);
            if($count>0)
            {
                echo "Login Successful!";
                header("Location: ./welcome.php");
            }
            else
            {
                echo "Login Unsuccessful!";
            }




}

//include('class/Appointment.php');

//$object = new Appointment;

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<title>COVID CLINIC-Patient login</title>
		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="../css1/style.css">
	   
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic </a>

<nav class="navbar">
	<a href="../index.html">Home</a>
	<a href="../contact.html">Contact</a>
	<a href="../aboutus.html">About</a>
	<a href="register.php">Patient Registration</a>
	<a href="../jurisdiction.html">Log In</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
</head>

	<body>
	

<section class="book" id="book">
<br>
<br>
<br>
<br><br><h1 class="heading"> <span>PATIENT </span> LOGIN</h1>  

 
<div class="row">
			
					<form method="post" action="login.php">
						<div class="form-group">
							<label>Patient Email Address</label>
							<input type="email" name="patient_email_address" id="patient_email_address" class="box" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
							<label>Patient Password</label>
							<input type="password" name="patient_password" id="patient_password" class="box" required  data-parsley-trigger="keyup" />
						</div>
						<div class="form-group text-center">
						
							<input type="submit" name="patient_login_button" id="patient_login_button" class="btn btn-primary" value="Login" />
						</div>
</form>

				</div>
		</section>
</body>
</html>		

