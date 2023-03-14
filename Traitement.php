<?php
    $src = "/image/basse_saison.jpg";
    $photo = $_FILES['photo']['type'];
    $sos = $_POST["sos"];
    echo $photo . "<br>";
    echo md5_file($photo, false) . "<br>";

    echo "Hachage du texte " . md5($sos, false);
    echo md5_file($photo);
    echo md5($src, false);

