<?php
session_start();
//Chargement des utilisateurs
$utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);

echo '<pre>';
print_r($utilisateurs);
echo '</pre>';
?>
<!doctype html>
<html lang="fr">
<body>
  <?php

  for ($i = 0; $i<count($utilisateurs); $i++) {

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

    echo '<span>Le login et mot de passe n\'existe pas dans la base de donnée</span>';

  }
  else {
    echo '<p> Login : '. $_SESSION["nom"] .'</p>';
    echo '<p> Role : '. $_SESSION["role"] .'</p>';
  }

  ?>

  <a href="../accueil.php"><button>Retour à l'accueil</button></a>

</body>
</html>
