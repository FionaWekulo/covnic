<?php

//verify.php
;

include('../class/Appointment.php');

$object = new Appointment;

if(isset($_GET["code"]))
{
	$object->query = "
	UPDATE patient_table 
	SET email_verify = 'Yes' 
	WHERE patient_verification_code = '".$_GET["code"]."'
	";

	$object->execute();

	

	header('location:login.php');
}



?>
