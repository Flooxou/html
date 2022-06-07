<?php
session_start();
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

  for ($i = 0; $i<count($utilisateurs); $i++) {

    if ($utilisateurs[$i]['actif'] == 0) {

      echo '<script> inactif(); </script>';
      die();

    }

    if ($_POST['login'] == $utilisateurs[$i]['login'] && $_POST['mdp'] == $utilisateurs[$i]['mdp']) {

      $_SESSION["nom"] = $utilisateurs[$i]["nom"];
      $_SESSION["prenom"] = $utilisateurs[$i]["prenom"];

      if ($utilisateurs[$i]["role"] == 'admin') {
        $_SESSION["role"] = 'Admin';
      }
      else if ($utilisateurs[$i]["role"] == 'modo') {
        $_SESSION["role"] = 'Moderateur';
      } 
      else {
        $_SESSION["role"] = "Utilisateur";
    }
  }
}

  if (empty($_SESSION['nom'])) {

    echo '<script> error_login(); </script>';
    die();

  }
  else {
    header("Location: ../accueil.php");
  }

  ?>

</body>
</html>
