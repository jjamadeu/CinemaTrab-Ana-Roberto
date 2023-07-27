<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Sala</title>
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
            padding: 50px;
            margin-top: 195px;    

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

    </style>
</head>

<body>

    <?php
    require_once '../Classes/Cinema.php';
    $numSala = $_REQUEST['numSala'];
    $cinema = new Cinema();
    $sala = $cinema->buscarSala($numSala);
    ?>
    <?php include_once './cabecalho.php'; ?>
    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <div id='conteudo'>
        <h1>ALTERAR SALA</h1>
        <form action="alterarSala.php" method="get">

           <input type="hidden" name="numSalaAntigo" value='<?= $sala->getNumero() ?>'> 

            <p> NÚMERO DA SALA:
                 <label><input type="number" id="numSala" name="numSala" min="1" step="1"  value="<?= $sala->getNumero() ?>" required></label>            
            </p>
            <p>LOTAÇÃO:
                 <label><input type="number" id="lotacao" name="lotacao" min="1" step="1" max="200" value="<?= $sala->getLotacao() ?>" required></label>
            </p>

            <p> <input type="submit" value="ALTERAR"> </p>
        </form>
    </div>
    <?php include './rodape.php'; ?>
</body>

</html>