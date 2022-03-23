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
            <h2 class="banner-title">Bienvenue</h2>
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
            <a href="personnage_main.html">
                <div class="starcommand">
                    <div class="starcommandimg"></div>
                    <h3>Star Command</h3>
                </div>
            </a>

            <a href="personnage_main.html">
                <div class="toystory">
                    <div class="toystoryimg"></div>
                    <h3>Toy Story</h3>
                </div>
            </a>

            <a href="personnage_main.html">
                <div class="jamesbuzz">
                    <div class="jamesbuzzimg"></div>
                    <h3>James Buzz</h3>
                </div>
            </a>
        </section>

        <section class="contact">
            <button onclick="location.href='contact.html'" type="button">
                Contact</button>
        </section>
    </main>
    <?php require 'footer.php' ?>