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
    <h1>Boomsy Sketches</h1>
    <div id="galleria">
        <img src="../res/img/bSketch/photo1.jpg">
        <img src="../res/img/bSketch/photo2.jpg">
    </div>
    <script>
        Galleria.loadTheme('../res/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>
