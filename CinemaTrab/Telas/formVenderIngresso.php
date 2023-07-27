<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para Venda de Ingressos</title>
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
            margin-top: 153px;

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
            text-align: center;


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

        
    </style>
</head>

<body>

    <?php
    require_once '../Classes/Cinema.php';
    $idSessao = $_REQUEST['idSessao'];
    $cinema = new Cinema();
    $sessao = $cinema->buscarSessao($idSessao);

    ?>
    <?php include_once './cabecalho.php'; ?>

    <div id='conteudo'> <h1> Vender Ingressos  </h1>
        <form action="venderIngresso.php" method='get'>
            <input type="hidden" value=" <?= $idSessao ?>" name="idSessaoAntigo">
            <p> INGRESSOS DISPONÍVEIS:
                <label><input type="number" readonly value="<?= $sessao->getAssentosDisponiveis();  ?>"> </label>
            </p>
            <p> INGRESSOS VENDIDOS:
                 <label><input type="number" readonly value="<?= $sessao->getAssentosVendidos(); ?>"> </label>
            </p>
            <p> VENDER INGRESSOS:
                 <label><input type="number" name="ingressosVendidos" step="1" min="1" max="<?= $sessao->getAssentosDisponiveis(); ?>" required> </label>
            </p>
            <p> <input type="submit" value="CONFIRMAR"> </p>
        </form>
    </div>
    <?php include './rodape.php'; ?>

</body>

</html>