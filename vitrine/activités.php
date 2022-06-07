<?php
include("functions.php");

getHead();

getHeader();

getNav();
?>

<!----------page principale---------->
<body class="bg-dark">

<br><br><br>
    <div class="row">
        <div class="col-sm-11 text-center">
                <h2 style="color:#cca300"><u> Nos activités</u></h2>
                <br><br>
                <br>
        </div>
    </div>

    <!------Activité 1---------->
    <section id="activité1">
        <div class="container-fluid">
            <br>
            <br>

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                <h4 style="color:#B57EB6"> - Location de véhicules sportifs </h4>
                <br><br>
                </div>
            </div>

            <br>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4 text-center my-auto">

                    <h5 class="justify-text-center" style="color: #DADADA;">
                                Nous vous proposons à travers ce service de vous louer la voiture de vos rêves! Quoi de mieux que de flanner 
                                sur le bord de mer au volant d'une super sportive? Nous vous proposons un large choix de véhicules pour toutes
                                les envies et pour tous les besoins, que vous soyez seul ou bien 5.
                    </h5>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5 text-center my-auto">
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="border-width:5px;
                                                                                         border-style:solid;
                                                                                         border-color:#B57EB6;">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/911-targa.jpg" alt="911-targa" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                        <h3>Porsche 911 Targa</h3>
                        <p>Idéale durant les jours de grand soleil !</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/ferrari-roma.jpg" alt="ferrari-roma" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                        <h3>Ferrari roma</h3>
                        <p>Pour ne pas passer inaperçu dans les rues de Saint-Malo</p>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <img src="img/urus.jpg" alt="urus" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                        <h3>Lamborghini Urus</h3>
                        <p>Conçu pour transporter toute votre famille</p>
                        </div>  
                    </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </button>
                    </div>


                </div>
                <div class="col-sm-1">
                </div>
            </div>
        </div>   <!--fin container-->
    </section>

    <br><br><br>

    <!------Activité 2---------->
    <section id="activité2">
        <div class="container-fluid">
            <br>
            <br>

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                <h4 style="color:#B57EB6"> - Location de véhicules fantaisie </h4>
                <br><br>
                </div>
            </div>

            <br>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4 text-center my-auto">

                    <h5 class="justify-text-center" style="color: #DADADA;">
                                Envie de vous démarquer? Nous avons LA solution! Et pourquoi ne pas louer des voitures que l'on ne voit que 
                                très rarement. Nous vous proposons une gamme de véhicules dans lesquels vous n'allez pas passer 
                                inaperçu que ce soit par l'esthétique ou par les performances.
                    </h5>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5 text-center my-auto">
                    <!-- Carousel -->
                    <div id="demo2" class="carousel slide" data-bs-ride="carousel" style="border-width:5px;
                                                                                          border-style:solid;
                                                                                          border-color:#B57EB6;">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/speedster.jpg" alt="speedster" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                        <h3>Aston Martin Speedster</h3>
                        <p>Laissez le vent breton vous souffler dessus</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/brabus.jpg" alt="brabus" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                        <h3>Mercedes-benz G63 Brabus</h3>
                        <p>imposez vous dans le centre ville !</p>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <img src="img/mclaren.jpg" alt="f1" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                        <h3>McLaren F1</h3>
                        <p>faites rugir le moteur de ce monstre !</p>
                        </div>  
                    </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </button>
                    </div>


                </div>
                <div class="col-sm-1">
                </div>
            </div>
        </div>

    </section>
    <br><br><br>

    <!------Activité 3---------->
    <section id="activité3">
        <div class="container-fluid">
            <br>
            <br>

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                <h4 style="color:#B57EB6"> - Initiation à la conduite sur circuits </h4>
                <br><br>
                </div>
            </div>

            <br>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4 text-center my-auto">

                    <h5 class="justify-text-center" style="color: #DADADA;">
                                Venez vivre le temps d'une heure les joies du circuit. Accompagné de pilotes chevronnés ainsi que de 
                                super bolides vous serez dans les meilleures conditions pour apprendre à rouler sur circuit tout en
                                prenant conscience des limites des voitures.
                    </h5>
                </div>
                <div class="col-sm-1 text-center my-auto">
                </div>
                <div class="col-sm-5 text-center my-auto">
                    <img class="img-fluid float-left" src="img/circuit.jpg" width="100%" style="border-width:5px;
                                                                                                border-style:solid;
                                                                                                border-color:#B57EB6;" >
                </div>
                <div class="col-sm-1 text-center my-auto">
                </div>
            </div>
        </div>
    </section>
    <br><br><br>

    <!------Activité 4---------->
    <section id="activité4">
    <div class="container-fluid">
            <br>
            <br>

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                <h4 style="color:#B57EB6"> - Tours de circuits avec pilote </h4>
                <br><br>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4 text-center my-auto">

                    <h5 class="justify-text-center" style="color: #DADADA;">
                        Amateur de sensations fortes, laissez vous bercer par les virages du circuit sans être derrière le 
                                volant. Nos pilotes s'occupent de vous, montez dans la voiture et vous voilà partit pour 20 minutes
                                à couper le souffle.
                    </h5>
                </div>
                <div class="col-sm-1 text-center my-auto">
                </div>
                <div class="col-sm-5 text-center my-auto">
                    <img class="img-fluid float-left" src="img/circuit_pilote.webp" width="100%" style="border-width:5px;
                                                                                                border-style:solid;
                                                                                                border-color:#B57EB6;" >
                </div>
                <div class="col-sm-1 text-center my-auto">
                </div>
            </div>
        </div>

    </section>
    <br><br>



</body>


<!---------Pied de page--------------->
<?php
getFooter();
?>