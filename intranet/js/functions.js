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
