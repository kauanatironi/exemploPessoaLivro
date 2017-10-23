<?php

class Pessoa {
    //atributos
    private $nome;
    private $idade;
    private $sexo;
    
    //métodos 
    public function fazAniver(){
        $this->idade = $this->idade + 1;
    }
    public function apresenta(){
        echo "<br>Nome da figura: " . $this->nome;
        echo "<br>Sua idade: " . $this->idade;
        echo "<br>É do sexo: " . $this->sexo;
    }
   
    //especiais
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }


    
    
}
