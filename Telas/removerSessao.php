<?php
    require_once 'Cinema.php';

    $idSessao = $_REQUEST['idSessao'];

    $cinema = new Cinema();

    $cinema->removerSessao($idSessao);

    echo "<script>alert('Sessão removida com sucesso!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
?>