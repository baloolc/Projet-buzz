const message =
  "Merci d'avoir envoyer votre message, je vous contacterais dès que possible.Vers l'infini et au delà.";

document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault();
  alert(message);
});