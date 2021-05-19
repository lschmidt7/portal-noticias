<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // busca no BD

    session_start();
    $_SESSION['email'] = $email;

    header("Location: index.php");

?>