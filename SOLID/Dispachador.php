<?php

class DespachadorDeNotasFiscais
{
    private NFDao $dao;
    private CalculadorDeImposto $impostos;
    private EntregadorDeNFs $entregador;

    public function __construct(NFDao $dao, CalculadorDeImposto $impostos, EntregadorDeNFs $entregador){
        $this->dao = $dao;
        $this->impostos = $impostos;
        $this->entregador = $entregador;
    }

    public function processa(NotaFiscal $nf){
        $imposto = $this->impostos->para($nf);
        $nf->setImposto($imposto);
        $this->entregador->entregar($nf);
        $this->dao->persiste($nf);
    }
}

?>
