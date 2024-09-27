<?php

class EntregadorDeNFs{
    private Correios $correios;
    private LeiDeEntrega $lei;
    public function __construct(Correios $correios,
    LeiDeEntrega $lei){
        $this->correios = $correios;
        $this->lei = $lei;
    }
    public function entregar(NotaFiscal $nf){
        if ($this->lei->deveEntregarUrgente($nf))
        $this->correios->enviaPorSedex10($nf);
        else $this->correios->enviaPorSedexComum($nf);
    }
}
interface LeiDeEntrega
{
    public function deveEntregarUrgente(NotaFiscal $nf);
}
interface Correios
{
    public function enviaPorSedex10(NotaFiscal $nf);public function enviaPorSedexComum(NotaFiscal $nf);
}

?>