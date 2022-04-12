<?php
require_once "class_account.php";

class BankAccount extends Account
{
    public $customer;

    public function __construct($no, int $saldo_awal, string $cust)
    {
        parent::__construct($no, $saldo_awal);
        $this->customer = $cust;
    }

    public function cetak()
    {
        parent::cetak();
        echo ", Customer : " . $this->customer;
    }

    public function transfer($obj_account, $uang)
    {
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }

    public function account()
    {
        return $this->nomor;
    }

    public function saldo()
    {
        return $this->saldo;
    }
}
