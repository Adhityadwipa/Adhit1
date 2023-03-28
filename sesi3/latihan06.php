<?php
    $mhs = array(
        array("Anjas", "22347277", "Dps"),
        array("Arlandi", "1234567", "Badung"),
        array("Liam", "000000000", "Tabanan"),
        array("Ngurah", "11111111", "Klungkung")
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($mhs);