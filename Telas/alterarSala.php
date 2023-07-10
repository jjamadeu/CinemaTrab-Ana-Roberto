<?php

    require_once '../Classes/Cinema.php';

    $numSalaAntigo = $_GET['numSalaAntigo']; 
    $numSala = $_GET['numSala'];
    $lotacao = $_GET['lotacao'];

    $cinema = new Cinema();

    $sala = $cinema->buscarSala($numSalaAntigo);

    $sala->setNumero($numSala);
    $sala->setLotacao($lotacao);

?>

<script>

    alert('Sala Alterada com Sucesso');
    window.location.href = "formAlterarSala.php";

</script>