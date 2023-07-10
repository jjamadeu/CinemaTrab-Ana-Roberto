<?php 

    require_once '../Classes/Cinema.php';

    $numSala = $_REQUEST['numSala'];

    $cinema = new Cinema();

    $cinema->removerSala($numSala);

?>

<script>
    alert('Sala removida com sucesso');
    window.location.href = 'formRemoverSala.php';
</script>