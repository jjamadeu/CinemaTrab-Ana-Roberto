<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Sala</title>
    <link rel="stylesheet" href="../css/telasListar.css">
</head>
<body>
    
    <?php
    require_once '../Classes/Cinema.php';

    $cinema = new Cinema();
    $salas = $cinema->getSalas()
    ?>

<a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
<?php include_once './cabecalho.php'; ?>
<div id='conteudo'>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="3">ALTERAR SALAS</th>
                </tr>
                <tr>
                    <th>NÚMERO</th>  <th>LOTAÇÃO</th> <th colspan="1">ALTERAR</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($salas as $sala):
            ?>
                <tr>
                    <td>
                        <?= $sala->getNumero() ?>
                    </td>
                    <td>
                        <?= $sala->getLotacao() ?>
                    </td>
                    <td>
                        <a href="./formAlterarSala.php?numSala=<?= $sala->getNumero() ?>">
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