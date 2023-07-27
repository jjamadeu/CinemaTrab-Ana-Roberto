<?php
include "../Classes/Cinema.php";

$idFilme = $_REQUEST['idFilme'];
$titulo = $_REQUEST['tituloFilme'];
$genero = $_REQUEST['generoFilme'];
$sinopse = $_REQUEST['sinopseFilme'];
$classificacao = $_REQUEST['classificacaoFilme'];
$duracao = $_REQUEST['duracaoFilme'];

$cinema = new Cinema;
$filme = new filme($idFilme, $titulo, $genero, $sinopse, $classificacao, $duracao);

if ($cinema->adicionarFilme($filme)) {
    echo "<script>
        alert('Filme cadastrado com sucesso!!!');
        window.location.href = '../index.php';
    </script>";
} else {
    echo "<script>
        alert('ID do filme já existe!');
        window.history.back(); // Volta para a página anterior
    </script>";
}
?>
