<?php
include '../Classes/Cinema.php';

$idSessao = $_REQUEST['idSessao'];
$data = $_REQUEST['dataSessao'];
$horario = $_REQUEST['horarioSessao'];
$idFilme = $_REQUEST['filmeSessao'];
$numSala = $_REQUEST['salaSessao'];

$cinema = new Cinema();
$filme = $cinema->buscarFilme($idFilme);
$sala = $cinema->buscarSala($numSala);

$sessao = new Sessao($idSessao, $horario, $data, $filme, $sala);

if ($cinema->adicionarSessao($sessao)) {
    echo "<script>
        alert('Sessão Cadastrada com Sucesso');
        window.location.href = '../index.php';
    </script>";
} else {
    echo "<script>
        alert('ID da Sessão já existe!');
        window.history.back(); // Volta para a página anterior
    </script>";
}
?>
