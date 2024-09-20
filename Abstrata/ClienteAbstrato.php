<?php
require_once "Cliente.php";
require_once "ClienteFisico.php";
require_once "Teste.php";
require_once "ClienteJuridico.php";

$cf = new ClienteFisico();
$cf->setCodigo(1);
$cf->setNome("José");
$cf->setIdade(38);
$cf->setRG("11.111.111-0");
$cf->setCPF("111.111.111-00");
$cf->mostrarDados();

echo '<pre>';
echo  print_r($cf);
echo '</pre>';

$cj = new ClienteJuridico();
$cj->setCodigo(2);
$cj->setNome("Marisa");
$cj->setIdade(45);
$cj->setCNPJ("222.222.222-0001");
$cj->setIE("222.222.222");
$cj->mostrarDados();

echo '<pre>';
echo  print_r($cj);
echo '</pre>';

$teste = new Teste();
$teste->verificarIdade($cf);
$teste->verificarIdade($cj);

echo "<br><br> Usando o vetor de clientes <br>";
$vetClientes = [];
$vetClientes[] = $cf;
$vetClientes[] = $cj;
foreach ($vetClientes as $cliente){
    if ($cliente instanceof Cliente) {
        echo $cliente->mostrarDados();
    }
}
?>