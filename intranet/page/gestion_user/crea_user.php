<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  $user1 = array(   array('id' => 1,
                          'nom' => "MEREL",
                          'prenom' => "Benjamin",
                          'email' => "benjamin.mrl21@gmail.com",
                          'login' => "bmerel",
                          'mdp' => "bmerel",
                          'role' => "admin",
                          'cle' => md5(microtime(TRUE)*100000),
                          'actif' => 1),

                    array('id' => 2,
                          'nom' => "BOURGARDEZ",
                          'prenom' => "Florian",
                          'email' => "florian.bgdz@gmail.com",
                          'login' => "fbourgardez",
                          'mdp' => "fbgdz",
                          'role' => "modo",
                          'cle' => md5(microtime(TRUE)*100000),
                          'actif' => 1),

                    array('id' => 3,
                          'nom' => "PATY",
                          'prenom' => "Corentin",
                          'email' => "patycorentin@gmail.com",
                          'login' => "cpaty",
                          'mdp' => "cpaty",
                          'role' => "user",
                          'cle' => md5(microtime(TRUE)*100000),
                          'actif' => 1));

  file_put_contents("users.json", json_encode($user1));
  header("Location: /index.html");
?>
