<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <applet code="topdowngame.GameLaunch" archive="topDownGame.jar" width ="300" height="350"
            title="Java(TM)"></applet>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>