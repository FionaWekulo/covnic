<?php


    include_once '../connect.php';
   
  use Appointment;
 

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
           
      
<section class="book" id="book">
  
    
  <div class="row">
  
      <div class="image">
          <img src="../image/nerd-animate.svg" alt="" align="right"width="1000px" height="800px" >
      </div>
           
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
<h1><span class = "fas fa-heartbeat"><span>  Covnic</span></span></h1>

     </div>
     <div class="sidebar-menu">
         <ul>
                 <!-- Nav Item - Dashboard -->
       
            <li class="active">
                <a class="nav-link" href="docland.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Doctor Dashboard</span></a>
            </li>
            
            <li>
                <a class="nav-link" href="schedule.php">
                    <i class="fas fa-user-clock"></i>
                    <span>Schedule Appointment</span></a>
            </li>
            
            <li>
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
         Doctor Dashboard
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
    <main>
    <br> 
    
    
          
      
            
    </main>
</div>
 </body>
</html>
