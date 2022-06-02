<?php
//Chargement des utilisateurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
$utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);
?>
<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="./js/functions.js"></script>
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

    if ($email == $utilisateurs[$i]['email'] || $email2 != $email) {

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

  $destinataire = $email;
  $sujet = "Activer votre compte" ;
  $entete = "From: no-reply@llsm.sytes.net";


  $message = 'Bienvenue sur LLSM,

  Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
  ou copier/coller dans votre navigateur Internet.

  http://localhost/intranet/page/fonction_page/activation.php?log='.urlencode($login).'&cle='.urlencode($cle).';


  ---------------
  Ceci est un mail automatique, Merci de ne pas y répondre.';


  mail($destinataire, $sujet, $message, $entete) ;

  $utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);

  echo '<pre>';
  print_r($utilisateurs);
  echo '</pre>';

  ?>

  <a href="index.html"><button>Retour à l'accueil</button></a>

</body>
</html>
