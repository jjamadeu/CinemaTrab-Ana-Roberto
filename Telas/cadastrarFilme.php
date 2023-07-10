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

//echo $filme->__toString();

$cinema->adicionarFilme($filme);

?>  


<script>
alert('Filme cadastrado com sucesso!!!');
window.location.href = '../index.php';
</script>