<?php
//Chargement des utilisateurs
$utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);
?>
<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>
  <?php

  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $email2 = filter_var($_POST['email2'], FILTER_SANITIZE_EMAIL);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo '<script> mail2(); </script>';
    die();
  }

  for ($i = 0; $i<count($utilisateurs); $i++) {

    if ($email == $utilisateurs[$i]["email"] || $email2 != $email) {

      echo '<script> mail1(); </script>';
      die();
    }
  }

  $cle = md5(microtime(TRUE)*100000);
  $login = substr($_POST["prenom"], 0, 1) . $_POST["nom"];

  array_push($utilisateurs, array(
      "id" => end($utilisateurs)['id']+ 1,
      "nom" => $_POST['nom'],
      "prenom" => $_POST['prenom'],
      "email" => $email,
      "login" => $login,
      "mdp" => $_POST['mdp'],
      "role" => "user",
      "cle" => $cle,
      "actif" => 0
  ));
  file_put_contents("../gestion_user/users.json", json_encode($utilisateurs));

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;


  require './PHPMailer/src/Exception.php';
  require './PHPMailer/src/PHPMailer.php';
  require './PHPMailer/src/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'florian.bourgardez@gmail.com';                     //SMTP username
  $mail->Password   = 'ymfgrufksanujvfj';                               //SMTP password
  $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('no-reply@llsm.sytes.net', 'no-reply');
  $mail->addAddress($email);     //Add a recipient

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Activation compte LLSM';
  $mail->Body    = 'Bienvenue sur LLSM,

  Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
  ou copier/coller dans votre navigateur Internet.

  http://llsm.sytes.net:8080/page/fonction_page/activation.php?log='.urlencode($login).'&cle='.urlencode($cle).'


  ---------------
  Ceci est un mail automatique, Merci de ne pas y répondre.';

  $mail->send();

  $utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);

  //header("Location: /index.html");

  ?>

</body>
</html>
