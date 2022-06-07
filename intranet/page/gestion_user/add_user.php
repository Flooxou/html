<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>

<?php

if (empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["mdp"]) || empty($_POST["role"]) || empty($_POST["email"]) || empty($_POST["groupes"])) {
    echo '<script> crea_user(); </script>';
    die();
}

$utilisateurs = json_decode(file_get_contents("users.json"), true);


array_push($utilisateurs, array(
    "id" => end($utilisateurs)['id']+ 1,
    "nom" => $_POST['nom'],
    "prenom" => $_POST['prenom'],
    "email" => $_POST['email'],
    "login" => substr($_POST["prenom"], 0, 1) . $_POST["nom"],
    "mdp" => $_POST['mdp'],
    "role" => $_POST['role'],
    "groupes" => $_POST['groupes'],
    'cle' => md5(microtime(TRUE)*100000),
    'actif' => 1
));
file_put_contents("users.json", json_encode($utilisateurs));
header("Location: ../gestion_utilisateurs.php");

?>

</body>
</html>
