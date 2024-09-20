<?php


namespace app;
class Calculadora
{
private array $operacoes=[];
public function somar($a, $b)
{
return $a + $b;
}
public function getOperacoes()
{
return $this->operacoes;
}
}



?>