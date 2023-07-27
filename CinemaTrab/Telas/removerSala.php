<?php 

    require_once '../Classes/Cinema.php';

    $numSala = $_REQUEST['numSala'];

    $cinema = new Cinema();

    if (!empty($numSala)) {
        $cinema->removerSala($numSala);

        echo "<script>
            alert('Sala removida com sucesso');
            window.location.href = '../index.php';
        </script>";
    } else {
        echo "<script>
            alert('Erro! Sala não removida.');
            window.history.back();
        </script>";
    }
?>
