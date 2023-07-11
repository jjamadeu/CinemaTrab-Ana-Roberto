<?php
require_once 'Sessao.php';

// Verifica se o ID da sessão foi fornecido via GET ou POST
if (isset($_REQUEST['idSessao'])) {
    $idSessao = $_REQUEST['idSessao'];

    // Crie uma instância de Cinema (ou use a instância existente) para acessar os dados do sistema
    require_once 'Cinema.php';
    $cinema = new Cinema();

    // Busca a sessão com o ID fornecido
    $sessao = $cinema->buscarSessao($idSessao);

    // Verifica se a sessão foi encontrada
    if ($sessao != null) {
        // Verifica se o formulário foi enviado para atualizar os dados da sessão
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtém os dados atualizados do formulário
            $horario = $_POST['horario'];
            $data = $_POST['data'];

            // Atualiza os dados da sessão
            $sessao->setHorario($horario);
            $sessao->setData($data);

            // Redireciona para a página principal do sistema após a atualização
            header('Location: index.php');
            exit;
        }
    } else {
        echo "Sessão não encontrada.";
    }
} else {
    echo "ID da sessão não fornecido.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Alterar Sessão</title>
</head>

<body>
    <h1>Alterar Sessão</h1>
    <form method="POST">
        <label for="horario">Horário:</label>
        <input type="text" id="horario" name="horario" value="<?php echo $sessao->getHorario(); ?>" required><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" value="<?php echo $sessao->getData(); ?>" required><br>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>
