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
/*function testConnexion(){
    if(empty($_SESSION("role"))){
        header('Location : '. index.html);
        die();
    }
}*/

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
                        <div class="col-sm-8">
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
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navtxt">Gestion des fichiers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navtxt">Gestion des utilisateurs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="navtxt">Espace de fichiers</a>                            
                            <ul class="dropdown-menu" id="navbarcss">
                                <li><a class="dropdown-item" href="#" id="navtxt">Link</a></li>
                                <li><a class="dropdown-item" href="#" id="navtxt">Fichiers du groupe X</a></li>
                                <li><a class="dropdown-item" href="#" id="navtxt">Votre espace de fichiers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="annuaire.php" id="navtxt">Annuaire</a>
                        </li>
                    </ul>
            </nav>';
}

function getFooter(){
    echo '      <div class="mt-4 p-5 rounded text-center" id="foottxt">
                    ###FOOTER### !!! ###AFAIRE###
                </div>
            </body>
            </html>';
}

?>