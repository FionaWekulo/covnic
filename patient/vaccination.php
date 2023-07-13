<?php
    include_once '../connect.php';
  
       

        if(isset($_POST['submit'])){
          $vaccine = $_POST['vaccine'];
          $wvaccine = $_POST['wvaccine'];
          $dose = $_POST['dose'];
          $allergies = $_POST['allergies'];
          $conditions = $_POST['conditions'];
          $conditions1 = $_POST['conditions1'];
          $illness = $_POST['illness'];
          $illness1 = $_POST['illness1'];
          $gender = $_POST['gender'];
          $lmp = $_POST['lmp'];
          $pvaccine = $_POST['pvaccine'];
          $whospital = $_POST['whospital'];
         
          
          $insert = "INSERT INTO vaccination(vaccine,wvaccine ,dose ,allergies ,conditions ,conditions1 ,illness, illness1, gender,lmp, pvaccine,whospital) VALUES ('$vaccine','$wvaccine' ,'$dose' ,'$allrgies' ,'$conditions' ,'$conditions1' ,'$illness', '$illness1', '$gender','$lmp', '$pvaccine','$whospital');";
          $result = mysqli_query($conn, $insert);

          
        }

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID CLINIC-VACCINATION </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <script src="https://kit.fontawesome.com/5a708a7c74.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css1/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
      
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
<body>

<br>
<br>
<section class="book" id="book">

    <br><br><h1 class="heading"> <span>VACCINATION</span></h1>    

    <div class="row">

        <div class="image">
            <img src="../image/medical-research-animate.svg" alt="">
        </div>

        <form action="vaccination.php" method="post"><br>
          
  
        <label><h2>Have you ever received a vaccine dose?</h2></label>
        <select name="vaccine" class="box">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select><br>

          
          <label><h2>If you have, what vaccine did you receive?</h2></label>
        <select name="wvaccine" class="box">
            <option value="pfizer">Pfizer</option>
            <option value="astrazeneca">Astrazeneca</option>
            <option value="janssen">Johnson & Johnson</option>
            <option value="moderna">Morderna</option>
          </select><br>

    <label><h2>what was the number of your last dose:</h2></label>
    <select name="dose" class="box">
        <option value="1st dose">1st dose</option>
        <option value="2nd dose">2nd dose</option>
        <option value="final dose">final dose</option>
      </select></br>

      <label><h2>If you have never been vaccinated, list any allergies you have:</h2></label>
      <input name="allergies" type="text" class="box" placeholder="Any allergies?"><br>

        <br><label><h2>Do you have any pre-existing conditions?</h2></label>
        <select name="conditions" class="box">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select></br>

          <label><h2>If you have them, list them:</h2></label>
          <input name="conditions1" type="text" class="box" placeholder="Pre-existing conditions?"><br>

      <label><h2>Are you experiencing any illness currently?</h2></label>
    <select name="illness" class="box">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select></br>
      <label><h2>If you have any illnesses, list them:</h2></label>
          <input name="illness1" type="text" class="box" placeholder="Experiencing any illness?"><br>

          <label><h2>Choose your gender:</h2></label>
          <select name="gender" class="box">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select></br>

      <label></label><h2>If female,when was the last time you had your Menstrual Period?</h2>
      <input name="lmp" type="date" class="box" placeholder="Last Menstrual Period"><br>
    
      <label><h2>What is your preffered vaccine?</h2></label>
      <select name="pvaccine" class="box">
          <option value="pfizer">Pfizer</option>
          <option value="astrazeneca">Astrazeneca</option>
          <option value="janssen">Johnson & Johnson</option>
          <option value="moderna">Morderna</option>
        </select><br>

        <label><h2>What is your hospital of choice?</h2></label>
        <input name="whospital" type="text" class="box" placeholder="What hospital would you like to be vaccinated in??"><br>

              
             
    
    <button name ="submit" class="btn">SUBMIT</button> 
    
    <button name="clear" class="btn">CLEAR</button>
 
    
  </form>
    </div>
 </body>
</html>
