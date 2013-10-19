<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <article><header>Arbeidstittel "Dawn"</header>
        <p>Dawn er den første nye ip på over ti år, den forrige var faktisk Boomsy. 
            Det eksisterer ikke informasjon som er klar for offentligheten. 
            Kort fortalt er Dawn en fremtidsrettet serie hvor nye giga-stater 
            har kollidert, terrorisme er økende, og friheter inskrenket for å sikre
            nasjonal sikkerhet. Hvem er den virkelige fienden?

            <br><br>
            Skisser er tilgjengelig, men manus er ikke det som jobbes med nå.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>