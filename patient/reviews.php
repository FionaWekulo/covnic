<?php
include_once '../connect.php';

   

    if(isset($_POST['submit'])){
      
      $patient_email_address = $_POST['patient_email_address'];
      $comment = $_POST['comment'];
     
     
      
      $insert = "INSERT INTO reviews(patient_email_address, comment) VALUES ('$patient_email_address' ,'$comment');";
      $result = mysqli_query($conn, $insert);

     
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVNIC-REVIEWS </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <script src="https://kit.fontawesome.com/5a708a7c74.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css1/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    
      
<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic</a>

<nav class="navbar">
                  <a href="welcome.php"><i class="fa fa-home"></i>home</a>
                  <a href="http://127.0.0.1:5000/"><i class="fa fa-medkit"></i>prediction</a>
                <a href="dashboard.php"><i class="fa fa-hospital-o"></i>appointment </a>
                <a href="vaccination.php"><i class="fa fa-user-plus"></i>vaccination </a>
                <a href="reviews.php"><i class="fa fa-quote-left"></i>reviews</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>



<body>
<br>
<br>
<br>
<br>
<section class="book" id="book">

    <br><br><h1 class="heading"> <span>GIVE US </span> FEEDBACK</h1>    

    <div class="row">

        <div class="image">
            <img src="../image/people-talking-animate.svg" alt="">
        </div>

        <form action="reviews.php" method="post"><br>
          

                <label><h2>Email</h2></label>
                <input type="email" name="patient_email_address" placeholder="your email" class="box">
               </br>

                <label><h2>Comment</h2></label>
                <input type="text" name="comment" placeholder="your comment" class="box">
                </br>

              <input type="submit" name="submit" value="submit" class="btn">
           
       

           


              

            </form>
        </div>
        </section>
        
<!-- booking section ends -->
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>

</html>