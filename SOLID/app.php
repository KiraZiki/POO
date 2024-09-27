<?php

require_once 'EntregadorDeNFs.php';
require_once 'NFDao.php';
require_once 'CalculadorDeImposto.php';

class NotaFiscal
{
    private float $valor;
    private float $imposto;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setImposto(float $imposto)
    {
        $this->imposto = $imposto;
    }

    public function getImposto(): float
    {
        return $this->imposto;
    }
}

class LeiDeEntregaPadrao implements LeiDeEntrega
{
    public function deveEntregarUrgente(NotaFiscal $nf): bool
    {
        return $nf->getValor() > 1000;
    }
}

class CorreiosPadrao implements Correios
{
    public function enviaPorSedex10(NotaFiscal $nf)
    {
        echo "Enviando Nota Fiscal por Sedex 10.\n";
    }

    public function enviaPorSedexComum(NotaFiscal $nf)
    {
        echo "Enviando Nota Fiscal por Sedex Comum.\n";
    }
}

$dao = new NFDaoEmMemoria();
$impostos = new CalculadorDeImpostoSimples();
$lei = new LeiDeEntregaPadrao();
$correios = new CorreiosPadrao();
$entregador = new EntregadorDeNFs($correios, $lei);
$despachador = new DespachadorDeNotasFiscais($dao, $impostos, $entregador);

$nf = new NotaFiscal(1200);

$despachador->processa($nf);

echo "Imposto calculado: R$" . $nf->getImposto() . "\n";
?>

