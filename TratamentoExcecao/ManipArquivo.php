<?php

function abrirArquivo($nomeArquivo) {
    try {
    if (!file_exists($nomeArquivo)) {
    throw new Exception("Arquivo não
    encontrado.");
    }
    $arquivo = fopen($nomeArquivo, "r");
    if (!$arquivo) {
    throw new Exception("Não foi possível
    abrir o arquivo.");
    }
    // Processa o arquivo
    while (($linha = fgets($arquivo)) !== false) {
    echo $linha;
    }
    fclose($arquivo);
    } catch (Exception $e){
    echo "Erro: " . $e->getMessage();
    }
}
    abrirArquivo("exemplo.txt");

?>