<?php
class Account{
    public $nomor;
    private $saldo;

    function __construct($no,$saldo){
        $this->nomor = $no;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }

    public function TarikUang($uang){
        $this->saldo = $this->saldo - $uang;
    }


    public function withdraw($uang){
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak(){
        echo 'No.Account : '.$this->nomor;
        echo '<br/>Saldo : '.$this->saldo;
    }
}
?>