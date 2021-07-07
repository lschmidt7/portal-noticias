<?php

    require("conn.php");

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    // busca no BD
    $sql = "INSERT INTO noticias (titulo,conteudo,id_usuario) VALUES('$titulo','$conteudo','1')";
    $result = $conn->query($sql);

    if($result === TRUE)
    {
        header("Location: index.php");
    }
    else {
        echo "Erro ao cadastrar a notícia";
        echo "<a href='index.php'>Voltar</a>";
    }

?>