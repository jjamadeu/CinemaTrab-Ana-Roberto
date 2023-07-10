<?php
    //Pegando as informações do formulário de alteração
    $idFilmeAntigo = $_REQUEST['idFilmeAntigo'];
    $idFilme = $_REQUEST['idFilme'];
    $tituloFilme = $_REQUEST['tituloFilme'];
    $generoFilme = $_REQUEST['generoFilme'];
    $sinopseFilme = $_REQUEST['sinopseFilme'];
    $classificacaoFilme = $_REQUEST['classificacaoFilme'];
    $duracaoFilme = $_REQUEST['duracaoFilme'];

    
    //Carregando os dados do cinema
    require_once '../classes/Cinema.php';
    $cinema = new Cinema();

    //Buscando o filme a ser alterado
    $filme = $cinema->buscarFilme($idFilmeAntigo);
    $filme->setIdFilme($idFilme);
    $filme->setTitulo($tituloFilme);
    $filme->setGenero($generoFilme);
    $filme->setSinopse($sinopseFilme);
    $filme->setClassificacao($classificacaoFilme);
    $filme->setDuracao($duracaoFilme);
?>
<script>
    alert('Filme alterado com sucesso!!!');
    window.location.href = "./index.php";
</script>
    
    


