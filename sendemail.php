<?php

//$to, $subject, $message, $headers

	$to = "raj.maximustrades@gmail.com";

	$subject = "Enquiry".strftime("%T", time());
	
$name=$_POST['name'];
$from = $_POST['email'];
$mob = $_POST['mobile'];
$msg = $_POST['msg'];
	
	
	$message="Name:" . $name."\n";
	$message.="Email:" . $from."\n";
$message.="Mobile:" . $mob."\n";
$message.="Message:" . $msg."\n";
	
	$headers = "From: {$from}\n";
	$headers .= "Reply-To: {$from}\n";
	$headers .= "X-Mailer: PHP/".phpversion()."\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/plain; charset=iso-8859-1";
	
	$result = mail($to, $subject, $message, $headers);
	
	?>
	<script>
	alert("Thanks you for contacting us!!!");
	window.location.href="index.php";
	</script>
  
