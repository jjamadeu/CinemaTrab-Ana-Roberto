<?php 
    
    require_once '../Classes/Cinema.php';
    $cinema = new Cinema();


    $ingressosVendidos = $_REQUEST['ingressosVendidos'];
    $idAntigo = $_REQUEST['idSessaoAntigo'];
    $sessao = $cinema->buscarSessao($idAntigo);
    $sessao->venderAssento($ingressosVendidos);

?>
<script>
    alert('Assentos Vendidos com sucesso!!!')
    window.location.href='./formVenderIngresso.php?idSessao='+<?=$idAntigo?>
</script>
