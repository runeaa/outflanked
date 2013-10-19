<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <article><header>Top-down perspektiv</header>
        <p>Perspektivet som brukes i "The Walker" er det samme perspektivet
            som man finner spill som f.eks zelda og pokemon (bilder under av de
            respektive spillene).
            <br><br>
            <img src="../res/img/games/photo1.jpg" height="224"/>
            <img style="padding-left: 10px;" src="../res/img/games/photo2.png"/>
            <br>
            Dette gir et intrykk av at det er 3D, med mulighet for å bevege seg i alle retninger.
            Samtidig som det gir god oversikt selv om man mangler kamerakontroll. Det er mange
            spill som gjennomtidene har brukt denne metoden, og da ikke bare pga. dårlig
            teknologi.
            Ekstra informasjon og mange flere eksempler finner du
            <a href="http://www.giantbomb.com/top-down-perspective/3015-788/games/">her</a>
            <br><br>
            Så, hva venter du på? Prøv "The Walker" i dag.
        </p>
        <footer>-Rune Aasvestad</footer>
    </article>

</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>