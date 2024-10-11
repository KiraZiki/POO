<?php
function dividir($numerador, $denominador) {
if ($denominador == 0) {
throw new Exception("Divisão por zero não é permitida.");
}
return $numerador / $denominador;
}
try {
echo "Resultado da divisão: ".dividir(10, 0);
} catch (Exception $e) {
echo "Erro: " . $e->getMessage();
}
?>