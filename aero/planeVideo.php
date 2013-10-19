<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<script type="text/javascript" src="../res/scripts/jwplayer.js"></script>
<section id="main">
    <h1 >The floater jet</h1>
    <div id='video1'></div>
    <script type="text/javascript">
        jwplayer('video1').setup({
            'flashplayer': '../res/scripts/player.swf',
            'file': '',
            'controlbar': 'bottom',
            'width': '640',
            'height': '360'
        });
    </script>
    <br>
    <article>
        <header>Is it a bird? Is it a plane? Yes, yes it is!</header>
        <p>Video kommer snart.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>