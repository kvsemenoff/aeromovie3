<?php

require( dirname(__FILE__) . '/wp-load.php' );

$to = get_option( 'admin_email' ); 
//$to = "ev.camp@yandex.ru";
$phone = $_POST['phone'];
$forma = $_POST['forma'];
$uname = $_POST['uname'];
$text = $_POST['comment'];
$email = $_POST['email'];

// Формирование заголовка письма
if(!empty($_POST['subject'])){
	$subject = $_POST['subject'];
}
else{
	$subject  = "Заявка с сайта aero-movie.ru";	
}

$headers  = "From: aero-movie.ru" . "\r\n";
$headers .= "Reply-To: contact@aero-movie.ru".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";

$msg .= "<p><strong>Форма:</strong> ".$forma."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$uname."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Комментарий:</strong> ".$text."</p>\r\n";


$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);

?>