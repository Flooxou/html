<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>
<?php

if (empty($_POST["modif"])) {
    echo '<script> mod_user(); </script>';
}


$utilisateurs = json_decode(file_get_contents("users.json"), true);

$utilisateurs[$_POST['id']-1][$_POST['catModif']] = $_POST['modif'];

file_put_contents("users.json", json_encode($utilisateurs));
header("Location: ../gestion_utilisateurs.php");




?>

</body>
</html>