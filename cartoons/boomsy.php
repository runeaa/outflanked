<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <article><header>Velkommen!</header>
        <p>Velkommen til over ti år siden.
            <br><br>
            Boomsy, den første virkelige fiksjonelle tegneserien jeg laget på 90-tallet.
            Den første som ble til noe, den første som var bra nok til å vises til andre. Det er
            nå mange år siden, og det er vel på tide med en frisk start.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>