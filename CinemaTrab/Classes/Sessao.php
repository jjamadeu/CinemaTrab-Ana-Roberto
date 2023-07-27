<?php

class Sessao
{
    private $idSessao;
    private $horario;
    private $data;
    private $filme;
    private $sala;
    private $assentosVendidos;


    function __construct($idSessao, $horario, $data, $filme, $sala)
    {
        $this->idSessao = $idSessao;
        $this->horario = $horario;
        $this->data = $data;
        $this->filme = $filme;
        $this->sala = $sala;
    }

    function __toString()
    {
        return "IdSessao: $this->idSessao <br> Horário: $this->horario <br> 
        Data: $this->data <br> Filme: $this->filme <br> $this->sala <br>";
    }

    function getIdSessao()
    {
        return $this->idSessao;
    }

    function setIdSessao($idSessao)
    {
        $this->idSessao = $idSessao;
    }

    function getHorario()
    {
        return $this->horario;
    }

    function setHorario($horario)
    {
        $this->horario = $horario;
    }

    function getData()
    {
        return $this->data;
    }

    function setData($data)
    {
        $this->data = $data;
    }


    function getFilme()
    {
        return $this->filme;
    }

    function setFilme($filme)
    {
        $this->filme = $filme;
    }

    function getSala()
    {
        return $this->sala;
    }

    function setSala($sala)
    {
        $this->sala = $sala;
    }

    function getAssentosVendidos()
    {
        if($this->assentosVendidos == null){
            return 0;
        }else{
            return $this->assentosVendidos;
        }
    }

    function getAssentosDisponiveis()
    {
        $lotacao = $this->sala->getLotacao(); // Obtém a lotação total da sala
        $assentosDisponiveis = $lotacao - $this->assentosVendidos; // Calcula a quantidade de assentos disponíveis
        return $assentosDisponiveis;
    }

    function venderAssento($quantidade)
    {
        $assentosDisponiveis = $this->getAssentosDisponiveis();  // Verifica se há assentos disponíveis para venda
        if ($quantidade <= $assentosDisponiveis) {
            $this->assentosVendidos += $quantidade;
        }
    }
}
