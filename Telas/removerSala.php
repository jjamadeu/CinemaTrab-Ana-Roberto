<?php
    require_once 'Cinema.php';

    $numSala = $_REQUEST['numSala'];

    $cinema = new Cinema();

    $cinema->removerSala($numSala);

    echo "<script>alert('Sala removida com sucesso!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
?>