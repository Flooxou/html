<?php
  $user1 = array(   array('id' => 1,
                          'nom' => "MEREL",
                          'prenom' => "Benjamin",
                          'login' => "bmerel",
                          'mdp' => "bmerel",
                          'role' => "admin"),
                    
                    array('id' => 2,
                          'nom' => "BOURGARDEZ",
                          'prenom' => "Florian",
                          'login' => "fbourgardez",
                          'mdp' => "fbgdz",
                          'role' => "modo"),

                    array('id' => 3,
                          'nom' => "PATY",
                          'prenom' => "Corentin",
                          'login' => "cpaty",
                          'mdp' => "cpaty",
                          'role' => "user"));

  file_put_contents("users.json", json_encode($user1));
  header("Location: /intranet/index.html");
?>