<?php
require_once '../Classes/Cinema.php';

$numSalaAntigo = $_REQUEST['numSalaAntigo']; 
$numSala = $_REQUEST['numSala'];

$cinema = new Cinema();

if ($numSala != $numSalaAntigo && $cinema->buscarSala($numSala) != null) {
    echo "<script>
        alert('Número da sala já existe!');
        window.history.back(); // Volta para a página anterior
    </script>";
    exit;
}

$lotacao = $_REQUEST['lotacao'];

$sala = $cinema->buscarSala($numSalaAntigo);
$sala->setNumero($numSala);
$sala->setLotacao($lotacao);

echo "<script>
    alert('Sala Alterada com Sucesso');
    window.location.href = '../index.php';
</script>";
?>
