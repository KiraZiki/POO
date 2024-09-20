<?php

class Produto implements OrcavelInterface{
    private $nome;
    private $estoque;
    private $preco;

    public function __construct($nome, $estoque, $preco){
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    //este médoto é o que está descrito na interface
    //é obrigatório a implementação da lógica aqui, nesta classe
    public function getPreco(){
        return $this->preco;
    }
}

?>