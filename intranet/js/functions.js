function mail1() {
  alert("Email déjà inscrite ou Email mal confirmé");
  window.location.replace("/page/page_crea_compte.html");
}
function mail2() {
  alert("Email incorrect !");
  window.location.replace("/page/page_crea_compte.html");
}
function crea_compte_active() {
  alert("Compte déjà activé !");
  window.location.replace("/index.html");
}
function crea_compte_activation() {
  alert("Compte activé !");
  window.location.replace("/index.html");
}
function crea_compte_error() {
  alert("Erreur, votre compte ne peut être activé !");
  window.location.replace("/index.html");
}
function crea_user() {
  alert("Argument manquant !");
  window.location.replace("/page/gestion_utilisateurs.php");
}
function mod_user() {
  alert("Argument vide !");
}
function modif() {
  alert("Aucune modification apporté !");
  window.location.replace("/page/gestion_utilisateurs.php");
}
function taille_limit_serv() {
  alert("Fichier dépasse la taille autorisé par le serveur !");
  window.location.replace("/page/fichier_perso.php");
}
function taille_limit_form() {
  alert("Fichier dépasse la taille autorisé par le formulaire !");
  window.location.replace("//page/fichier_perso.php");
}
function corrompue() {
  alert("Fichier a été corrompue pendant le transfert !");
  window.location.replace("/page/fichier_perso.php");
}
function taille_null() {
  alert("Fichier vide");
  window.location.replace("/page/fichier_perso.php");
}
function error_login() {
  alert("Login et/ou mot de passe incorrect");
  window.location.replace("/index.html");
}
function inactif() {
  alert("Compte non activé !");
  window.location.replace("/index.html");
}
