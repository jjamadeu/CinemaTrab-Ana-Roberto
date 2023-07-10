<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario De Cadastro de Filme</title>
</head>
<body>
    <?php
        require_once '../classes/Cinema.php';
        
        $idFilme = $_REQUEST['idFilme'];
        $cinema = new Cinema;
        $filme = $cinema->buscarFilme($idFilme);
    ?>

    <div id="conteudo">
      
        <form action="./alterarFilme.php" method="get">

        </form>
    </div>


</body>
</html>