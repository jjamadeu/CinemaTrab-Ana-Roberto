<?php
require_once '../classes/Cinema.php';

$idFilmeAntigo = $_REQUEST['idFilmeAntigo'];
$idFilme = $_REQUEST['idFilme'];

$cinema = new Cinema;

if ($idFilme != $idFilmeAntigo && $cinema->buscarFilme($idFilme) != null) {
    echo "<script>
        alert('ID do filme já existe!');
        window.history.back(); // Volta para a página anterior
    </script>";
    exit;
}

$tituloFilme = $_REQUEST['tituloFilme'];
$generoFilme = $_REQUEST['generoFilme'];
$sinopseFilme = $_REQUEST['sinopseFilme'];
$classificacaoFilme = $_REQUEST['classificacaoFilme'];
$duracaoFilme = $_REQUEST['duracaoFilme'];

$filme = $cinema->buscarFilme($idFilmeAntigo);
$filme->setIdFilme($idFilme);
$filme->setTitulo($tituloFilme);
$filme->setGenero($generoFilme);
$filme->setSinopse($sinopseFilme);
$filme->setClassificacao($classificacaoFilme);
$filme->setDuracao($duracaoFilme);

echo "<script>
    alert('Filme alterado com sucesso!!!');
    window.location.href = '../index.php';
</script>";
?>
