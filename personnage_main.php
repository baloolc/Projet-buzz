<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/personnage_styles.css">
    <title>CV de l'espace</title>
    <link rel="icon" href="https://i.pinimg.com/originals/67/1a/5e/671a5e550d91f7430bbfe111be76cab5.png" type="image/icon type">
</head>
<?php
require 'header.php';
?>
<div class="banner">
    <!-- Titre -->
    <h1 class="banner-title">Star Command</h1>
</div>
</section>
<main>
    <section class="bloc-container">
        <?php foreach ($starCommand as $key => $info) : ?>
            <div class="<?= $info['bloc'] ?>">
                <div class="<?= $info['image'] ?>"></div>
                <div class="<?= $info['body'] ?>">
                    <h2><?= $info['title'] ?></h2>
                    <p><?= $info['description'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <section class="contact">
        <div class="alienhello"></div>
        <button onclick="location.href='contact.php'" type="button">
            Contact</button>
        <div class="aliengoodbye"></div>
    </section>
</main>
<?php require 'footer.php' ?>