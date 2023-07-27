<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Salas</title>
    <link rel="stylesheet" href="../css/telasListar.css">
</head>
<body>
    <?php
        require_once '../Classes/Cinema.php';
        $cinema = new Cinema();
        $salas = $cinema->getSalas();
    ?>
    <?php include_once './cabecalho.php'; ?>
     <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <div id='conteudo'>
        <section>
            <table>
                <thead>
                    <tr>    
                        <th colspan="2">SALAS CADASTRADAS</th>
                    </tr>
                    <tr>
                        <th>NÚMERO</th>  <th>LOTAÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //Percorrendo o vetor de salas para criar as linhas da tabela
                    foreach ($salas as $sala):
                ?>
                    <tr>
                        <td>
                            <?= $sala->getNumero() ?>
                        </td>
                        <td>
                            <?= $sala->getLotacao() ?>
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