<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para alteração de Sala</title>
</head>
<body>

    <?php
        require_once '../Classes/Cinema.php';
        //$numSala = $_REQUEST['numSala'];
        //$cinema = new Cinema();
        //$sala = $cinema->buscarSala($numSala);
    ?>

    <form action="alterarSala.php" method="get">
        <p>
            Número antigo da Sala: <input type="number" id="numSalaAntigo" name="numSalaAntigo">
        </p>
        <p>
            Número da Sala: <input type="number" id="numSala" name="numSala">
        </p>
        <p>
            Lotação: <input type="number" id="lotacao" name="lotacao">            
        </p> 
        <input type="submit">
    </form>
</body>
</html>