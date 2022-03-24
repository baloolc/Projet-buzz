<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/indexstyle.css">
    <title>CV de l'espace</title>
</head>
<?php
require 'header.php';
?>

<div class="banner">
    <!-- Titre -->
    <h1 class="banner-title">Bienvenue</h1>
</div>
</section>
<!-- Fin section header/top page/landing -->
<main>
    <section class="presentation">
        <p>Salutations, je suis Buzz l'Eclair, je viens en paix</p>
        <p>A la recherche d'une mission de maintien de l'ordre intergalactique</p>
        <p>Vers l'infini et au delà !</p>
    </section>

    <section class="roles">
        <a href="personnage_main.php">
            <div class="starcommand">
                <div class="starcommandimg"></div>
                <h3>Star Command</h3>
            </div>
        </a>

        <a href="personnage_main.php">
            <div class="toystory">
                <div class="toystoryimg"></div>
                <h3>Toy Story</h3>
            </div>
        </a>

        <a href="personnage_main.php">
            <div class="jamesbuzz">
                <div class="jamesbuzzimg"></div>
                <h3>James Buzz</h3>
            </div>
        </a>
    </section>

    <section class="contact">
        <div class="alienhello"></div>
        <button onclick="location.href='contact.php'" type="button">
            Contact</button>
        <div class="aliengoodbye"></div>
    </section>
</main>
<?php require 'footer.php' ?>