<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário De Cadastro de Filme</title>
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

        #conteudo {
            background-color: #111111;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-top: 50px;

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

        input,
        textarea {
            padding: 8px;
            border: none;
            border-radius: 15px;
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
            border-radius: 15px;
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
    <?php include_once './cabecalho.php'; ?>
    <div id="conteudo">
        <form action="./cadastrarFilme.php" method="get">
            <h1>CADASTRAR FILME</h1>
            <p>IDENTIDICADOR DO FILME: <label><input type="number" name="idFilme" min="1" step="1" required></label></p>
            <p>TÍTULO: <label><input name="tituloFilme" maxlength="100" required></label></p>
            <p>GÊNERO:<label>
                    <select name="generoFilme" required>
                        <option value="acao">Ação</option>
                        <option value="aventura">Aventura</option>
                        <option value="comedia">Comédia</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="ficcao_cientifica">Ficção Científica</option>
                        <option value="romance">Romance</option>
                        <option value="thriller">Thriller</option>
                        <option value="fantasia">Fantasia</option>
                    </select></label></p>
            <p>
                SINOPSE: 
                <label>
                    <textarea name="sinopseFilme" maxlength="500" required></textarea>
                </label>
            </p>
            <p>CLASSIFICACÃO:<label>
                    <select name="classificacaoFilme" required>
                        <option value="livre">Livre</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                        <option value="14">14</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                    </select></label></p>
            <p>DURAÇÃO: <label><input type="time" name="duracaoFilme" min="00:01" max="05:00" required></label></p>
            <p><input type="submit" value="CADASTRAR"></p>
        </form>
    </div>
    <?php include './rodape.php'; ?>
</body>

</html>