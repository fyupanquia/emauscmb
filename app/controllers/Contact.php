<?php
/**
* 
*/
class Contact
{
	private $email = "emaustablada@outlook.com";

	function __construct()
	{
		
	}

	function send(){
		$arr  = "";

		//PHPMailer Object
		$mail = new PHPMailer();

		$fullname = $_POST["name"];
		$email    = $_POST["email"];
		$message  = $_POST["message"];

		$mail->IsSMTP();
        $mail->CharSet      = "UTF-8";
        $mail->SMTPAuth     = true;
        $mail->SMTPSecure   = "ssl"; // gmail
        //$mail->SMTPSecure   = 'tls'; // outlook
        $mail->Host         = "smtp.gmail.com"; //gmail
        //$mail->Host         = "smtp.live.com"; // outlook
        $mail->Port         = 465; //puerto smtp de gmail
        //$mail->Port         = 587; //puerto smtp de outlook
        //$mail->Port       = 25; //puerto smtp de outlook
        $mail->Username     = "emaustablada@gmail.com";
        $mail->Password     = "tablada2017";

		//From email address and name
		$mail->From 	= $email;
		$mail->FromName = $fullname;

		//To address and name
		//$mail->addAddress("recepient1@example.com", "Recepient Name");
		$mail->addAddress( $this->email ); //Recipient name is optional

		//Address to which recipient will reply
		//$mail->addReplyTo("reply@yourdomain.com", "Reply");

		//CC and BCC
		//$mail->addCC("cc@example.com");
		//$mail->addBCC("bcc@example.com");

		//Send HTML or Plain Text email
		$mail->isHTML(true);

		$mail->Subject = "EMAÚS";
		
		$mail->Body    = File::render("contact.phtml",[
							                            "style"   => "color:#212c69;font-weight: bold;",
							                            "styleB"  => "color:#a8a8a8;font-weight: bold;",
							                            "fullname"=> $fullname,
							                            "email"   => $email,
							                            "message" => $message,
							                            "img"     => $_SERVER["HTTP_HOST"]
							                          ]);

		$mail->AltBody = "Servicios Sociales Solidarios";

		if(!$mail->send()) 
		{
		    //$arr["message"] = "Mailer Error: " . $mail->ErrorInfo;
		    $arr["message"] = "$mail->ErrorInfo   Este servicio no esta disponible en estos instantes. Inténtelo más tarde";
		    $arr["success"]  = false;
		} 
		else 
		{
		    $arr["message"] = "El mensaje ha sido enviado correctamente.";
		    $arr["success"]  = true;
		}

		return $arr;
	}
}