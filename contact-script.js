const message =
  "Merci d'avoir envoyé votre message, je vous contacterai dès que possible. Vers l'infini et au delà !";

document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault();
  alert(message);
});