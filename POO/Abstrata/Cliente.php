<?php
abstract class Cliente
{
    protected $codigo;
    protected $nome;
    protected $idade;

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function mostrarDados()
    {
        echo "&nbsp; Código: ".$this->codigo."&nbsp; Nome: ".$this->nome. "&nbsp; Idade: ".$this->idade;
    }

    public abstract function avaliarIdade();
}
?>