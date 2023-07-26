<?php
//get data from form  
$name = $_POST['name'];
$dateOfBirth= $_POST['dateOfBirth'];
$Occupation= $_POST['Occupation'];
$email= $_POST['email'];
$landline= $_POST['landline'];
$mobileNo= $_POST['mobileNo'];
$address= $_POST['address'];
$to = "mohit4pc@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name ."\r\n Date of Birth =" . $dateOfBirth."\r\n Occupation =" . $Occupation. "\r\n  Email = " . $email . "\r\n landline =" . $landline. "\r\n mobileNo =" . $mobileNo ."\r\n address =" . $address  ;
$headers = "From: mohit4pc@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>