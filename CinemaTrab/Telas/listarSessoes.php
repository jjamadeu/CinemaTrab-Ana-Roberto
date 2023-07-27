<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Sessões</title>
    <link rel="stylesheet" href="../css/telasListar.css">
</head>

<body>
    <?php

    require_once '../Classes/Cinema.php';

    $cinema = new Cinema();
    $sessoes = $cinema->getSessoes();

    ?>
    <?php include_once './cabecalho.php'; ?>
    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <div id='conteudo'>
        <section>
            <table>
                <thead>
                    <tr>
                        <th colspan="8">SESSÕES CADASTRADAS</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>FILME</th>
                        <th>SALA</th>
                        <th>DATA</th>
                        <th>HORÁRIO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Percorrendo o vetor de clientes para criar as linhas da tabela
                    foreach ($sessoes as $sessao) :
                    ?>
                        <tr>
                            <td>
                                <?= $sessao->getIdSessao() ?>
                            </td>
                            <td>
                                <?= $sessao->getFilme()->getTitulo() ?>
                            </td>
                            <td>
                                <?= $sessao->getSala()->getNumero() ?>
                            </td>
                            <td>
                                <?= $sessao->getData() ?>
                            </td>
                            <td>
                                <?= $sessao->getHorario() ?>
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

</html>