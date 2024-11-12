<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$subject=$_POST['subject'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		
		$mailto='prateekyg@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Subject :".$subject."\n"."email :".$email."\n"."phone :".$phone."\n"."Message :".$msg."\n";
		$headers="From: ".$email;

		(mail($mailto, $subject, $message, $headers));
			header("Location:index.html?mailsent");
	}
?>

