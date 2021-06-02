<?php

    require("conn.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // busca no BD
    $sql = "SELECT * FROM users WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: index.php");
    }
    else {
        echo "Usuário não encontrado";
        echo "<a href='index.php'>Voltar</a>";
    }

    

?>