<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário De Cadastro de Filme</title>
</head>
<body>

    <div id="conteudo">
      
        <form action="./cadastrarFilme.php" method="get">

            <p>Id Filme: <input type="number" name="idFilme">     </p>

            <p>Titulo: <input name="tituloFilme">    </p>

            <p>Genero: <input name="generoFilme"  maxlength="10">    </p>

            <p>Sinopse: <input name="sinopseFilme">    </p>

            <p>Classificação: <input name="classificacaoFilme" maxlength="5">     </p>

            <p>Duração: <input type="time" name="duracaoFilme">    </p>

           
            <input type="submit" value="Enviar">
        </form>

    </div>


</body>
</html>