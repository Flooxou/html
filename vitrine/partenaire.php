<?php
include("functions.php");

getHead();

getHeader();

getNav();
?>

<!----------page principale---------->
<body class="bg-dark">
    <br><br><br><br>
    <div class="container">
    <h3 class="text-center" style="color:#c44dff">Nos Partenaires</h3>
    <br><br>
        <div class="row">
        <div class="col">
            <div class="card bg-warning text-center" style="width:100%">
                <img class="card-img-top" src="img/logotopgear.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">TopGear</h4>
                    <p class="card-text">Nos voitures apparaissent dans des émissions</p>
                    <div class="float-start">
                        <a href="https://www.topgear-magazine.fr/" target="_blank" class="btn btn-dark">Leur site</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-warning text-center" style="width:100%">
                <img class="card-img-top" src="img/mumu.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Police Municipale</h4>
                    <p class="card-text">Nous couvre en cas de délit</p>
                    <div class="float-start">
                        <a href="https://www.ville-saint-malo.fr/police-municipale/" target="_blank" class="btn btn-dark">Leur site</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-warning text-center" style="width:100%">
                <img class="card-img-top" src="img/automoto.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">AutoMoto</h4>
                    <p class="card-text">Le TopGear à la française</p>
                    <div class="float-start">
                        <a href="https://www.auto-moto.com/" target="_blank" class="btn btn-dark">Leur site</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <br><br><br><br><br>

    <div class="container">
        <h3 class="text-center" style="color:#c44dff">Nos sponsors</h3>
        <div class="row">
            <div class="col">
                <img class="card-img-top" src="img/Rotul.png" alt="Card image">
            </div>
            <div class="col">
                <img class="card-img-top" src="img/Gastro.png" alt="Card image">
            </div>
            <div class="col">
                <img class="card-img-top" src="img/Tagheule.png"  alt="Card image">
            </div>
            <div class="col">
                <img class="card-img-top" src="img/Pireglisse.png" alt="Card image">
            </div>
            <div class="col">
                <img class="card-img-top" src="img/Micheline.png" alt="Card image">
            </div>
        </div>
    </div>



</body>
<!---------Pied de page--------------->
<?php
getFooter();
?>