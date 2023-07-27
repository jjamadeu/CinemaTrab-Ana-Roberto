<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Sessão</title>
    <style>
     body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #0A0A0A;
        }



        #meuBotao {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px 20px;
            background-color: #ffff00;
            color: #003B15;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            font-family: Geneva, Tahoma, sans-serif;
            text-decoration: none;
            display: inline-block;
        }

        #meuBotao:hover {
            background-color: #c7c708;
        }


        #conteudo {
            background-color: #111111;
            padding: 20px;
            border-radius: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 100px;

        }

        form,
        label {
            width: 1px, 500px;
            right: 0%;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: right 0.2s;
        }

        p {
            margin: 10px 0;
            color: #FFFFFF;
            font-family: Geneva, tahoma, sans-serif;
            padding-top: 10px;

        }

        h1 {
            margin: 10px 0;
            color: #ffff00;
            font-family: Geneva, tahoma, sans-serif;
            padding-top: 10px;

        }

        input{
            padding: 8px;
            border: none;
            border-radius: 25px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 200px;
            font-size: 14px;
            background-color: rgb(110, 110, 110);
            ;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFFFFF;
            text-align: center;
            padding-top: 5px;
        }

        input[type="submit"] {
            padding: 10px 50px;
            background-color: #ffff00;
            color: #0A0A0A;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 5px;
            font-family: Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #c7c708;
        }

        select {
            padding: 12px;
            border: none;
            border-radius: 25px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 219px;
            font-size: 14px;
            background-color: rgb(110, 110, 110);
            ;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFFFFF;
            text-align: center;
            padding-top: 5px;
        }

        
    </style>
</head>

<body>
    <?php

    require_once '../Classes/Cinema.php';

    $cinema = new Cinema();

    $idSessao = $_REQUEST['idSessao'];
    $sessao = $cinema->buscarSessao($idSessao);

    $filme = $sessao->getFilme();
    $idFilme = $filme->getIdFilme();

    $sala = $sessao->getSala();
    $numSala = $sala->getNumero();

    ?>
    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <?php include_once './cabecalho.php'; ?>
    <div id="conteudo">
        <h1>ALTERAR SESSÃO</h1>
        <form action="alterarSessao.php" method="get">

            <input type='hidden' name="idAntigo" value='<?= $sessao->getIdSessao() ?>'>
            <p>
                NÚMERO DA SESSÃO:
                <label><input type="number" name="idSessao" min="1" step="1" value='<?= $sessao->getIdSessao() ?>' required></label>
            </p>
            <p>
                DATA:
                <label><input type="date" name="dataSessao" value='<?= $sessao->getData() ?>' required></label>
            </p>
            <p>
                HORÁRIO:
                <label><input type="time" name="horarioSessao" max="22:00" value='<?= $sessao->getHorario() ?>' required></label>
            </p>
            <p>
                FILME:
                <label>
                    <select name="filmeSessao" value="<?= $idFilme ?>" required>
                        <?php foreach ($cinema->getFilmes() as $filme) : ?>
                            <option value="<?= $filme->getIdFilme() ?>" <?= $idFilme == $filme->getIdFilme() ? 'selected' : '' ?>>
                                <?= $filme->getTitulo() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </p>
            <p>
                SALA:
                <label>
                    <select name="salaSessao" value="<?= $numSala ?>" required>
                        <?php foreach ($cinema->getSalas() as $sala) : ?>
                            <option value="<?= $sala->getNumero() ?>" <?= $numSala == $sala->getNumero() ? 'selected' : '' ?>>
                                <?= $sala->getNumero() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>

            </p>

            <p> <input type="submit" value="ALTERAR"> </p>
        </form>
    </div>
    <?php include './rodape.php'; ?>
</body>

</html>