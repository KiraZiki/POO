<?php

interface NFDao
{
    public function persiste(NotaFiscal $nf);
}

class NFDaoEmMemoria implements NFDao
{
    private array $storage = [];

    public function persiste(NotaFiscal $nf)
    {
        $this->storage[] = $nf;
        echo "Nota Fiscal persistida em memória.\n";
    }
}

?>
