<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Filme</title>
    <link rel="stylesheet" href="../css/telasListar.css">
</head>
<body>
    
    <?php
    require_once '../Classes/Cinema.php';

    $cinema = new Cinema();
    $filmes = $cinema->getFilmes();
    ?>

<a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>

<?php include_once './cabecalho.php'; ?>
<div id='conteudo'>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="7">Filmes Cadastrados</th>
                </tr>
                <tr>
                    <th id="id">Id</th><th id="titulo">Titulo</th><th id="genero">Gênero</th>
                    <th id="sinopse">Sinopse</th><th id="classif">Classificação</th><th id="duracao">Duração</th><th>Alterar</th>
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
                        <TEXTAREA>
                        <?= $filme->getSinopse() ?>
                        </TEXTAREA>
                    </td>
                    <td>
                        <?= $filme->getClassificacao() ?>
                    </td>
                    <td>
                        <?= $filme->getDuracao() ?>
                    </td>
                    
                    <td>
                        <a href="./formAlterarFilme.php?idFilme=<?= $filme->getIdFilme() ?>">
                            📝
                        </a>
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