<?php
    $buah = array("Salak", "Duku", "Rambutan", "Apel");

    print_r($buah);

    echo "<hr>";

    foreach($buah as $nval){
        echo "Buah ".$nval. "<br>";
    }

    echo "<hr>";

    echo "<ol>";
    foreach($buah as $nval){
        echo "<li>".$nval. "</li>";
    }
    echo "</ol>";