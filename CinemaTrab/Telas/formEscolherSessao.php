<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Sessão</title>
    <link rel="stylesheet" href="../css/telasListar.css">
</head>
<body>
    <?php

        require_once '../Classes/Cinema.php';

        $cinema = new Cinema();
        $sessoes = $cinema->getSessoes();
        
    ?>

    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <?php include_once './cabecalho.php'; ?>
<div id='conteudo'>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="8">ALTERAR SESSÕES</th>
                </tr>
                <tr>
                    <th>ID</th> <th>DATA</th> <th>HORÁRIO</th> <th>ALTERAR</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($sessoes as $sessao):
            ?>
                <tr>
                    <td>
                        <?= $sessao->getIdSessao() ?>
                    </td>
                    <td>
                        <?= $sessao->getData() ?>
                    </td>
                    <td>
                        <?= $sessao->getHorario() ?>
                    </td>
                      <td>
                        <a href="./formAlterarSessao.php?idSessao=<?= $sessao->getIdSessao() ?>">
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
</body>
<?php include './rodape.php'; ?>
</html>           
</html>











































