<?php

    $servername = "localhost";
    $database = "ejercicio1";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($mysqli));
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $sql = "CREATE TABLE players (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     fullname VARCHAR(50),
    //     position VARCHAR(50),
    //     nation VARCHAR(50),
    //     team VARCHAR(50)
    // )";
        
    // // Se verifica si la tabla ha sido creado
    // if ($conn->query($sql) === TRUE) {
    //     echo "la tabla players ha sido creado";
    // } else {
    //     echo "Hubo un error al crear la tabla players: " . $conn->error;
    // }
    
?>