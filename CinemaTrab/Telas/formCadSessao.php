<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro da Sessão</title>
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

        #meuBotao{
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px 20px;
            background-color: #ffff00;
            color: #003B15;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            font-family: Geneva, Tahoma, sans-serif;
            text-decoration: none; 
            display: inline-block; 
        }

        #meuBotao:hover {
            background-color: #c7c708;
        }

        #conteudo {
            background-color: #111111;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 60px;    
        }

        form, label {
            width: 1px, 500px;
            right: 0%;
            display: flex;
            flex-direction:  column;
            align-items: center;
             position: relative;
            transition: right 0.2s;
        }
    
        p  {
            margin: 10px 0;
            color: #FFFFFF;
            font-family: Geneva, tahoma, sans-serif;
            padding-top: 10px;
            
        }

        h1{
            margin: 10px 0;
            color: #ffff00;
            font-family: Geneva, tahoma, sans-serif;
            padding-top: 10px;
            
        }

        input    {
            padding: 8px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 200px;
            font-size: 14px;
            background-color:  rgb(110,110,110); ;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFFFFF;
            text-align: center;
            padding-top: 5px;
        }
        select {
            padding: 12px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 219px;
            font-size: 14px;
            background-color:  rgb(110,110,110); ;
            font-family: Geneva, Tahoma, sans-serif;
            color: #FFFFFF;
            text-align: center;
            padding-top: 5px;
        }

        input[type="submit"] {
            padding: 10px 50px;
            background-color:#ffff00;
            color: #0A0A0A;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 80px;
            font-family: Geneva, Tahoma, sans-serif;
            font-weight: bold;     

        }

        input[type="submit"]:hover {
            background-color: #c7c708;

        }
    </style>

</head>
<body>
    <?php
      
        require_once '../Classes/Cinema.php';
        $cinema = new Cinema();
    ?>
    <?php include_once './cabecalho.php'; ?>
    <a href="../index.php" id="meuBotao"><span>VOLTAR</span></a>
    <div id="conteudo">
        <form action="cadastrarSessao.php">
            <h1>CADASTRAR SESSÃO</h1>
            <p>
                NÚMERO DA SESSÃO:
                <label><input type="number" name="idSessao" min="1" step="1" required></label>
            </p>
            <p>
                DATA:
                <label><input type="date" name="dataSessao" value="<?php echo date('Y-m-d'); ?>" required></label>          
            </p>
             <p>
                HORÁRIO:
                <label>
                    <input type="time" name="horarioSessao" min="11:00" max="21:00" required>
                </label> 
            </p>

            <p>
                FILME:
                <label>
                    <select name="filmeSessao" required>
                <?php 
                    foreach ($cinema->getFilmes() as $filme) :
                ?>        
                
                <option value=<?= $filme->getIdFilme()?>>
                    <?= $filme->getTitulo()?>
                </option>
                
                <?php    
                    endforeach;
                ?>                    
                </select>
                </label>
            </p>
            <p>
                SALA:
                <label>
                <select name="salaSessao" required>
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
                </label>
            </p>
                
             <p> <input type="submit" value="CADASTRAR"> </p>
        </form>
    </div>
   <?php include './rodape.php'; ?>
</body>
</html>