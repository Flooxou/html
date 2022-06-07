<?php
include("functions.php");

getHead();

getHeader();

getNav();

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<body class="bg-dark">
    <div class="container">
    <br><br>
    <h2 style="color:#c44dff; font-family:creattion"> Votre avis nous intéresse </h2> 
    <br><br>
    <div class="row">
        <div class="col-5">
        <div class="text-center">
                <form action="livreOr_traitement.php" class="was-validated" method="POST">
                    <div class="row form-group">                                                
                        
                        <!-------------Prenom------------>
                        <input type="text" class="form-control bg-black text-white" id="uname" name="prenom" placeholder="Nom/Prenom ou Pseudo" name="uname" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Merci de rentrer un nom</div>
                        <br><br>

                        <!-----------datepicker---------->
                        <div class="input-group date " id="datepicker">
                            <input type="text" class="form-control bg-black text-white" name="date" placeholder="Date de votre avis" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Merci de rentrer une date</div>
                            <span class="input-group-append"></span>
                        </div>

                        <!-----------zone de texte---------->
                        <div>
                            <br>
                            <textarea class="form-control bg-black text-white" rows="5" name="commentaire" id="comment" placeholder="Ecrivez votre avis" name="text" required></textarea>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Merci de rentrer un avis</div>
                        </div>

                        <!-----------bouton submit---------->
                    
                            <div class="col-5 "></div>
                            <div class="col-3 "></div>
                            <div class="col-4 ">
                                <br>
                            <button type="submit" class="btn btn-primary pull-right">envoyer l'avis</button>
                            </div>
                        </div>
                </form>

                <script type="text/javascript">
                $(function() {
                    $('#datepicker').datepicker();
                });
                </script>

            </div>
        </div>

        <div class="col-2"></div>
        <div class="col-5">

        <table class="table text-warning">
            <tbody>
            <?php
                $commentaire=json_decode(file_get_contents("livreOr.json"),true);
                foreach($commentaire as $com){
            ?> 
            <tr>
                <td><?php echo $com["prenom"];?></td>
                <td><?php echo $com["date"];?></td>
                <td><?php echo $com["com"];?></td>
            </tr>
            <?php 
            }?>
            </tbody>
        </table>

        </div>
         
    </div>
    </div>

    
    

</body>


<!---------Pied de page--------------->
<?php
getFooter();
?>