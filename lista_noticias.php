<?php

require("conn.php");

// busca no BD
$sql = "SELECT * FROM noticias";
$result = $conn->query($sql);

while ($linha = $result->fetch_assoc()) {
    include("noticia.php");
}

?>