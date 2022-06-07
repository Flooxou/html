<?php

$commentaire=json_decode(file_get_contents("livreOr.json"),true);

if($commentaire==null){
    $commentaire=array();
}

array_push($commentaire, array(
    "prenom" => $_POST["prenom"],
    "date" => $_POST["date"],
    "com" => $_POST["commentaire"]
));
file_put_contents("livreOr.json", json_encode($commentaire));

header("Location: ./livreOr.php");
?>
