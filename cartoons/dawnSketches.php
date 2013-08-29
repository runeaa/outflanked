<?php @include '../include/header.php'; ?>
<style>
    body{
        background:url("../res/img/bg/bg_cartoon.jpg")no-repeat center center fixed;
        -moz-background-size: cover;
        background-size: cover;
        color:white;
        text-align: center;
    }
</style>
<section id="main">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="../res/galleria/galleria-1.2.9.min.js"></script>
    <h1>Allison Lynn Sketches</h1>
    <div id="galleria">
        <img src="../res/img/dSketch/photo1.jpg">
        <img src="../res/img/dSketch/photo2.jpg">
        <img src="../res/img/dSketch/photo3.jpg">
        <img src="../res/img/dSketch/photo4.jpg">
        <img src="../res/img/dSketch/photo5.jpg">
        <img src="../res/img/dSketch/photo6.jpg">
        <img src="../res/img/dSketch/photo7.jpg">
        <img src="../res/img/dSketch/photo8.jpg">
    </div>
    <script>
        Galleria.loadTheme('../res/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>
