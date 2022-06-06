<?php
    include("fonction_page/functions.php");

    getHead();

    getHeader();

    getNav();

echo    '<div class="row">
            <div class="col-sm-4">
                <ul>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../img/annuaire/2nd.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-white">Florent Pastis</h4>
                            <p class="card-text text-white">Seconde of LLSM</p>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>   
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../img/annuaire/ceo.jpeg" alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-white">Pascal Obistro</h4>
                            <p class="card-text text-white">DRH of LLSM</p>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../img/annuaire/drh.jpeg" alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-white">Brigitte BarreDo</h4>
                            <p class="card-text text-white">DRH of LLSM</p>
                        </div>
                    </div>
                </ul>
            </div>
        </div>';

    getFooter();
    
?>