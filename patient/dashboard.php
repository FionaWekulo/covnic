<?php

//dashboard.php



include('../class/Appointment.php');

$object = new Appointment;

//include('headerdash.php');

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<title>COVID CLINIC-Patient Registration</title>
		<!-- font awesome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="../css1/style.css">
		 <link rel="stylesheet" text="text/css" href="../admin/style_admin.css">
	   
	   
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic </a>

<nav class="navbar">
<a href="welcome.php"><i class="fa fa-home"></i>home</a>
				  <a href="http://127.0.0.1:5000/"><i class="fa fa-medkit"></i>prediction</a>
                  <a href="dashboard.php"><i class="fa fa-hospital-o"></i>appointment </a>
                <a href="vaccination.php"><i class="fa fa-user-plus"></i>vaccination </a>
                <a href="reviews.php"><i class="fa fa-quote-left"></i>reviews</a>
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
<br><br><h1 class="heading"> <span>APPOINTMENT </span> BOOKING </h1>  

 
<div class="row">
<div class="container-fluid">
	
	<br />
	<div class="card">
		<div class="card-header"><h4>Available Doctors</h4></div>
			<div class="card-body">
				<div class="table-responsive" width ="80%">
		      		<table class="table table-striped table-bordered" id="appointment_list_table" width ="80%">
					  <thead>
                                        <tr>
                                        <th>ScheduleID</th>
                                            <th>Doctor ID</th>
                                           
                                            <th>Scheduled Date</th>
                                         
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Consulting Time</th>
										
                                        
                                           
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once '../connect.php';
                                        //real all rows from database table
                                        $sql = "SELECT doctor_schedule_id, doctor_id, doctor_schedule_date  ,doctor_schedule_start_time,doctor_schedule_end_time ,
                                        average_consulting_time  FROM doctor_schedule_table";                            
                                        $result= $conn->query($sql);

                                        if(!$result){
                                            die("Invalid query:" . $conn->error);
                                        }
                                         //read data for each row
                                         while($row = $result->fetch_assoc()){
                                            echo  "<tr>
                                            <td>" . $row["doctor_schedule_id"] . "</td>
                                            <td>" . $row["doctor_id"] . "</td>
                                            <td>" . $row["doctor_schedule_date"] . "</td>
                                          
                                            <td>" . $row["doctor_schedule_start_time"] . "</td>
                                            <td>" . $row["doctor_schedule_end_time"] . "</td>
                                            <td>" . $row["average_consulting_time"] . "</td>
                                          
											
                                        </tr>";
                                         }

                                     
                                        ?>
                                    </tbody>
						<a href="book.php" align = "right">Book an appointment</a>
			      	</table>
			    </div>
			</div>
		</div>
	</div>

</div>
</body>
</html>