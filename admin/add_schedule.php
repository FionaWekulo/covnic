<?php

//login.php
include('../connect.php');
//include('../action.php');
//$base_url = 'http://localhost/project/';

if(isset($_POST['doctorschedule']))
{
         
		
			
				$doctor_email	=	$_POST["doctor_email"];
                $doctor_schedule_date	=	$_POST["doctor_schedule_date"];
                $doctor_schedule_start_time	=	$_POST["doctor_schedule_start_time"];
                $doctor_schedule_end_time	=	$_POST["doctor_schedule_end_time"];
				$average_consulting_time	=	$_POST["average_consulting_time"];
				
				

			$insert = "INSERT INTO doctor_schedule_table 
                (doctor_email, doctor_schedule_date, doctor_schedule_start_time, doctor_schedule_end_time,average_consulting_time) 
			VALUES ('$doctor_email', '$doctor_schedule_date', '$doctor_schedule_start_time	', '$doctor_schedule_end_time', '$average_consulting_time');";
			
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
		<title>COVID CLINIC-doctor schedule</title>
		<!-- font awesome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="../css1/style.css">
	   
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic </a>

<nav class="navbar">
	
    <a href="doctor_schedule.php">Back</a>
	<a href="index.php">Log out</a>

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
<br><br><h1 class="heading"> <span>DOCTOR </span> SCHEDULE</h1>  

 
<div class="row">
					<form method="POST"  action="add_schedule.php">   	
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Doctor email <span class="text-danger">*</span></label>
                                <input type="email" name="doctor_email" class="box" required data-parsley-type="email"  />
                            </div>

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Scheduled date <span class="text-danger">*</span></label>
                                <input type="date" name="doctor_schedule_date"  class="box" required data-parsley-type="email" data-parsley-trigger="keyup" />
                            </div>

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Start time <span class="text-danger">*</span></label>
                                <input type="time" name="doctor_schedule_start_time"  class="box" required data-parsley-type="email" data-parsley-trigger="keyup" />
                            </div>

                            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>End time <span class="text-danger">*</span></label>
                                <input type="time" name="doctor_schedule_end_time"  class="box" required data-parsley-type="email" data-parsley-trigger="keyup" />
                            </div>

                            
                           
                         
                            
                      
                            
        		
    			<div class="modal-footer">
          			
                      <input type="submit" name="doctorschedule"  class="btn btn-primary" value="ADD" />
					
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
</body>
</html>

