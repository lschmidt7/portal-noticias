<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "portal_noticias";

    $conn = new mysqli($hostname,$username,$password,$dbname);

    if ($conn->connect_error) {
        echo "Algo deu errado";
    }

?>