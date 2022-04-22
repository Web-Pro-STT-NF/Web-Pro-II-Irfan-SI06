<?php
require_once 'class_akun.php';

class BankAccount extends Account{
    public $customer;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer=$customer;
    }

    // override method
    function cetak(){
        parent::cetak();
        echo '<br/>Customer : '.$this->customer;
    }

    public function transfer($ab_tujuan,$uang){
        $this->withdraw($uang);
        $ab_tujuan->deposit($uang);
        $this->biayatransfer();
    }
    private function biayatransfer(){
        $this->withdraw(6000);
    }
}
?>