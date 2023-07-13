<?php
session_start();
//appointment.php

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
         <?php
           // if($_SESSION['type'] == 'Admin')
           /// {
          //  ?>
            <li>
                <a class="nav-link" href="docland.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Doctor Dashboard</span></a>
            </li>
            <li>
       
              
            <?php
           // }
            ?>
              <li>
                <a class="nav-link" href="schedule.php">
                    <i class="fas fa-notes-medical"></i>
                    <span>Schedule Appointment</span></a>
            </li>
            
            
            <li class="active">
                <a class="nav-link" href="view_appointments.php">
                    <i class="fas fa-notes-medical"></i>
                    <span>View Appointments</span></a>
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
            Appointment management
        </h2>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search...">
        </div>

        <div class="user-wrapper">
            <img src="../images/pic1.png" width="30px" height="30px" alt="">
           <div>
               <h4>Doctor</h4>
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
                            		<h3 class="m-0 font-weight-bold text-primary">Appointments List</h3>
                            	</div>
                            	<div class="col" align="right">
                       
                            	</div>
                            </div>
                        </div>

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="appointment_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Doctor email address</th>
                                            <th>Patient email address</th>
                                            <th>Appointment Date</th>
                                          <th>Appointment Time</th>
                                           <th>Appointment Reason</th>
                                           
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once '../connect.php';
                                        //real all rows from database table
                                        $sql = "SELECT doctor_email, patient_email_address ,appointment_time,appointment_date ,
                                     reason_for_appointment FROM appointment_table";                            
                                        $result= $conn->query($sql);

                                        
                                         //read data for each row
                                         while($row = $result->fetch_assoc()){
                                            echo  "<tr>
                                            <td>" . $row["doctor_email"] . "</td>
                                            <td>" . $row["patient_email_address"] . "</td>
                                            <td>" . $row["appointment_date"] . "</td>
                                            <td>" . $row["appointment_time"] . "</td>
                                            <td>" . $row["reason_for_appointment"] . "</td>
                                            
                                                                                     

                                        </tr>";
                                         }

                                     
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   