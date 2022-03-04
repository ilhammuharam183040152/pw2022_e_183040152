<?php

function salam($waktu = "datang", $nama = "admin") {
    return "Selamat $waktu, $nama " ;
}
?>
<html>
    <head>
        <title>latihan function</title>
    </head>

    <body>
        <h1><?= salam("pagi", "ilham"); ?></h1>
    </body>

</html>
