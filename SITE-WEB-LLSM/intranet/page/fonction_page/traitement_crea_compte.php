<?php
//Chargement des utilisateurs
$utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);

?>
<!doctype html>
<html lang="fr">
<body>
  <?php

  for ($i = 0; $i<count($utilisateurs); $i++) {

    if ($_POST['email'] != $utilisateurs[$i]['email']) {

        

    }
  }

    echo '<pre>';
    print_r($utilisateurs);
    echo '</pre>';

  ?>

  <a href="../accueil.php"><button>Retour à l'accueil</button></a>

</body>
</html>
