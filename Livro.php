<?php
require_once 'Pessoa.php';
require_once 'publicacao.php';

class Livro implements publicacao {
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function detalhes(){
        echo "<br> Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Contém " . $this->totPag . " páginas, e está aberto na página " . $this->pagAtual;
        echo "<br> Sendo lido por " . $this->leitor->getNome();
        echo "<br>";
    }
    
    public function __construct($titulo, $autor, $totPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPag() {
        return $this->totPag;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPag($totPag) {
        $this->totPag = $totPag;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual = $this->pagAtual + 1;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p > $this->totPag){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual = $this->pagAtual - 1;
    }

}
