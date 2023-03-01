<?php
    $nombre = (string) "Ricardo Mauricio Vargas";
    $edad = (int) 23;
    $altura = (double) 1.79;
    $esProfesor = (boolean) false;

    $pasaTiempo = (array) [
        "Jugar Futbol",
        "Montar Bicicleta",
        "Escuchar musica",
    ];

    $moto = (object) [
        "color" => "Rojo",
        "llantas" => 2,
        "Frenos" => true,
        "Cilindraje" => 150,
        "Kilometraje" => 120000,
    ];
    echo "Nombre: $nombre<br>";
    echo "Edad: $edad<br>";
    echo "Es el Profesor: $esProfesor<br>";
    echo "Pasa tiempos: ".json_encode($pasaTiempo)."<br>";
    echo "Vehiculo: ".json_encode($moto);
?>

