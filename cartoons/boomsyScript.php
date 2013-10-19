<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <h1>Boomsy skript</h1>
    <object style="padding-bottom: 10px;" data="../res/skript/boomsyblad1.pdf" type="application/pdf" width="100%" height="800">
        <font color="red">Det oppsto en feil.</font>
    </object>
    <article ><header>Boomsy blad 1 historie 2 manus.</header>
        <p>Dette er det foreløpige manuset til historie 2 i blad 1. Den trenger en revisjon
        da den ikke opprettholder standarden som ønskes.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>