<!doctype html>
<html lang="fr">
<head>
  <script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>
<?php

session_start();

if ($_FILES['mon_fichier']['error']) {
  switch ($_FILES['mon_fichier']['error']){
    case 1: // UPLOAD_ERR_INI_SIZE
      echo '<script> taille_limit_serv(); </script>'; 
      break;
    case 2: // UPLOAD_ERR_FORM_SIZE
      echo '<script> taille_limit_form(); </script>'; 
      break;
    case 3: // UPLOAD_ERR_PARTIAL
      echo '<script> corrompue(); </script>'; 
      break;
    case 4: // UPLOAD_ERR_NO_FILE
      echo '<script> taille_null(); </script>'; 
      break;
  }

}else{
  
$nom = $_FILES['mon_fichier']['tmp_name'];
$nomdestination = '/var/www/html/intranet/data/'.$_SESSION['nom'].'_'.$_SESSION['prenom'].'/'.$_FILES['mon_fichier']['name'];
move_uploaded_file($nom, $nomdestination);
header("Location: ../fichier_perso.php");


}


?>
</body>
</html>
