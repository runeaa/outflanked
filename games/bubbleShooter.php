<?php @include '../include/header.php'; ?>
<style>
    body{
        background:url("../res/img/bg/bg_games.jpg")no-repeat center center fixed;
        -moz-background-size: cover;
        background-size: cover;
        color:white;
        text-align: center;
    }
    h1{
        padding-bottom: 5px;
    }
</style>
<section id="main">
    <applet code="topdowngame.GameLaunch" archive="topDownGame.jar" width ="300" height="350"
            title="Java(TM)"></applet>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>