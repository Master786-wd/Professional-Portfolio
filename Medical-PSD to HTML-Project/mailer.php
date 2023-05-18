<?php


if(isset($_POST['go'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$msg=$_POST['message'];
$to = "manmax730@gmail.com";
$subject = "User Enquiry Form Submission";
$txt = "Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
$headers = "From: .$name.@medicare.com";

mail($to,$subject,$txt,$headers);

	echo '<script>alert("Mail Sent!")</script>';
}
else
{

	echo'<script>alert("Mail Not Sent...")</script>';
}
?>