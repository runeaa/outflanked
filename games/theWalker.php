<?php @include '../include/header.php'; ?>
<style>
    body{
        background:url("../res/img/bg/bg_games.jpg")no-repeat center center fixed;
        -moz-background-size: cover;
        background-size: cover;
        color:white;
        text-align: center;
    }
    h1{
        padding-bottom: 5px;
    }
</style>
<section id="main">
    <h1>The Walker</h1>
    <script src="http://java.com/js/deployJava.js"></script>
    <script>
        var attributes = {
            code: "../res/games/game.GameLauncher",
            archive: "../res/gamesgame.jar",
            width: 480,
            height: 360
        };
        var parameters = {jnlp_href: "../res/games/launch.jnlp"};<!-- Applet Parameters -->
        var version = "1.7";<!-- Required Java Version -->
        deployJava.runApplet(attributes, parameters, version);
    </script>
    <noscript><h1>Du må aktivere javaScript</h1></noscript>
    <article><header>The Walker.</header>
        <p>Det aller første forsøket på å lage et spill i java. Spillet
            krever at man har aktivert JavaScript og 
            <a href="http://www.java.com/en/">Java</a> med versjon 1.7.
            <br>
            Spillet ble laget for å kunne forbedre forståelsen av både hvordan
            spill er bygget opp, og hvordan de produseres. I dette spillet benytts
            enten piltastene eller [w][a][s][d] for å bevege seg, man kan
            sette et valgt navn på sin figur ved ønske. Spillet inneholder
            ingen oppgaver for spilleren å utføre da det ble
            laget som et test konsept.
            <br><br>
            Spillet ble laget ved å følge en guide på youtube av 
            <a href="https://www.youtube.com/user/DesignsbyZephyr?feature=watch">
                Designs by Zephyr</a></p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>