<?php

//login.php
include('../connect.php');
//include('../action.php');
//$base_url = 'http://localhost/project/';

if(isset($_POST['doctor_register_button']))
{
         
		
			
				$doctor_email_address	=	$_POST["doctor_email_address"];
				$doctor_password				=	$_POST["doctor_password"];
				$doctor_name			=	$_POST["doctor_name"];
                $doctor_phone_no				=$_POST["doctor_phone_no"];
                $doctor_address				=$_POST["doctor_address"];
			$doctor_date_of_birth		=$_POST["doctor_date_of_birth"];
			$doctor_degree				=	$_POST["doctor_degree"];
				$doctor_expert_in		=	$_POST["doctor_expert_in"];
                $doctor_status	=	"active";
				
				
				

			$insert = "INSERT INTO doctor_table 
                (doctor_email_address, doctor_password, doctor_name, doctor_phone_no, doctor_address, doctor_date_of_birth, doctor_degree, doctor_expert_in,  doctor_status) 
			VALUES ('$doctor_email_address', '$doctor_password', '$doctor_name',  '$doctor_phone_no', '$doctor_address', '$doctor_date_of_birth', '$doctor_degree', '$doctor_expert_in',  '$doctor_status');";
			
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
		<title>COVID CLINIC-doctor Registration</title>
		<!-- font awesome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="../css1/style.css">
	   
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic </a>

<nav class="navbar">
	
    <a href="doctor.php">Back</a>
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
<br><br><h1 class="heading"> <span>DOCTOR </span> REGISTRATION </h1>  

 
<div class="row">
					<form method="POST"  action="adddoc.php">
	

        		<div class="modal-body">
        			<span id="form_message"></span>
		          	<div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Doctor Email Address <span class="text-danger">*</span></label>
                                <input type="text" name="doctor_email_address" id="doctor_email_address" class="box" required data-parsley-type="email" data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-md-6">
                                <label>Doctor Password <span class="text-danger">*</span></label>
                                <input type="password" name="doctor_password" id="doctor_password" class="box" required  data-parsley-trigger="keyup" />
                            </div>
		          		</div>
		          	</div>


                      
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Doctor Name <span class="text-danger">*</span></label>
                                <input type="text" name="doctor_name" id="doctor_name" class="box" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-md-6">
                                <label>Doctor Phone No. <span class="text-danger">*</span></label>
                                <input type="text" name="doctor_phone_no" id="doctor_phone_no" class="box" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Doctor Address </label>
                                <input type="text" name="doctor_address" id="doctor_address" class="box" />
                            </div>
                            <div class="col-md-6">
                                <label>Doctor Date of Birth </label>
                                <input type="date" name="doctor_date_of_birth"  class="box" required data-parsley-type="date" data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Doctor Degree <span class="text-danger">*</span></label>
                                <input type="text" name="doctor_degree" id="doctor_degree" class="box" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-md-6">
                                <label>Doctor Speciality <span class="text-danger">*</span></label>
                                <input type="text" name="doctor_expert_in" id="doctor_expert_in" class="box" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>

                    
        		</div>
        		<div class="modal-footer">
          			
                      <input type="submit" name="doctor_register_button" id="doctor_register_button" class="btn btn-primary" value="Register" />
					
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


