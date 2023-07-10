<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">

</head>
<body>

    <?php
    require_once './Classes/Cinema.php';

    $cinema = new Cinema();
    $filmes = $cinema->getFilmes();

    ?>

<div id='conteudo'>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="8">Filmes Cadastrados</th>
                </tr>
                <tr>
                    <th>Id</th><th>Titulo</th><th>Gênero</th><th>Sinopse</th><th>Classificação</th><th>Duração</th><th colspan="2">Ações</th>
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
                    <td>
                        <a href="./telas/formAlterarFilme.php?idFilme=<?= $filme->getIdFilme() ?>">
                            📝
                        </a>
                    </td>
                    <td>
                        <a href="./telas/removeFilme.php?idFilme=<?= $filme->getIdFilme() ?>">
                            ❌
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
</body>
</html>