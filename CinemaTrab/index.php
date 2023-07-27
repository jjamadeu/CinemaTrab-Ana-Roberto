<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinema</title>
  <style>

    header {
      width: 100vw;
      background-color: #121212;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      border-bottom: solid #ffff00;
    }

    
    h1 {
    color: #ffff00;
    font-family: Geneva, tahoma, sans-serif; 
}
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #242424;
    }

    .sell-button {
      position: absolute;
      top: 32px;
      right: 20px;
      background-color: #ffff00;
      color: #003B15;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      padding: 10px 20px;
      font-size: 14px;
      text-align: center;
      text-decoration: none;
      font-weight: bold;
    }

    .sell-button:hover {
      transform: scale(1.1);
      transition: 1.3s;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 140px; /* Aumenta a distância entre os botões e as margens da página */
      height: 50vh;
    }

    .button-container {
      flex: 0 0 calc(33.33% - 24px); /* Reduz a largura do botão e aumenta a distância entre eles */
      max-width: calc(33.33% - 24px);
      padding: 6px;
      box-sizing: border-box;
      text-align: center;
    }

    .button {
      display: block;
      width: 90%;
      padding: 30px 0px; /* Diminui a altura e largura do botão */
      background-color: #ffff00;
      color: #000000;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      font-size: 17px;
      text-align: center;
      text-decoration: none;
      font-weight: bold;
    }
    .button:hover {
    transform: scale(1.1);
    transition: 1.3s;
}

    a {
      text-decoration: none;
      color: #003B15;
    }
    

    @media screen and (max-width: 600px) {
      .button-container {
        flex: 0 0 calc(50% - 16px); /* Em telas menores, cada coluna ocupará 50% da largura com espaçamento de 16px */
        max-width: calc(50% - 16px);
      }
    }
  </style>
</head>
<body>


  <header>
    <h1>Cine ToBem</h1>
    <label><a href="./Telas/formEscolherSessaoDeVenda.php"><button class="sell-button">VENDER INGRESSOS</button></a> </label>
  </header>

  <div class="container">
    <div class="button-container">
    <label> <a href="./Telas/formCadFilme.php"><button class="button">CADASTRAR FILME</button></a> </label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formCadSala.php"><button class="button">CADASTRAR SALA</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formCadSessao.php"><button class="button">CADASTRAR SESSÃO</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formEscolherFilme.php"><button class="button">ALTERAR FILME</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formEscolherSala.php"><button class="button">ALTERAR SALA</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formEscolherSessao.php"><button class="button">ALTERAR SESSÃO</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/listarFilmes.php"><button class="button">LISTAR FILME</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/listarSalas.php"><button class="button">LISTAR SALA</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/listarSessoes.php"><button class="button">LISTAR SESSÃO</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formRemoverFilme.php"><button class="button">REMOVER FILME</button></a> <label>
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formRemoverSala.php"><button class="button">REMOVER SALA</button></a> <label> 
    </div>
    <div class="button-container">
    <label> <a href="./Telas/formRemoverSessao.php"><button class="button">REMOVER SESSÃO</button></a> <label>
    </div>
  </div>
</body>
<?php require_once './Telas/rodape.php' ?> 
</html>
