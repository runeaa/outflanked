<?php @include '../include/header.php'; ?>
<style>
    body{
        background:url("../res/img/bg/bg_aero.jpg")no-repeat center center fixed;
        -moz-background-size: cover;
        background-size: cover;
        color:white;
        text-align: center;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="../res/galleria/galleria-1.2.9.min.js"></script>
<section id="main">
    <h1>AXN Floater-Jet</h1>
    <div style="align:center;">
        <div id="galleria">
            <img src="../res/img/plane/photo1.jpg">
            <img src="../res/img/plane/photo2.jpg">
            <img src="../res/img/plane/photo3.jpg">
            <img src="../res/img/plane/photo4.jpg">
            <img src="../res/img/plane/photo5.jpg">
            <img src="../res/img/plane/photo6.jpg">
            <img src="../res/img/plane/photo7.jpg">
            <img src="../res/img/plane/photo8.jpg">
        </div>
    </div>
    <br>
    <article><header>Det første flyet.</header>
        <p>Det sier litt om kvaliteten på dette flyet da jeg har lært meg å fly med det.
            Det tok dog en kolisjon med et tre som knakk fronten på flyet, et par andre landinger
            og kolisjoner med trær og en liten ufrivillig svipptur over E6. Utrolig nok har ingen
            kommet til skade under disse hendelsene, utenom flyets knekte nese.
            <br><br>
            Det som kommer videre nå blir en oppgradering til et fly som kan flyes FPV. Det skjer nok
            ikke før ved juletider, og det avhenger om nissen ikke kommer med kull i år også.
        <footer>-Rune Aasvestad</footer>
    </article>
    <script>
        Galleria.loadTheme('../res/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>