<?php

include("fonction_page/functions.php");

testConnexion();

getHead();

getHeader();

getNav();

if ($_SESSION['role'] == 'Utilisateur') {

  header("Location: accueil.php");

}


?>



<div class="container mt-5">
  <table class="table text-warning">
    <tbody>
      <?php
      $utilisateurs = json_decode(file_get_contents("gestion_user/users.json"), true);
      foreach ($utilisateurs as $user) {
        ?>
        <tr>
          <th scope="row"><?php echo $user['id']; ?></th>
          <td><?php echo $user['nom']; ?></td>
          <td><?php echo $user['prenom']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo $user['login']; ?></td>
          <td><?php echo $user['mdp']; ?></td>
          <td><?php echo $user['role']; ?></td>
          <td><?php echo $user['groupes']; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<div class="container">
  <?php

  if ($_SESSION['role'] == 'Admin') {
    ?>
    <br><br>
    <h3 class="my-4 titre">Ajouter un utilisateur</h3>
    <br>
    <form action="/page/gestion_user/add_user.php" method="POST">
      <div class="row my-4">
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="Nom" name="nom" required>
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="Prenom" name="prenom" required>
        </div>
        <div class="col-sm-2">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="Mot de passe" name="mdp" required>
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="Rôle" name="role" required>
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="Groupes" name="groupes" required>
        </div>
        <br>
      </div>
      <div class="col-sm-2">
        <input type="submit" class="btn btn-success" value="Ajouter">
      </div>    
    </form>
    <br>
    <form action="/page/gestion_user/del_user.php" method="POST">
      <h3 class="my-4 titre">Supprimer un utilisateur</h3>
      <div class="row my-4">
        <div class="col-sm-2">
          <div class="form-floating">
            <select id="id" name="id" class="form-select">
              <?php 
              foreach ($utilisateurs as $user) {
                $id = $user["id"];
                echo '<option value="'.$id.'">'.$id.'</option>';
              }
              ?>
            </select>
            <label for="id" class="form-label">ID</label>
          </div>
        </div>
        <div class="col-sm-2">
          <input type="submit" class="btn btn-danger" value="Supprimer">
        </div>
      </div>
    </form>
  <?php } ?>
  <br>
  <form action="/page/gestion_user/mod_user.php" method="POST">
    <h3 class="my-4 titre">Modifier un utilisateur</h3>
    <div class="row my-5">
      <div class="col-sm-2">
        <div class="form-floating">
          <select id="id" name="id" class="form-select">
            <?php 
            foreach ($utilisateurs as $user) {
              $id = $user["id"];
              echo '<option value="'.$id.'">'.$id.'</option>';
            }
            ?>
          </select>
          <label for="id" class="form-label">ID</label>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-floating">
          <select id="modif" name="catModif" class="form-select">
            <?php 
            if ($_SESSION['role'] == 'Admin') {
              ?>
              <option value="nom">Nom</option>
              <option value="prenom">Prenom</option>
              <option value="email">Email</option>
              <option value="login">Login</option>
              <option value="mdp">Mot de passe</option>
              <option value="role">Role</option>
              <option value="groupes">Groupes</option>
              <?php
            }
            else {
              ?>
              <option value="groupes">Groupes</option>
              <?php
            }
            ?>
          </select>
          <label for="modif" class="form-label">Catégorie à modifier</label>
        </div>
      </div>
      <div class="col-sm-6 h-50">
        <div>
          <textarea class="form-control" rows="2" id="modification" name="modif" placeholder="Modification:"></textarea>
        </div>
      </div>
      <div class="col-sm-2">
        <input type="submit" class="btn btn-warning" value="Modifier">
      </div>
    </div>
  </form>

</div>

<?php
getFooter();
?>