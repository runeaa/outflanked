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
    <h1>En ny quad blir født</h1>
    <div style="align:center;">
        <div id="galleria">
            <?php
            for ($i = 1; $i < 17; $i++) {
            echo '<a href="../res/img/quad/display/photo' . $i . '.jpg"><img src="../res/img/quad/thumb/photo' . $i . '.jpg" 
           data-big="../res/img/quad/original/photo' . $i . '.jpg"></a>';
        }
        ?>
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
        Galleria.ready(function() {
            this.bind('image', function(e) {
                $(e.imageTarget).unbind('click').click(function() {
                    path = e.imageTarget.src;
                    var name = path.match(/([^\/]*)\/*$/)[1];
                    Galleria.log('Now viewing ' + name);
                    window.open("../res/img/quad/original/" + name, true);
                });
            });
        });
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>