<?php

    require("conn.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM noticias WHERE id=$id";
    $result = $conn->query($sql);

    if($result === TRUE)
    {
        header("Location: index.php");
    }
    else
    {
        echo "Erro ao excluir noticia";
        echo "<a href='index.php'>Voltar</a>";
    }

?>