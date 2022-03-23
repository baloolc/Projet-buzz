<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/styles-contact.css">
    <title>CV de l'espace</title>
</head>
<?php
require 'header.php';
?>
            <div class="banner-contact">
                <!-- Titre -->
                <h1 class="banner-title">Contactez moi</h1>
                <!-- Images de fond  -->
            </div>
        </section>

        <main>
            <section>
                <form id="form">
                    <div class="name-enterprise">
                        <div class="first-last-name">
                            <label for="first-last-name">Nom Prénom*</label><br />
                            <input type="text" required id="first-last-name" name="first-last-name"
                                placeholder="ex: Dupont Vianney" />
                        </div>
                        <div class="enterprise">
                            <label for="enterprise">Entreprise*</label><br />
                            <input type="text" required id="enterprise" name="enterprise"
                                placeholder="ex: Nom de mon entreprise" />
                        </div>
                    </div>
                    <div class="mail-phone">
                        <div class="mail">
                            <label for="mail">Mail*:</label><br />
                            <input type="text" required id="mail" name="mail" placeholder="ex: wild@gmail.com" />
                        </div>
                        <div class="phone">
                            <label for="phone">Téléphone*</label><br />
                            <input type="text" required id="phone" name="phone" placeholder="ex: 0238564213" />
                        </div>
                    </div>
                    <div class="message">
                        <div>
                            <label for="message">Message</label><br />
                            <textarea id="message" name="message" cols="95" rows="5"
                                placeholder="ex: Mettez votre message!"></textarea>
                        </div>
                    </div>
                    <div class="input-send">
                        <input class="send" type="submit" value="Envoyer"/>
                        <script src="contact-script.js"></script>
                    </div>
                </form>
            </section>
        </main>
<?php 
require 'footer.php'; 
?>
