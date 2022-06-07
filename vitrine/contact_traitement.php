<!doctype html>
<html lang="fr">
<head>
</head>
<body>

<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require './page/page_fonction/PHPMailer/src/Exception.php';
require './page/page_fonction/PHPMailer/src/PHPMailer.php';
require './page/page_fonction/PHPMailer/src/SMTP.php';

  //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


  //Server settings
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'florian.bourgardez@gmail.com';                     //SMTP username
  $mail->Password   = 'ymfgrufksanujvfj';                               //SMTP password
  $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom($_POST["email"], $_POST["nom"].' '.$_POST["prenom"]);
  $mail->addAddress('florian.bourgardez@gmail.com');     //Add a recipient

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Contact depuis formualire';
  $mail->Body    = $_POST["message"];

  $mail->send();

$commentaire=json_decode(file_get_contents("contact.json"),true);

if($commentaire==null){
  $commentaire=array();
}

array_push($commentaire, array(
    "prenom" => $_POST["prenom"],
    "nom" => $_POST["nom"],
    "numTel" => $_POST["tel"],
    "email" => $_POST["email"]
));
file_put_contents("contact.json", json_encode($commentaire));

header("Location: ./contact.php");

?>

</body>
</html>