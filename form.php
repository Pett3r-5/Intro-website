<?php


  $visitor_email = $_POST['email'];

  $message = $_POST['texto'];
	
	
	$to = "e.petter@hotmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  
    echo "Mensagem Enviada";
 ?>