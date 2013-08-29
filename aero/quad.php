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
    <h1>En ny quad blir født</h1>
    <div style="align:center;">
        <div id="galleria">
            <img src="../res/img/quad/photo1.jpg">
            <img src="../res/img/quad/photo2.jpg">
            <img src="../res/img/quad/photo3.jpg">
            <img src="../res/img/quad/photo4.jpg">
            <img src="../res/img/quad/photo5.jpg">
            <img src="../res/img/quad/photo6.jpg">
            <img src="../res/img/quad/photo7.jpg">
            <img src="../res/img/quad/photo8.jpg">
            <img src="../res/img/quad/photo9.jpg">
            <img src="../res/img/quad/photo10.jpg">
            <img src="../res/img/quad/photo11.jpg">
            <img src="../res/img/quad/photo12.jpg">
            <img src="../res/img/quad/photo13.jpg">
            <img src="../res/img/quad/photo14.jpg">
            <img src="../res/img/quad/photo15.jpg">
            <img src="../res/img/quad/photo16.jpg">
        </div>
    </div>
    <br>
    <article><header>Fra deler til ferdig quad</header>
        <p>Byggeprosessen ble startet en torsdags kveld etter å ha
            mottatt delene fra hobbyking. Noen av bildene kan ta litt tid å laste grunnet
            høy oppløsning. Dette gjelder ikke bildene under byggeprosessen, da de er
            relativt dårlige. For å se video av den første flyturen <a href="../aero/heliVideo.php">trykk her</a></p>
        <footer>-Rune Aasvestad</footer>
    </article>
    <script>
        Galleria.loadTheme('../res/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>