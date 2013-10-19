<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<script type="text/javascript" src="../res/scripts/jwplayer.js"></script>
<section id="main">
    <h1 >Da awesome quad</h1>
    <div id='video1'></div>
    <script type="text/javascript">
        jwplayer('video1').setup({
            'flashplayer': '../res/scripts/player.swf',
            'file': '../res/video/video.mp4',
            'controlbar': 'bottom',
            'width': '640',
            'height': '360'
        });
    </script>
    <br>
    <article>
        <header>Is it a bird? Is it a plane? No, it's a quadcopter!</header>
        <p>Den aller første flyturen med quad-en. Til å være laget av meg flyr
            den overraskende bra. Da gjennstår det bare å lære seg å fly, og forhåpentlig
            vis fortsatt ha en fungerende quad da det er gjort. 
            Flere videoer vil forhåpentligvis komme etter hvert.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>