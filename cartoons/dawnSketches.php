<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="../res/galleria/galleria-1.2.9.min.js"></script>
    <h1>Allison Lynn Sketches</h1>
    <div id="galleria">
        <?php
        for ($i = 1; $i < 9; $i++) {
            echo '<a href="../res/img/dSketch/display/photo' . $i . '.jpg"><img src="../res/img/dSketch/thumb/photo' . $i . '.jpg" 
           data-big="../res/img/dSketch/original/photo' . $i . '.jpg"></a>';
        }
        ?>
          </div>
    <script>
        Galleria.loadTheme('../res/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
        Galleria.ready(function() {
            this.bind('image', function(e) {
                $(e.imageTarget).unbind('click').click(function() {
                    path = e.imageTarget.src;
                    var name = path.match(/([^\/]*)\/*$/)[1];
                    Galleria.log('Now viewing ' + name);
                    window.open("../res/img/dSketch/original/" + name, true);
                });
            });
        });
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>
