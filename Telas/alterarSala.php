<?php
    require_once 'Cinema.php';
    require_once 'Sala.php';

    $numSala = $_POST['numSala'];
    $novaLotacao = $_POST['novaLotacao'];

    $cinema = new Cinema();

    $sala = $cinema->buscarSala($numSala);

    if ($sala) {
        $sala->setLotacao($novaLotacao);

        echo "<script>alert('Sala alterada com sucesso!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        
        echo "<script>alert('Sala não encontrada!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
?>