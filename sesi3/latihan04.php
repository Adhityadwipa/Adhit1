<?php
    //Jenis array


    //Index model 1
    //$cars = array("Volvo", "BMW", "Toyota");

    //print_r($cars);

    //echo "<hr>";

    //index model 2
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    print_r($cars);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($cars);

