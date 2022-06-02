<?php

//doctor.php

include('../class/Appointment.php');

$object = new Appointment;



?>


<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>COVNIC</title>
   <link rel="stylesheet" href="../admin/style_admin.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

 </head>
 
 <body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
<h1><span class = "fas fa-heartbeat"><span>  Covnic</span></span></h1>

</div>
     <div class="sidebar-menu">
         <ul>
                 <!-- Nav Item - Dashboard -->
         
            <li>
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="active">
       
                <a class="nav-link" href="doctor.php">
                    <i class="fas fa-user-md"></i>
                    <span>Doctor</span></a>
            </li>
            <li>
                <a class="nav-link" href="patient.php">
                    <i class="fas fa-procedures"></i>
                    <span>Patient</span></a>
            </li>
     
            <li>
                <a class="nav-link" href="doctor_schedule.php">
                    <i class="fas fa-user-clock"></i>
                    <span>Doctor Schedule</span></a>
            </li>
            
            <li>
                <a class="nav-link" href="appointment.php">
                    <i class="fas fa-notes-medical"></i>
                    <span>Appointment</span></a>
            </li>
            <li>
                <a class="nav-link" href="index.php">
                    <i class="fas fa-notes-medical"></i>
                    <span>Logout</span></a>
            </li>
           
   
        </ul>
        </div>
        </div>
        <!-- End of Sidebar -->
         </ul>
     </div>
    </div>
    
<div class="main-content">
    <header>
        <h2>        
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Doctor management
        </h2>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search...">
        </div>

        <div class="user-wrapper">
            <img src="../images/pic1.png" width="30px" height="30px" alt="">
           <div>
               <h4>Admin</h4>
               <br>
               <small>logged in</small>
           </div>
        </div>

    </header>
    
	<br>
	<br>
	<br>
	<br>
                    

                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h3 class="m-0 font-weight-bold text-primary">Doctor List</h3>
                            	</div>
                            	<div class="col" align="right">
                           <a href="adddoc.php">Add Doctor</a>
                            	</div>
                            </div>
                        </div>

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="doctor_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Doctor ID</th>
                                            <th>Email Address</th>
                                            <th>Doctor Name</th>
                                            <th>Doctor Phone No.</th>
                                            <th>Doctor Speciality</th>
                                        
                                                                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once '../connect.php';
                                        //real all rows from database table
                                        $sql = "SELECT doctor_id, doctor_email_address,
                                       doctor_name, doctor_phone_no, doctor_expert_in FROM doctor_table";
                                        $result= $conn->query($sql);

                                        if(!$result){
                                            die("Invalid query:" . $conn->error);
                                        }
                                         //read data for each row
                                         while($row = $result->fetch_assoc()){
                                            echo  "<tr>
                                            <td>" . $row["doctor_id"] . "</td>
                                            <td>" . $row["doctor_email_address"] . "</td>
                                            <td>" . $row["doctor_name"] . "</td>
                                            <td>" . $row["doctor_phone_no"] . "</td>
                                            <td>" . $row["doctor_expert_in"] . "</td>
                                           

                                        </tr>";
                                         }

                                     
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                            



                    </body>
</html>