<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['message'];

		$to='atomcycle9@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission-Crossroads';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		mail($to, $subject, $message, $headers);
		
	
	}
?>
