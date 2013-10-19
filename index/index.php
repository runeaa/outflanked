<?php

@include '../include/header.php';

function name() {
    $folderName = dirname(preg_replace('/\.php$/', '', __FILE__));
    return basename($folderName);
}
?>
<section id="main">
    <article><header>Ny side under utvikling</header>
        <p>Denne siden vil bli brukt for profilering og 
            fremvisning av ting.</p>
        <footer>-Rune Aasvestad</footer>
    </article>
    <article><header>Neque porro quisquam est qui dolorem ipsum quia 
            dolor sit amet, consectetur, adipisci velit</header>
        <p>Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. 
            Aenean accumsan lorem vel varius congue. 
            Praesent sed velit tempor arcu cursus rutrum vel
            sit amet augue. In at magna congue, 
            bibendum velit id, malesuada lectus. 
            Phasellus feugiat sem tellus. Nullam ornare 
            fringilla urna. Aliquam viverra, nisi et porttitor 
            fringilla, mi nibh blandit arcu, et lobortis est 
            massa non nisl. Proin ut posuere risus. 
        <footer>-Rune Aasvestad</footer>
    </article>
    <section id="reddit">
        <script src="http://www.reddit.com/hot/.embed?limit=8&t=all&twocolumn=true" type="text/javascript"></script>    </section>
    <br>
    <center><section id="strava">
            <iframe height='160' width='300' frameborder='0' allowtransparency='true' scrolling='no' 
                    src='http://app.strava.com/athletes/744232/activity-summary/5cfb26c514f51d31b4594271ded5ede8dbde3f54'></iframe>
        </section></center>

</section>
<?php @include '../include/aside.php'; ?>
<?php @include '../include/footer.php'; ?>