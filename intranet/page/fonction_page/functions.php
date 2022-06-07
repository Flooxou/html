<?php

session_start();

function getHead(){
    echo '<html lang="fr">
            <head>
                <meta charset="utf-8">
                <title>LLSM</title>
                <link rel="icon" href="../img/logollsm.ico" />
                <link rel="stylesheet" href="../css/intranet.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            </head>
            <body class="body">';
}

//Fonction TEST de connexion
function testConnexion(){
    if(empty($_SESSION["role"])){
        header('Location : /index.html');
        die();
    }
}

function getHeader(){
    echo '  <header>
                <div class="jumbo bg-black">
                <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <ul>
                                <p>
                                    <img class="img1" src="../img/logollsm.png" width="200px" height="200px">
                                </p>
                            </ul>
                        </div>
                        <div class="col-sm-4 text-center">
                            <ul>
                                <br><br>
                                <p class="titre">
                                    <span style="font-size: 80px;"> L</span>uxury <span style="font-size: 80px;"> L</span>ocation 
                                    <span style="font-size: 80px;"> S</span>aint-<span style="font-size: 80px;">M</span>alo
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>';
}

function getNav(){
    echo '  <nav class="navbar navbar-expand-sm justify-content-center" id="navbarcss">
                    <!-- Links -->
                    <ul class="navbar-nav me-auto">';
                    if ($_SESSION['role'] == 'Admin' || $_SESSION['role'] == 'Moderateur') {
                        echo '<li class="nav-item">
                                <a class="nav-link" href="#" id="navtxt">Gestion des fichiers</a>
                            </li>';

                        echo '<li class="nav-item">
                                <a class="nav-link" href="gestion_utilisateurs.php" id="navtxt">Gestion des utilisateurs</a>
                            </li>';
                    }
                    echo '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="navtxt">Espace de fichiers</a>                            
                            <ul class="dropdown-menu" id="navbarcss">
                                <li><a class="dropdown-item" href="fichier_groupe.php" id="navtxt">Fichiers de groupe</a></li>
                                <li><a class="dropdown-item" href="fichier_perso.php" id="navtxt">Votre espace de fichiers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="annuaire.php" id="navtxt">Annuaire</a>
                        </li>
                    </ul>';

    echo '<div class="connexion-header">
    <span class="titre">';

    if (isset($_SESSION["nom"])) {
        echo $_SESSION["nom"] . '(' . $_SESSION["role"] . ')';
        echo '<a href="/page/fonction_page/traitement_deconnexion.php" class="btn btn-outline-warning btn-sm">Se déconnecter</a>';

    }

    echo '</div>
    </nav>';

}

function getFooter(){
    echo '      <div class="mt-4 p-5 bg-black">
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-fluid float-left" src="../img/logollsm.png" width="150px" >
                        </div>
                        <div class="col-sm-4 text-center">
                            <p class="container justify-text-center" style="color: #cca300" > Suivez nous sur les réseaux :</p>
                            <br> 
                            <div class="text-center row">
                                <div class="col-sm-3">
                                    <a href="http://www.facebook.com" target="_blank">
                                    <img src="../img/footer/facebook.png" alt="facebook" width="60px" > 
                                    </a>
                                </div>
                                <div class="col-sm-3">           
                                    <a href="http://www.instagram.com" target="_blank">
                                    <img src="../img/footer/instagram.png" alt="insta" width="60px" > 
                                    </a>  
                                </div>
                                <div class="col-sm-3">
                                    <a href="http://www.twitter.com" target="_blank">
                                    <img src="../img/footer/twitter.png" alt="twitter" width="60px" > 
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="http://www.snapchat.com" target="_blank">
                                    <img src="../img/footer/snapchat.png" alt="snap" width="60px" > 
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </div>             
                 </div>
            </body>
            </html>';
}

?>