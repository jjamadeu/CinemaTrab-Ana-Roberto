<?php

    class Filme{
      
        private  $idFilme;
        private  $titulo;
        private  $genero;
        private  $sinopse;
        private  $classificacao; 
        private  $duracao;
        private  $exibicao = false;

        function __construct($idFilme, $titulo, $genero, $sinopse, $classificacao, $duracao){
        
            $this->idFilme = $idFilme;
            $this->titulo = $titulo;
            $this->genero = $genero;
            $this->sinopse = $sinopse;
            $this->classificacao = $classificacao;
            $this->duracao = $duracao;

        }

        function __toString(){
            return "Titulo: $this->titulo </br> Genêro: $this->genero </br> Sinópse: $this->sinopse </br>  Classificação: $this->classificacao </br> Duração: $this->duracao";
        }

        function getIdFilme(){
            return $this->idFilme;
        }
       
        function setIdFilme($idFilme){
            $this->idFilme = $idFilme;
        }

        function getTitulo(){
            return $this->titulo;
        }
        
        function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        function getGenero(){
            return $this->genero;
        }
        
        function setGenero($genero){
            $this->genero = $genero;
        }

        function getSinopse(){
            return $this->sinopse;
        }
        
        function setSinopse($sinopse){
            $this->sinopse = $sinopse;
        }
    
        function getClassificacao(){
            return $this->classificacao;
        }
        
        function setClassificacao($classificacao){
            $this->classificacao = $classificacao;
        }
        
        function getDuracao(){
            return $this->duracao;
        }

        function setDuracao($duracao){
            $this->duracao = $duracao;
        }
        
        function getExibicao(){
            if($this->exibicao = false){
                echo "Filme não Exibido!!";
            }else{
                echo "filme em exibição!!";
            }
        }

        function setExibicao(){
            if($this->exibicao = false){

                $this->exibicao = true;
            }else{
                $this->exibicao = false;
            } 

        }

    }