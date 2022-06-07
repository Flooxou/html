<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>

<?php

$utilisateurs = json_decode(file_get_contents("../gestion_user/users.json"), true);


$login = $_GET['log'];
$cle = $_GET['cle'];

for ($i = 0; $i<count($utilisateurs); $i++) {

  if ($login == $utilisateurs[$i]['login']) {

    $clebdd = $utilisateurs[$i]['cle'];
    $actif = $utilisateurs[$i]['actif'];

    if ($actif == '1') {

      echo "<script> crea_compte_active(); </script>";
      die();

    }
    else {

      if ($clebdd == $cle) {

        $utilisateurs[$i]['actif'] = 1;
        file_put_contents("../gestion_user/users.json", json_encode($utilisateurs));
        echo "<script> crea_compte_activation(); </script>";
        die();

      }

      else {

        echo "<script> crea_compte_error(); </script>";
        die();

      }

    }

  }
}



?>


</body>
</html>

