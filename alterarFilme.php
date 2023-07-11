<?php
require_once 'Filme.php';

// Verifica se o ID do filme foi fornecido via GET ou POST
if (isset($_REQUEST['idFilme'])) {
    $idFilme = $_REQUEST['idFilme'];

    // Crie uma instância de Cinema (ou use a instância existente) para acessar os dados do sistema
    require_once 'Cinema.php';
    $cinema = new Cinema();

    // Busca o filme com o ID fornecido
    $filme = $cinema->buscarFilme($idFilme);

    // Verifica se o filme foi encontrado
    if ($filme != null) {
        // Verifica se o formulário foi enviado para atualizar os dados do filme
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtém os dados atualizados do formulário
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $sinopse = $_POST['sinopse'];
            $classificacao = $_POST['classificacao'];
            $duracao = $_POST['duracao'];

            // Atualiza os dados do filme
            $filme->setTitulo($titulo);
            $filme->setGenero($genero);
            $filme->setSinopse($sinopse);
            $filme->setClassificacao($classificacao);
            $filme->setDuracao($duracao);

            // Redireciona para a página principal do sistema após a atualização
            header('Location: index.php');
            exit;
        }
    } else {
        echo "Filme não encontrado.";
    }
} else {
    echo "ID do filme não fornecido.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Alterar Filme</title>
</head>

<body>
    <h1>Alterar Filme</h1>
    <form method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $filme->getTitulo(); ?>" required><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" value="<?php echo $filme->getGenero(); ?>" required><br>

        <label for="sinopse">Sinopse:</label
