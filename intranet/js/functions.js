function mail1() {
  alert("Email déjà inscrite ou Email mal confirmé");
  window.location.replace("/intranet/page/page_crea_compte.php");
}
function mail2() {
  alert("Email incorrect !");
  window.location.replace("/intranet/page/page_crea_compte.php");
}
function crea_compte_active() {
  alert("Compte déjà activé !");
  window.location.replace("/intranet/index.html");
}
function crea_compte_activation() {
  alert("Compte activé !");
  window.location.replace("/intranet/index.html");
}
function crea_compte_error() {
  alert("Erreur, votre compte ne peut être activé !");
  window.location.replace("/intranet/index.html");
}
