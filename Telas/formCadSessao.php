<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
        require_once '../Classes/Cinema.php';
        $cinema = new Cinema();
    ?>
    <div id="conteudo">
        <form action="./cadastrarSessao.php">
            <p>
                Número:
                <input type="number" name="numeroSessao">
            </p>
            <p>
                Data:
                <input type="date" name="dataSessao">
            </p>
             <p>
                Horário:
                <input type="time" name="horarioSessao">
            </p>
            <p>
                Filme:
                <select name="filmeSessao">
                <?php 
                    foreach ($cinema->getFilmes() as $filme) :
                ?>        
                
                <option value=<?= $filme->getTitulo()?>>
                    <?= $filme->getTitulo()?>
                </option>
                
                <?php    
                    endforeach;
                ?>                    
                </select>
            </p>
                <p>
                Sala:
                <select name="salaSessao">
                <?php 
                    foreach ($cinema->getSalas() as $sala) :
                ?>        
                
                <option value=<?= $sala->getNumero()?>>
                    <?= $sala->getNumero()?>
                </option>
                
                <?php    
                    endforeach;
                ?>                    
                </select>
            </p>
                
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>