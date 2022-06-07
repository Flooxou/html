<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>
<?php

if (empty($_POST["id"])) {
    echo '<script> crea_user(); </script>';
    die();
}


$utilisateurs = json_decode(file_get_contents("users.json"), true);
foreach($utilisateurs as $key => $user) {
    if($user['id'] == $_POST['id']) {
        unset($utilisateurs[$key]);
        break;
    }
}
file_put_contents("users.json", json_encode($utilisateurs));
header("Location: ../gestion_utilisateurs.php");

?>
</body>
</html>
