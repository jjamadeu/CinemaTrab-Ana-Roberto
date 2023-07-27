<?php

    require_once '../Classes/Cinema.php';

    $idFilme = $_REQUEST['idFilme'];

    $cinema = new Cinema();

    if (!empty($idFilme)) {
        $cinema->removerFilme($idFilme);

        echo "<script>alert('Filme removido com sucesso!');</script>";
        echo "<script>window.location.href = '../index.php';</script>";
    } else {
        echo "<script>alert('Erro! Filme não removido.');</script>";
        echo "<script>window.history.back();</script>";
    }
?> 