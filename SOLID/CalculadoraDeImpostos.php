<?php

interface CalculadorDeImposto
{
    public function para(NotaFiscal $nf): float;
}

class CalculadorDeImpostoSimples implements CalculadorDeImposto
{
    public function para(NotaFiscal $nf): float
    {
        $valor = $nf->getValor();
        $imposto = $valor * 0.10;
        return $imposto;
    }
}

?>
