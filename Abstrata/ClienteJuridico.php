<?php
class ClienteJuridico extends Cliente
{
    private $cnpj;
    private $ie; //inscrição estadual

    public function setCNPJ($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setIE($ie)
    {
        $this->ie = $ie;
    }

    public function mostrarDados()
    {
        parent::mostrarDados();
        echo "&nbsp; CNPJ: ".$this->cnpj."&nbsp; IE: ".$this->ie;
    }

    public function avaliarIdade()
    {
        if ($this->idade >= 40)
        {
            echo "<br> Cliente Juridico!";
        }
    }
}

?>