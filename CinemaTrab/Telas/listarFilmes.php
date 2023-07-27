<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Filmes</title>
    <link rel="stylesheet" href="../css/telasListar.css">
</head>
<body>
    <?php
    require_once '../Classes/Cinema.php';
    $cinema = new Cinema();
    $filmes = $cinema->getFilmes();
    ?>

    <?php include_once './cabecalho.php'; ?>    
    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <div id='conteudo'>
        <section>
            <table>
                <thead>
                    <tr>    
                        <th colspan="6">FILMES CADASTRADOS</th>
                    </tr>
                    <tr>
                        <th>ID</th><th>TÍTULO</th><th>GÊNERO</th><th>SINOPSE</th><th>CLASSIFICAÇÃO</th><th>DURAÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //Percorrendo o vetor de clientes para criar as linhas da tabela
                    foreach ($filmes as $filme):
                ?>
                    <tr>
                        <td>
                            <?= $filme->getIdFilme() ?>
                        </td>
                        <td>
                            <?= $filme->getTitulo() ?>
                        </td>
                        <td>
                            <?= $filme->getGenero() ?>
                        </td>
                        <td>
                            <?= $filme->getSinopse() ?>
                        </td>
                        <td>
                            <?= $filme->getClassificacao() ?>
                        </td>
                        <td>
                            <?= $filme->getDuracao() ?>
                        </td>
                    </tr>
                <?php        
                    endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php include './rodape.php'; ?>

</body>
</html>