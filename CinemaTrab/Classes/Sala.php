<?php

class Sala 
{
    private $numSala;
    private $lotacao;
  

    function __construct($numSala, $lotacao)
    {
        $this->numSala = $numSala;
        $this->lotacao = $lotacao;
    }

    function __toString()
    {
        return "Sala: $this->numSala <br> Lotação: $this->lotacao <br>";
    }

    function getNumero()
    {
        return $this->numSala;
    }

    function setNumero($numSala)
    {
        $this->numSala = $numSala;
    }

    function getLotacao()
    {
        return $this->lotacao;
    }

    public function setLotacao($lotacao)
    {
        $this->lotacao = $lotacao;
    }

}
