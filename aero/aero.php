<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <article><header>Ny quad er ferdig!</header>
        <p>I år bestemte jeg meg for å prøve å bygge ett quadcopter. Det er noe jeg
            alltid har ønsket meg, men ikke hatt muligheten til å bygge, før nå. Med
            god hjelp fra en venn ble det til en stor suksess. Les mer under <a href="heli.php">helikopter</a>.
            <br><br>
            Bilder av byggeprosessen kan for øvring sees <a href="quad.php">her</a>,
            og <a href="heliVideo.php">video.</a> av første flyturen.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
    <article><header>Flyet med det rare i!</header>
        <p>Det første helikopteret ga mersmak, jeg ønsket å prøve meg med fly. Det førte
            til et innkjøp av et <a href="planes.php">AXN Floater-Jet</a>. Det første flyet
            kan man regne med blir ødelagt i løpet av den tiden det tar å lære seg å fly, og
            med antall trær tilstede der jeg fløy de første gangene tvilte jeg ikke. Det var
            relativt dårlig med plass i nærheten hvor det var mulig og fly, noe som førte til at
            det ble lite flyving i starten, men flyet var aldri glemt.
            <br><br>
            Spol fremmover til sommeren 2013, og et par trelandinger senere, så flyr det som bare det. Piloten
            har lært seg å fly! Dessvere tok den ene servoen kvelden, som førte til en "ufrivillig" pause.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
    <article><header>En verden full av rc!</header>
        <p>Mye har skjedd siden det første helikopteret jeg skaffet i 2010. Det enkle
            men lette <a href="helicopter.php"> helikopteret</a> ble en stor suksess.
            Jeg hadde blitt bitt av en hobby som skulle gi meg mye moro fremmover, men 
            grunnet flytting til Trondheim og dårlig med plass til å fly har den ikke "tatt av" 
            før i det siste.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>