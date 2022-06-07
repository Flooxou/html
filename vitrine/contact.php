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

<!----------page principale---------->

<body class="bg-dark">
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white"><i class="fa fa-envelope"></i> Nous contacter
                </div>
                <div class="card-body">
                    <form action="contact_traitement.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Prénom</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entrez votre Email" required>
                        </div>
                        <div class="form-group">
                            <label for="name">n° téléphone</label>
                            <input type="text" class="form-control" name="tel" placeholder="Entrez votre n° de téléphone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="4" required></textarea>
                        </div>
                        <div class="mx-auto">
                            <br>
                        <button type="submit" class="btn btn-warning text-right">Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-warning text-white text-uppercase"><i class="fa fa-home"></i> Addresse</div>
                <div class="card-body">
                    <p>40 Rue de la Croix Desilles</p>
                    <p>35400 Saint-Malo</p>
                    <p>France</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. +33 02.02.02.02.02</p>

                </div>
                

            </div>
            
        </div>
       
    </div>
</div>
</body>

<?php
getFooter();
?>