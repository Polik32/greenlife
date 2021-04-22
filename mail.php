<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	
	$name = $_POST['name'];
	
	$tel = $_POST["tel"];
	$message = $_POST['message'];
	$error = '';
	if(!$name) {$error .= 'Please enter your name. ';}
	
	
	if(!$message || strlen($message) < 1) {$error .= 'Enter your message. ';}
	if(!$error) {
		$address = "mycompany@gmail.com"; // ATTENTION! Here we indicate the email address to which letters will be received
		$sitename = "mycompany";
		$sub = "Message from client $name from the website my company";
		$mes = "Client name: ".$name."\n\nClient phone: " .$tel."\n\nMessage: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$sitename");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
