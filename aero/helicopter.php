<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<style>
    #galleria2{ 
        width: 655px; 
        height: 700px; 
        background: #000;
    }
    #galleria3{ 
        width: 655px; 
        height: 700px; 
        background: #000;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="../res/galleria/galleria-1.2.9.min.js"></script>
<section id="main">
    <h1>Big Lama</h1>
    <div style="align:center;">
        <div id="galleria">
            <img src="../res/img/heli/photo1.jpg">
            <img src="../res/img/heli/photo2.jpg">
        </div>
    </div>
    <br>
    <article><header>Det første av de første.</header>
        <p>Det aller første radistyrte fartøyet jeg noengang har hatt, kjøpt i 2010.
            Det må sies at det har blitt brukt ganske mye, og endte opp med å få skeivt
            stag til rotorene.
        <footer>-Rune Aasvestad</footer>
    </article>
    <h1>mCPx</h1>
    <div style="align:center;">
        <div id="galleria2">
            <img src="../res/img/heli/mcpx/photo1.jpg">
            <img src="../res/img/heli/mcpx/photo2.jpg">
        </div>
    </div>
    <br>

    <article><header>Nr to i rekken.</header>
        <p>Dette er et lite helikopter som kan brukes inne og ute. Det er ganske
            stabilt til å være et utehelikopter, men tåler fortsatt ikke for mye vind. Det
            finnes foreløpig ikke noen bilder av det.
        <footer>-Rune Aasvestad</footer>
    </article>

    <h1>Micro Twister</h1>
    <div style="align:center;">
        <div id="galleria3">
            <?php
            for ($i = 1; $i < 9; $i++) {
            echo '<a href="../res/img/plane/display/photo' . $i . '.jpg"><img src="../res/img/plane/thumb/photo' . $i . '.jpg" 
           data-big="../res/img/plane/original/photo' . $i . '.jpg"></a>';
        }
        ?>
        </div>
    </div>
    <br>
    <article><header>Say hello to my little friend.</header>
        <p>Ett lite helikopter tiltenkt inneflyving, noe som har gått utover 
            noen planter og litt sånt.
        <footer>-Rune Aasvestad</footer>
    </article>
    <script>
        Galleria.loadTheme('../res/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
        Galleria.run('#galleria2');
        Galleria.run('#galleria3');
       
    </script>
</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>