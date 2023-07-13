<?php


    include_once '../connect.php';
   
  
         
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>COVNIC</title>
   <link rel="stylesheet" href="land.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <!-- <script src="https://www.momentcrm.com/embed"></script>
<script>
  MomentCRM('init', {
    'teamVanityId': 'fiona1',
    'doChat': true,
    'doTracking': true,
  });
</script>-->
 </head>
 <body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
<h1><span class = "fas fa-heartbeat"><span>  Covnic</span></span></h1>

     </div>
     <div class="sidebar-menu">
         <ul>
             <li class="active"><a href="welcome.php"><span class="las la-igloo"></span><span>Welcome</span></a></li>
             <li><a href="http://127.0.0.1:5000/"><span class="las la-users"></span><span>Prediction</span></a></li>
             <li><a href="dashboard.php"><span class="las la-user-circle"></span><span>Appointment Booking</span></a></li>
             <li><a href="vaccination.php"><span class="las la-clipboard-list"></span><span>Vaccination Booking</span></a></li>
             <li><a href="reviews.php"><span class="las la-receipt"></span><span>Reviews</span></a></li>
         </ul>
     </div>
    </div>
<div class="main-content">
    <header>
        <h2>        
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Welcome
        </h2>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search...">
        </div>

        <div class="user-wrapper">
            <img src="../images/pic1.png" width="30px" height="30px" alt="">
           <div>
               <h4>Patient</h4>
               <small>logged in</small>
           </div>
        </div>

    </header>
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
               
                   <a href="../aboutus.html">About us</a>
                    </div>
                    <div>
                    <span class="las la-users"></span>
                </div>
                </div>
                  

                <div class="card-single">
                <div>
              
                <a href="../contact.html">Contact us</a>
                    </div>
                    <div>
                <span class="las la-phone"></span>
                </div>
                </div>
               
                <div class="card-single">
                <div>
               
               <a href="../index.html">Log Out</a>
                    </div>
                    <div>
                    <span class="las la-sign-out-alt">
                    </span>
                </div>
                </div>
                  
                
        </div>

           
            
    </main>
</div>
 </body>
</html>
