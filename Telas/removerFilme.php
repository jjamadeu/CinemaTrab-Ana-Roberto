<?php
    require_once 'Cinema.php';

    $idFilme = $_REQUEST['idFilme'];

    $cinema = new Cinema();

    $cinema->removerFilme($idFilme);

    echo "<script>alert('Filme removido com sucesso!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
?>