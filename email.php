
<?php
/*$to = 'neiro70@gmail.com';
$subject = "Ejemplo";
$body = "Ejemplo de mensaje \n\n";
/*$headers = 'From:  no-reply@pubfish.com' . "\r\n" .
'Reply-To:  no-reply@pubfish.com ' . "\r\n" .
'X-Mailer: PHP/';// . phpversion();*/

/*$headers = 'From: u801037716@srv36.main-hosting.eu' . "\r\n" .
'Reply-To: nu801037716@srv36.main-hosting.eu' . "\r\n" .
'X-Mailer: PHP/';// . phpversion();


if (mail($to, $subject, $body, $headers)) echo 'Sent';
else echo 'Error';
exit();*/

$txtnombre=$_POST['txtnombre'];
$txtemail=$_POST['txtemail'];
$txtmensaje=$_POST['txtmensaje'];

$txtmensaje="Escribe: {$txtnombre} {$txtemail}
{$txtmensaje} ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <jorge.luis.martinez.alfonso@ideasystems.esy.es>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$to="neiro70@gmail.com";
$subject="Hablemos de negocios";

if(mail($to,$subject ,$txtmensaje ,$headers) )
	echo 'Exito';
else{
	echo 'Error';
}


//echo "exito";


?>
