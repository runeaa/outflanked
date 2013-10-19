<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <h1>Dawn skript, del 1</h1>
    <object style="padding-bottom: 10px;" data="../res/skript/Dawn.pdf" type="application/pdf" width="100%" height="800">
        <font color="red">Det oppsto en feil.</font>
    </object>
    <article><header>Dawn.</header>
        <p>Dette manus er ikke det gjeldende. Det nye manuset vil muligens bli publisert
            ved en senere anledning.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>