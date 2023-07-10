<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario De Cadastro de Filme</title>
</head>
<body>
    <?php
        require_once '../classes/Cinema.php';
        
        $idFilme = $_REQUEST['idFilme'];
        $cinema = new Cinema;
        $filme = $cinema->buscarFilme($idFilme);
    ?>

    <div id="conteudo">
        <form action="./alterarFilme.php" method="get">

       <p> <input type='hidden' name="idFilmeAntigo"
                value='<?= $filme->getIdFilme() ?>'>   </p>


        <p> Alteração de ID para: <input type='number' name="idFilme"
                value='<?= $filme->getIdFilme() ?>'>   </p>

        <p> Alteração de Titulo para:  <input type='text' name="tituloFilme"
                value='<?= $filme->getTitulo() ?>'>   </p>

        <p> Alteração de Gênero para:<input type='text' name="generoFilme"
                value='<?= $filme->getGenero() ?>'>   </p>
        
        <p> Alteração de Sinopse para:<input type='text' name="sinopseFilme"
                value='<?= $filme->getSinopse() ?>'>   </p>
                
        <p> Alteração de Classificação para:<input type='text' name="classificacaoFilme"
                value='<?= $filme->getClassificacao() ?>'>   </p>
        
        <p> Alteração de Duração para:<input type='time' name="duracaoFilme"
                value='<?= $filme->getDuracao() ?>'>   </p>

                <input type="submit" value="Enviar">

        </form>           
             
    </div>


</body>
</html>