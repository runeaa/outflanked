<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="../res/galleria/galleria-1.2.9.min.js"></script>
<section id="main">
    <h1>AXN Floater-Jet</h1>
    <div style="align:center;">
        <div id="galleria">
             <?php
            for ($i = 1; $i < 9; $i++) {
            echo '<a href="../res/img/plane/display/photo' . $i . '.jpg"><img src="../res/img/plane/thumb/photo' . $i . '.jpg" 
           data-big="../res/img/plane/original/photo' . $i . '.jpg"></a>';
        }
        ?>
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
        Galleria.ready(function() {
            this.bind('image', function(e) {
                $(e.imageTarget).unbind('click').click(function() {
                    path = e.imageTarget.src;
                    var name = path.match(/([^\/]*)\/*$/)[1];
                    Galleria.log('Now viewing ' + name);
                    window.open("../res/img/plane/original/" + name, true);
                });
            });
        });
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>