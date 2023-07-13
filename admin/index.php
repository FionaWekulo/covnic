
<?php

//include('../class/Appointment.php');
//include('headerindex.php');
//$object = new Appointment;

//if($object->is_login())
//{
 //   header("location:".$object->base_url."admin/index.php");
//}

//login
include('../connect.php');


if(isset($_POST['login_button']))
{
         
		
			
				$admin_email_address	=	$_POST["admin_email_address"];
                $admin_password	=	$_POST["admin_password"];
                			

			$query = "SELECT * FROM admin_table WHERE admin_email_address='$admin_email_address' and admin_password = '$admin_password'";
			
            $result = mysqli_query($conn, $query);
            $count  = mysqli_num_rows($result);
            if($count>0)
            {
                echo "Login Successful!";
                header("Location: ./doctor.php");
            }
            else
            {
                echo "Login Unsuccessful!";
            }




}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN LOG IN</title>

 <!-- custom css file link  -->
 <link rel="stylesheet" text="text/css" href="../css1/style.css">
	   
    
     <!-- header section starts  -->
     
     <header class="header">
     
     <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Covnic </a>
     
     <nav class="navbar">
       <a href="../index.html">Home</a>
       <a href="../contact.html">Contact</a>
       <a href="../aboutus.html">About</a>
       <a href="../patient/register.php">Patient Registration</a>
       <a href="../jurisdiction.html">Log In</a>
     
     </nav>
     
     <div id="menu-btn" class="fas fa-bars"></div>
     
     </header>
     </head>
     
       <body>
       
     
     <section class="book" id="book">
     <br>
     <br>
     <br>
     <br><br><h1 class="heading"> <span>ADMIN </span> LOGIN</h1>  
     
      
     <div class="row">
           

         <form method="post" action="index.php">
            <h1 class="h3 mb-3 fw-normal">Admin Login</h1>
            <span id="error"></span>
            <div class="form-group">
                <input type="text" name="admin_email_address" id="admin_email_address" class="box" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email Address..." />
            </div>
            <div class="form-group">
                <input type="password" name="admin_password" id="admin_password" class="box" required  data-parsley-trigger="keyup" placeholder="Password" />
            </div>
            <div class="form-group">
                <button type="submit" name="login_button" id="login_button" class="btn btn-primary btn-user btn-block">Login</button>
            </div>
        </form>
    </main>



</body>

</html>
