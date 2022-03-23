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
</head>
<?php
require 'header.php';
?>
            <div class="banner">
                <!-- Titre -->              
                <h2 class="banner-title">Star Command</h2>
            </div>
        </section>
    <main>
        <section class="bloc-container">
        <?php foreach ($data as $key => $infos) : ?>
        <?php foreach ($infos as $info) : ?>
        <div class="<?= $info['bloc']?>">
            <div class="<?= $info['image']?>"></div>
            <div class="<?= $info['body']?>">
            <h2><?= $info['title'] ?></h2>
            <p><?= $info['description'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endforeach; ?>
        </section>
        <section class="contact">
            <button onclick="location.href='contact.php'" type="button">
                Contact</button>
        </section>
    </main>
<?php require 'footer.php' ?>