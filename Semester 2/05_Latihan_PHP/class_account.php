<?php
class Account
{
    protected $nomor;
    protected $saldo;

    public function __construct($no, int $saldo)
    {
        $this->nomor = $no;
        $this->saldo = $saldo;
    }

    public function deposit($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    public function withdraw($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak()
    {
        echo "Nomor {$this->nomor}, Saldonya : {$this->saldo}";
    }
}
