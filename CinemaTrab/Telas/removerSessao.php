<?php
    require_once '../Classes/Cinema.php';

    $idSessao = $_REQUEST['idSessao'];

    $cinema = new Cinema();

    if (!empty($idSessao)) {
        $cinema->removerSessao($idSessao);

        echo "<script>alert('Sessão removida com sucesso!');</script>";
        echo "<script>window.location.href = '../index.php';</script>";
    } else {
        echo "<script>alert('Erro! Sessão não removida.');</script>";
        echo "<script>window.history.back();</script>";
    }
?>
