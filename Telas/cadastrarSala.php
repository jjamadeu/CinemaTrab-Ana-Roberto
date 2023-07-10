<?php

    require_once '../Classes/Cinema.php';

    $numSala = $_GET['numSala'];
    $lotacao = $_GET['lotacao'];

    $sala = new Sala($numSala, $lotacao);

    $cinema = new Cinema();

    $cinema->adicionarSala($sala);

?>

<script>

    alert('Sala Cadastrada com Sucesso');
    window.location.href = "formCadSala.php";

</script>