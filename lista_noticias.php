<?php

require("conn.php");

// busca no BD
$sql = "SELECT * FROM noticias ORDER BY id DESC";
$result = $conn->query($sql);

while ($linha = $result->fetch_assoc()) {
    include("noticia.php");
}

?>