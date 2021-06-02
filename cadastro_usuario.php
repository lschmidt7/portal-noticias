<?php

    require("conn.php");

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // busca no BD
    $sql = "INSERT INTO users (nome,email,senha) VALUES('$nome','$email','$senha')";
    $result = $conn->query($sql);

    if($result === TRUE)
    {
        header("Location: index.php");
    }
    else {
        echo "Erro ao cadastrar";
        echo "<a href='index.php'>Voltar</a>";
    }

?>