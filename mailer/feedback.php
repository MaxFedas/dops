<?php 
require 'PHPMailerAutoload.php';
require 'form_setting.php';

if(isset($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$skype = $_POST['skype'];
	$phone = $_POST['phone'];
	
	$messages  = "<h3>Пользователь сайта " .$fromName. " оставил заявку на обратный звонок.</h3> \r\n";
	$messages .= "<ul>";
	$messages .= "<li><strong>Имя: </strong>" .$name."</li>";
	if($email!=''){
		$messages .= "<li><strong>E-mail: </strong>" .$email."</li>";
	}
	if($skype!=''){
		$messages .= "<li><strong>Skype: </strong>" .$skype."</li>";
	}
	if($phone!=''){
		$messages .= "<li><strong>Телефон: </strong>" .$phone."</li>";
	}
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