<?php

function getHead(){
    echo '  <html lang="fr">
            <head>
                <meta charset="utf-8">
                <title>LLSM</title>
                <link rel="shortcut icon" href="img/logollsm.png">
                <link rel="stylesheet" href="page_css_vitrine.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>                
            </head>';
}

function getHeader(){
    echo '  
      <header>
        <div class="p-5 bg-black">
            <div class="row">
              <div class="col-sm-4">
                <img class="img-fluid float-left" src="img/logollsm.png" width="220px" >
              </div>
              <div class="col-sm-8">
                <br>
                <br>
                <div class="container justify-text-center ">
                  <div style="font-size:300%; color:#cca300">
                    <span style="font-size: 150%;"> L</span>uxury <span style="font-size: 150%;"> L</span>ocation 
                    <span style="font-size: 150%;"> S</span>aint-<span style="font-size: 150%;">M</span>alo
                  </div>
                </div>
              </div>
            </div>             
          </div>
      </header>';
}

function getNav(){
    echo '
    <nav class="navbar navbar-expand-sm bg-black navbar-dark justify-content-center ">
          <ul class="navbar-nav">
          
            <li class="nav-item">
                <a class="btn btn-black" style="color:#cca300" href="index.php"><h5>Accueil</h5></a>
            </li>
            
            <li>
              <div class="dropdown" ">
                <button class="btn btn-black dropdown-toggle  type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  <h5 style="color:#cca300">Activités</h5>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="activités.php#activité1">Location Sportives</a></li>
                <li><a class="dropdown-item" href="activités.php#activité2">Location Fantaisie</a></li>
                <li><a class="dropdown-item" href="activités.php#activité3">Initiation Circuit</a></li>
                <li><a class="dropdown-item" href="activités.php#activité4">Tour de Piste</a></li>
                </ul>
              </div>
            </li>

            <li>
            <div class="dropdown" ">
              <button class="btn btn-black dropdown-toggle  type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <h5 style="color:#cca300">Contact</h5>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item" href="contact.php">Nous contacter</a></li>
              <li><a class="dropdown-item" href="livreOr.php">Donnez votre avis</a></li>
              </ul>
            </div>
          </li>

              <li class="nav-item">
                <a class="btn btn-black" style="color:#cca300" href="partenaire.php"><h5>Partenaires</h5></a>
              </li>  

              <li>
              <div class="dropdown" ">
                <button class="btn btn-black dropdown-toggle  type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  <h5 style="color:#cca300">Qui sommes nous</h5>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="qui.php#histoire">Histoire</a></li>
                <li><a class="dropdown-item" href="qui.php#chiffre">Chiffres-clés</a></li>
                <li><a class="dropdown-item" href="qui.php#client">Nos clients</a></li>
                <li><a class="dropdown-item" href="qui.php#implantation">Nos implantations</a></li>
                </ul>
              </div>
            </li>
              
          </ul>   
  </nav>';
}

function getFooter(){
    echo '
    <footer>
      <div class="mt-4 p-5 bg-black">
        <div class="row">
          <div class="col-sm-4">
            <img class="img-fluid float-left" src="img/logollsm.png" width="150px" >
          </div>
          <div class="col-sm-4 text-center">
            <p class="container justify-text-center" style="color: #cca300" > Suivez nous sur les réseaux:</p>
            <br> 
            <div class="text-center">
              <a href="http://www.facebook.com" target="_blank">
              <img src="img/facebook.png" alt="facebook" width="40px" > 
              </a>            
              <a href="http://www.instagram.com" target="_blank">
              <img src="img/instagram.png" alt="insta" width="40px" > 
              </a>  
              <a href="http://www.twitter.com" target="_blank">
              <img src="img/twitter.png" alt="twitter" width="40px" > 
              </a>
              <a href="http://www.snapchat.com" target="_blank">
              <img src="img/snapchat.png" alt="snap" width="40px" > 
              </a>  
            </div>
          </div>
          <div class="col-sm-4">
          <div class="text-center">
          <br>
          <br>
          <br>
          <p class="container justify-text-center" style="color: #cca300"> connection intranet: </p>
          <a style="color: #c44dff" href="http://llsm.sytes.net:8080" target="_blank"> --Intranet-- </a>         
          </div>
          </div>
        </div>             
     </div>
  </footer>';
}

