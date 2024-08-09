<?php
class ClienteFisico extends Cliente
{
    private $rg;
    private $cpf;

    public function setRG($rg)
    {
        $this->rg = $rg;
    }

    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    public function mostrarDados()
    {
        parent::mostrarDados();
        echo "&nbsp; RG: ". $this->rg . "&nbsp; CPF: ". $this->cpf. "<br>";
    }

    public function avaliarIdade()
    {
        if ($this->idade >= 18 and $this->idade <40)
        {
            echo "<br> Cliente Fisíco!";
        }
        else
        {
            echo "<br> Cliente Juridico!";
        }
    }
}

?>