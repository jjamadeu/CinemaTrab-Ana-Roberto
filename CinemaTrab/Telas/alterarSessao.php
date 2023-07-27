<?php
require_once '../Classes/Cinema.php';

$idSessaoAntigo = $_REQUEST['idAntigo'];
$idSessao = $_REQUEST['idSessao'];

$cinema = new Cinema();

if ($idSessao != $idSessaoAntigo && $cinema->buscarSessao($idSessao) != null) {
    echo "<script>
        alert('ID da sessão já existe!');
        window.history.back(); // Volta para a página anterior
    </script>";
    exit;
}

$data = $_REQUEST['dataSessao'];
$horario = $_REQUEST['horarioSessao'];
$idFilme = $_REQUEST['filmeSessao'];
$idSala = $_REQUEST['salaSessao'];

$sessao = $cinema->buscarSessao($idSessaoAntigo);
$sala = $cinema->buscarSala($idSala);
$filme = $cinema->buscarFilme($idFilme);

$sessao->setIdSessao($idSessao);
$sessao->setData($data);
$sessao->setHorario($horario);
$sessao->setFilme($filme);
$sessao->setSala($sala);

echo "<script>
    alert('Sessão alterada com sucesso!!!');
    window.location.href = '../index.php';
</script>";
?>
