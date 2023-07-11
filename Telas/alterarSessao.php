<?php
    require_once 'Cinema.php';

    $idSessao = $_GET['idSessao'];

    $cinema = new Cinema();

    $sessao = $cinema->buscarSessao($idSessao);

    if (!$sessao) {

        echo "<script>alert('Sessão não encontrada!');";
        echo "window.location.href = 'index.php';</script>";
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Sessão</title>
</head>
<body>
    <h1>Alterar Sessão</h1>
    <form action="atualizarSessao.php" method="POST">
        <input type="hidden" name="idSessao" value="<?php echo $idSessao; ?>">
        <label for="horario">Horário:</label>
        <input type="text" name="horario" id="horario" value="<?php echo $sessao->getHorario(); ?>">
        <br>
        <label for="data">Data:</label>
        <input type="text" name="data" id="data" value="<?php echo $sessao->getData(); ?>">
        <br>
        <input type="submit" value="Alterar">
    </form>
</body>
</html>