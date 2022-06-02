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
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
<h1><span class = "fas fa-heartbeat"><span>  Covnic</span></span></h1>

     </div>
     <div class="sidebar-menu">
         <ul>
              
            <li class="active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li >
                <a class="nav-link" href="./doctor.php">
                    <i class="fas fa-user-md"></i>
                    <span>Doctor</span></a>
            </li>
            <li>
                <a class="nav-link" href="patient.php">
                    <i class="fas fa-procedures"></i>
                    <span>Patient</span></a>
            </li>
         
            <li>
                <a class="nav-link" href="./doctor_schedule.php">
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
            Admin Dashboard
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
    <main>
        <h3>Summary of Appointments</h3>
        <div class="cards">
                 
        <div class="card-single">
             
                
             <div>Today    <?php echo $object->get_total_today_appointment(); ?></div>

         <div>
             <span class="fas fa-clipboard-list fa-2x text-gray-300"></span>


 </div>
 </div>
 
 <div class="card-single">
           
                
           <div>Yesterday    <?php echo $object->get_total_yesterday_appointment(); ?></div>

       <div>
           <span class="fas fa-clipboard-list fa-2x text-gray-300"></span>


</div>
</div>


            <div class="card-single">
            
            
                            <div>Last week     <?php echo $object->get_total_seven_day_appointment(); ?></div>
                  
            
                    <div>
                    <span class="fas fa-clipboard-list fa-2x text-gray-300"></span>
                </div>
                </div>
                  

          
                <div class="card-single">
               
                
                            <div>Total   <?php echo $object->get_total_appointment(); ?></div>
               
                        <div>
                            <span class="fas fa-clipboard-list fa-2x text-gray-300"></span>

               
                </div>
                </div>
                  
            
        </div>

           
            
    </main>
</div>
 </body>
</html>
