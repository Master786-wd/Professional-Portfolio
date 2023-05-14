<?php


if(isset($_POST['go'])){
$name=$_POST['name'];
$email=$_POST['mail'];
$subject=$_POST['sub'];
$msg=$_POST['msg'];
$to = "manmax730@gmail.com";
$subject = "Contact Form Submission";
$txt = "Name :".$name."\n"."E-mail :".$email."Subject :".$subject"\n"."Wrote the following :"."\n\n".$msg;
$headers = "From: .$name.@moderno.com";

mail($to,$subject,$txt,$headers);

	echo '<script>alert("Mail Sent!")</script>';
}
else
{

	echo'<script>alert("Mail Not Sent...")</script>';
}
?>