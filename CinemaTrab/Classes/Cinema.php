<?php

    require_once 'Sala.php';
    require_once 'Sessao.php';
    require_once 'Filme.php';

    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    //PASTASISTEMA constante que armazena o nome da pasta que representa o sistema
    define('CinemaTrab', 'CinemaTrab');
    //PATH constante com o caminho completo até a pasta do sistema (dentro do servidor)
    define('PATH', ROOT . '/' .  CinemaTrab  . '/');


class Cinema
{

    private  $filmes = [];
    private  $sessoes = [];
    private  $salas = [];

    //***METODO MAGICO***//

    function __construct()
    {

        if (file_exists(PATH . 'cinema.save')) {
            $dados = file_get_contents(PATH . 'cinema.save');
            $cinema = unserialize($dados);

            $this->filmes = $cinema->filmes;
            $this->sessoes = $cinema->sessoes;
            $this->salas = $cinema->salas;
        }
    }

    function __destruct()
    {
        $serializado = serialize($this);
        file_put_contents(PATH . 'cinema.save', $serializado);
    }

    //***FILME***//

    function getFilmes(){
        return $this->filmes;
    }
    
    function adicionarFilme($filme)
    {
        $aux = $this->buscarFilme($filme->getIdFilme());
        if ($aux == null) {
            $this->filmes[] = $filme;
            return true; // O filme foi adicionado com sucesso
        } else {
            return false; // O ID do filme já existe
        }
    }

    function listarFilme()
    {
        foreach ($this->filmes as $filmes) {
            echo "$filmes </br></br></br>";
        }
    }

    function removerFilme($idFilme)
    {
        $rm = null; //remove indice
        foreach ($this->filmes as $ind => $filme) {
            if ($filme->getIdFilme() == $idFilme) {
                $rm = $ind;
            }
            if ($rm !== null) {
                unset($this->filmes[$rm]);
            }
        }
    }

    function buscarFilme($idFilme)
    {
        foreach ($this->filmes as $filme) {
            if ($filme->getIdFilme() == $idFilme) {
                return $filme;
            }
        }
        return null;
    }

    //***SESSAO***//
    function getSessoes(){
        return $this->sessoes;
    }

   function adicionarSessao($sessao)
    {
        $aux = $this->buscarSessao($sessao->getIdSessao());
        if ($aux == null) {
            $this->sessoes[] = $sessao;
            return true; 
        } else {
            return false;
        }
    }

    function listarSessao()
    {
        foreach ($this->sessoes as $sessao) {
            echo "$sessao </br>";
        }
    }

    function buscarSessao($idSessao)
    {
        foreach ($this->sessoes as $sessao) {
            if ($sessao->getIdSessao() == $idSessao) {
                return $sessao;
            }
        }
        return null;
    }

    function removerSessao($idSessao)
    {
        $rm = null; //remove indice
        foreach ($this->sessoes as $ind => $sessao) {
            if ($sessao->getIdSessao() == $idSessao) {
                $rm = $ind;
            }

            if ($rm !== null) {
                unset($this->sessoes[$rm]);
            }
        }
    }

    //***SALA***//

    function getSalas(){
        return $this->salas;
    }

    function adicionarSala($sala)
    {
        $aux = $this->buscarSala($sala->getNumero());
        if ($aux == null) {
            $this->salas[] = $sala;
            return true;
        } else {
            return false;
        }
    }

    function listarSala()
    {
        foreach ($this->salas as $sala)
            echo "$sala <br>";
    }

    function buscarSala($numSala)
    {
        foreach ($this->salas as $sala) {
            if ($sala->getNumero() == $numSala) {
                return $sala;
            }
        }
        return null;
    }

    function removerSala($numero)
    {
        $rm = null; //remove indice
        foreach ($this->salas as $ind => $sala) {
            if ($sala->getNumero() == $numero) {
                $rm = $ind;
            }

            if ($rm !== null) {
                unset($this->salas[$rm]);
            }
        }
    }
}
