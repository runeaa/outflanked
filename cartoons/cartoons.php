<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <article><header>Jasså..</header>
        <p>..du sitt og glor.
            <br><br>
            Det er bra, for da har du muligheten for å glo på litt her. Dette er siden
            for tegneseriene, her finner du både manus og skisser til tegneseriene. De er
            begge under arbeid og ufullstenig manus må forventes. </p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>