<?php
include("fonction_page/functions.php");

testConnexion();

getHead();

getHeader();

getNav();

?>



<div class="container mt-5">

    <h3 class="my-4 titre">Fichiers personnels</h3>

    <ul class="text-warning">

        <?php

        $perso = $_SESSION['nom'].'_'.$_SESSION['prenom'];

        $root = $_SERVER["DOCUMENT_ROOT"]; 
        $dir = $root . '/data/'.$perso; 
        if( !file_exists($dir) ) { 
            mkdir($dir, 0770, true);
            chmod($dir, 0770);
        }

        $scandir = scandir($dir);

        foreach($scandir as $fichier){
            if($fichier != '.' and $fichier != '..'){
                ?>
                <li> <?php echo '<a href="/data/'.$perso.'/'.$fichier.'" download="'.$fichier.'">'.$fichier.'<br/></a>';?></li>
                <?php
            }
        }
        ?>
    </ul>
</div>


<div class="container">
    <br><br>
    <h3 class="my-4 titre">Déposer un fichier</h3>
    <br>
    <form action="/page/fonction_page/traitement_depotFichier.php" method="POST" enctype="multipart/form-data">
        <div class="row my-4">
            <div class="col-sm-8">
                <input type="hidden" name="MAX_FILE_SIZE" value="20000">
                <!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->   
                <input type="file" name="mon_fichier" class="form-control"><br>
            </div>
            <div class="col-sm-4">
                <input class="btn btn-success" type="submit" value="Envoyer">
            </div>
        </div>
    </form>
</div>


<?php

getFooter();

?>