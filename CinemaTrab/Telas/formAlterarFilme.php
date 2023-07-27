<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Filme</title>
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
            padding: 30px;
            margin-top: 65px;    

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
            margin: 5px 0;
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

        input,
        textarea {
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

        table {
            padding: 8px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 200px;
            font-size: 14px;
            background-color: #0A0A0A;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFF000;
            text-align: center;
            padding-top: 5px;
        }

        tr {
            padding: 1px;
            border: none;
            border-radius: 25 px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 200px;
            font-size: 14px;
            background-color: #4F4F4F;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFF000;
            text-align: center;
            padding-top: 5px;
        }

        th {
            padding: 8px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 200px;
            font-size: 14px;
            background-color: #1C1C1C;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFF000;
            text-align: center;
            padding-top: 5px;
        }

        td {
            margin: 10px 0;
            color: #FFF000;
            background-color: #DCDCDC;
            font-family: Geneva, tahoma, sans-serif;
            padding-top: 10px;
        }

        #titulo,
        #id {
            padding: 10px;
            border-radius: 25px;
        }
    </style>
</head>

<body>

    <?php
    require_once '../classes/Cinema.php';

    $idFilme = $_REQUEST['idFilme'];
    $cinema = new Cinema;
    $filme = $cinema->buscarFilme($idFilme);
    ?>
    <?php include_once './cabecalho.php'; ?>
    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <div id="conteudo">
        <h1>Alterar Filme</h1>
        <form action="./alterarFilme.php" method="get">
            <p> <input type='hidden' name="idFilmeAntigo" value='<?= $filme->getIdFilme() ?>'> </p>
            <p>ID: <label><input type='number' id="id" name="idFilme" min="1" step="1" value='<?= $filme->getIdFilme() ?>'></label> </p>
            <p>TÍTULO: <label><input type='text' id="titulo" name="tituloFilme" maxlength="100" value='<?= $filme->getTitulo() ?>'></label></p>
            <p>GÊNERO:<label>
                    <select name="generoFilme">
                        <option value="acao" <?php if ($filme->getGenero() == 'acao') echo 'selected'; ?>>Ação</option>
                        <option value="aventura" <?php if ($filme->getGenero() == 'aventura') echo 'selected'; ?>>Aventura</option>
                        <option value="comedia" <?php if ($filme->getGenero() == 'comedia') echo 'selected'; ?>>Comédia</option>
                        <option value="drama" <?php if ($filme->getGenero() == 'drama') echo 'selected'; ?>>Drama</option>
                        <option value="terror" <?php if ($filme->getGenero() == 'terror') echo 'selected'; ?>>Terror</option>
                        <option value="ficcao_cientifica" <?php if ($filme->getGenero() == 'ficcao_cientifica') echo 'selected'; ?>>Ficção Científica</option>
                        <option value="romance" <?php if ($filme->getGenero() == 'romance') echo 'selected'; ?>>Romance</option>
                        <option value="thriller" <?php if ($filme->getGenero() == 'thriller') echo 'selected'; ?>>Thriller</option>
                        <option value="fantasia" <?php if ($filme->getGenero() == 'fantasia') echo 'selected'; ?>>Fantasia</option>
                    </select></label></p>
                    <p>SINOPSE: <label><input name="sinopseFilme" required value='<?= $filme->getSinopse() ?>'></label></p></input></label>
            <p>CLASSIFICACÃO:<label>
                    <select name="classificacaoFilme">
                        <option value="livre" <?php if ($filme->getClassificacao() == 'livre') echo 'selected'; ?>>Livre</option>
                        <option value="10" <?php if ($filme->getClassificacao() == '10') echo 'selected'; ?>>10</option>
                        <option value="12" <?php if ($filme->getClassificacao() == '12') echo 'selected'; ?>>12</option>
                        <option value="14" <?php if ($filme->getClassificacao() == '14') echo 'selected'; ?>>14</option>
                        <option value="16" <?php if ($filme->getClassificacao() == '16') echo 'selected'; ?>>16</option>
                        <option value="18" <?php if ($filme->getClassificacao() == '18') echo 'selected'; ?>>18</option>
                    </select></label></p>
            <p>DURAÇÃO: <label><input type='time' name="duracaoFilme" min="00:01" max="07:00" value='<?= $filme->getDuracao() ?>'></label> </p>
            <p> <input type="submit" value="ALTERAR"> </p>
        </form>
    </div>
    <?php include './rodape.php'; ?>
</body>

</html>