<?php

require_once 'Cinema.php';

    $cinema = new Cinema();

    $filme1 = new Filme(5,'SpiderMan', 'Ficção', 'Homem Aranha', '14', '2:30');
    $filme2 = new Filme(10,'Superman', 'Ficção', 'Homem de aço', '14', '2:30');
     
    $sala1 = new Sala(1, 30);
    $sala2 = new Sala(2, 30);

    $sessao1 = new Sessao(1, '20:30', '28/06', $filme1, $sala1);
    $sessao2 = new Sessao(1, '20:30', '28/06', $filme1, $sala1);
    $sessao3 = new Sessao(2, '20:30', '28/06', $filme1, $sala1);


    /*          TESTE CLASSE SESSÃO

    echo $sessao1->venderAssento(2);
    echo $sessao1->venderAssento(4);        //VENDENDO INGRESSOS
    echo $sessao1->venderAssento(10);
    
    echo $sessao1->getAssentosDisponiveis(1);       //RETORNA ASSENTOS AINDA DISPONIVEIS
    echo $sessao1->getAssentosVendidos()        //RETORNA TODOS ASSENTOS VENDIDOS


               TESTE CLASSE CINEMA (SESSÃO)

    $cinema->adicionarSessao($sessao1);
    $cinema->adicionarSessao($sessao2);      //ADICIONANDO SESSÃO
    $cinema->adicionarSessao($sessao3);


    $cinema->removerSessao(1);         //REMOVENDO SESSÃO
    $cinema->listarSessao();         //LISTANDO TODAS AS SESSÕES ADICIONADAS
    
    echo "<pre>";
    echo $cinema->buscarSessao(2);          //BUSCANDO SESSÃO PELA IDSESSAO
    echo "</pre>";
    
    */
    


    /*          TESTE CLASSE CINEMA (FILME)

    $cinema->adicionarFilme($filme1);
    $cinema->adicionarFilme($filme2);          //ADICIONANDO FILME


    $cinema->removerFilme(1);           //REMOVENDO FILME
    $cinema->listarFilme();             //LISTANDO TODOS OS FILMES ADICIONADOR
    
    echo "<pre>";
    echo $cinema->buscarFilme(2);           //BUSCANDO FILME PELO IDFILME
    echo "</pre>";

    */



    /*                TESTE CLASSE CINEMA (FILME)
  
    $cinema->adicionarSala($sala1);             
    $cinema->adicionarSala($sala2);         //ADICIONANDO SALA


    $cinema->removerSala(1);        //REMOVENDO UMA SALA ESPECIFICA
    $cinema->listarSala();          //LISTANDO TODAS AS SALAS ADICIONADAS

    echo "<pre>";
    echo $cinema->buscarSala(2);        //BUSCANDO UMA SALA ESPECIFICA
    echo "</pre>";
    
   */
    