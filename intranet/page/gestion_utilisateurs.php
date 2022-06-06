  <?php

  include("fonction_page/functions.php");

    testConnexion();

    getHead();

    getHeader();

    getNav();
    

  ?>
<div class="container">
  <br><br>
  <h3 class="my-4 titre">Ajouter un utilisateur</h3>
  <br>
  <form action="utilisateur/add_user.php" method="POST">
    <div class="row my-4">
      <div class="col-2">
        <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
      </div>
      <div class="col-2">
        <input type="text" class="form-control" placeholder="Nom" name="nom" required>
      </div>
      <div class="col-2">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
      </div>
      <div class="col-2">
        <input type="text" class="form-control" placeholder="Mot de passe" name="mdp" required>
      </div>
      <div class="col-2">
        <input type="text" class="form-control" placeholder="Rôle" name="role" required>
      </div>
      <div class="col-2">
        <input type="submit" class="btn btn-success" value="Ajouter">
      </div>
    </div>
  </form>
  <br><br><br>
  <form action="utilisateur/supp_user.php" method="POST">
    <div class="row my-4">
      <div class="col-2">
        <input type="text" class="form-control" placeholder="Id" name="id" required>
      </div>
      <div class="col-2">
        <input type="submit" class="btn btn-danger" value="Supprimer">
      </div>
    </div>
  </form>

</div>

<?php
getFooter();
?>