<?php

//login.php
include('../connect.php');
//include('../action.php');
//$base_url = 'http://localhost/project/';

if(isset($_POST['book']))
{
         
		
			
				
                $doctor_email	=	$_POST["doctor_email"];
                $patient_email_address	=	$_POST["patient_email_address"];
                $reason_for_appointment	=	$_POST["reason_for_appointment"];
                $appointment_date	=	$_POST["appointment_date"];
				$appointment_time	=	$_POST["appointment_time"];
				
				

			$insert = "INSERT INTO appointment_table 
                ( doctor_email, patient_email_address,  reason_for_appointment, appointment_date, appointment_time) 
			VALUES ( '$doctor_email', '$patient_email_address', '$reason_for_appointment	', '$appointment_date', '$appointment_time');";
			
            $result = mysqli_query($conn, $insert);




}

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<title>COVID CLINIC-Book appointment</title>
		<!-- font awesome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="../css1/style.css">
	   
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic </a>

<nav class="navbar">
	
	
    <a href="dashboard.php">Back</a>
	<a href="login.php">Log out</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
</head>

<div class="container">

	

		

	<body>
					


    

<section class="book" id="book">
<br>
<br>
<br>
<br><br><h1 class="heading"> <span>BOOK </span> APPOINTMENT</h1>  

 
<div class="row">
					<form method="POST"  action="book.php">   	
                   

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Doctor Email <span class="text-danger">*</span></label>
                                <input type="email" name="doctor_email"  class="box"data-parsley-trigger="keyup" />
                            </div>

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Patient Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="patient_email_address"  class="box"data-parsley-trigger="keyup" />
                            </div>

                           

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Reason for appointment<span class="text-danger">*</span></label>
                                <input type="text" name="reason_for_appointment"  class="box"  data-parsley-trigger="keyup" />
                            </div>

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Appointment date<span class="text-danger">*</span></label>
                                <input type="date" name="appointment_date"  class="box" data-parsley-trigger="keyup" />
                            </div>
                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Appointment time<span class="text-danger">*</span></label>
                                <input type="time" name="appointment_time"  class="box"data-parsley-trigger="keyup" />
                            </div>
                            
                           
                         
                            
                            
        		
    			<div class="form-group">
          			
                      <input type="submit" name="book"  class="btn btn-primary" value="BOOK" />
					
        		</div>
      		</div>
    	</form>
  	</div>
</div>        
					</form>
					
    </div>

</section>
				</div>
			</div>
			<br />
			<br />
		</div>
	</div>
</div>

