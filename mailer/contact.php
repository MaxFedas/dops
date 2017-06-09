<?php 
require 'PHPMailerAutoload.php';
require 'form_setting.php';

if(isset($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$messages  = "<h3>Пользователь сайта " .$fromName. " оставил сообщение.</h3> \r\n";
	$messages .= "<ul>";
	$messages .= "<li><strong>Имя: </strong>" .$name."</li>";
	$messages .= "<li><strong>E-mail: </strong>" .$email."</li>";
	$messages .= "<li><strong>Сообщение: </strong>" .$message."</li>";
	$messages .= "</ul> \r\n";

	$mail = new PHPMailer;

	$mail->From = $from;
	$mail->FromName = $fromName;
	$mail->addAddress($to, 'Admin');

	$mail->isHTML(true); 
	$mail->CharSet = $charset;

	$mail->Subject = $subj;
	$mail->Body    = $messages;

	if(!$mail->send()) {
	    print json_encode(array('status'=>0));
	} else {
	    print json_encode(array('status'=>1));
	}

}
	
?>