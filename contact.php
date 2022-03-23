<?php
$errors =[];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contact = array_map('trim', $_POST);

    if (empty($contact['first-last-name'])) {
        $errors[] = 'Le champ "Nom" est requis';
    }

    if (empty($contact['enterprise'])) {
        $errors[] = 'Le champ "Entreprise" est requis';
    }

    if (empty($contact['mail'])) {
        $errors[] = 'Le champ "Mail" est requis';
    }

    if (!filter_var($contact['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors[] =  'L\'adresse mail indiquée n\'est pas au bon format';
    }

    if (empty($contact['phone'])) {
        $errors[] = 'Le champ "Téléphone" est requis';
    }

    if (empty($contact['message'])) {
        $errors[] = 'Le champ "Message" est requis';
    } 
}
?>
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
                <form id="form" action="" method="POST">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                            <?php endforeach; ?>
                    </ul>
                    <div class="name-enterprise">
                        <div class="first-last-name">
                            <label for="first-last-name">Nom Prénom</label><br />
                            <input type="text" required id="first-last-name" name="first-last-name"
                                placeholder="ex: Dupont Vianney" required value="<?= $contact['first-last-name'] ?? '' ?>"/>
                        </div>
                        <div class="enterprise">
                            <label for="enterprise">Entreprise</label><br />
                            <input type="text" required id="enterprise" name="enterprise"
                                placeholder="ex: Nom de mon entreprise" required value="<?= $contact['enterprise'] ?? '' ?>"/>
                        </div>
                    </div>
                    <div class="mail-phone">
                        <div class="mail">
                            <label for="mail">Mail</label><br />
                            <input type="text" required id="mail" name="mail" placeholder="ex: wild@gmail.com"
                            required value="<?= $contact['mail'] ?? '' ?>" />
                        </div>
                        <div class="phone">
                            <label for="phone">Téléphone</label><br />
                            <input type="text" required id="phone" name="phone" placeholder="ex: 0238564213"
                            required value="<?= $contact['phone'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="message">
                        <div>
                            <label for="message">Message</label><br />
                            <textarea id="message" name="message" cols="95" rows="5"
                                placeholder="ex: Mettez votre message!" required ><?= $contact['message'] ?? '' ?></textarea>
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
