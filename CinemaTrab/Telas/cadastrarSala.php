<?php
require_once '../Classes/Cinema.php';

$numSala = $_REQUEST['numSala'];
$lotacao = $_REQUEST['lotacao'];

$sala = new Sala($numSala, $lotacao);

$cinema = new Cinema();

if ($cinema->adicionarSala($sala)) {
    echo "<script>
        alert('Sala Cadastrada com Sucesso');
        window.location.href = '../index.php';
    </script>";
} else {
    echo "<script>
        alert('Número da Sala já existe!');
        window.history.back();
    </script>";
}
?>
