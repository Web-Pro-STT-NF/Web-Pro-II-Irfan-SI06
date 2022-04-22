<?php
require_once "class_pasien.php";

class bmi extends pasien{
    public $berat;
    public $tinggi;

    function __construct($kode_pasien, $nama_pasien, $gender, $berat, $tinggi){
        parent::__construct($kode_pasien, $nama_pasien, $gender);
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function getBerat(){
        return $this->berat;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

    public function nilaiBMI(){
        $result = round($this->berat / (($this->tinggi/100)**2), 1);
        return $result;
    }

    public function statusBMI(){
        if($this->nilaiBMI() >= 30){
            return "Obesitas2";
        }

        elseif($this->nilaiBMI() <= 29.9 && $this->nilaiBMI() >=27){
            return "Obesitas1";
        }

        elseif($this->nilaiBMI() <= 26.9 && $this->nilaiBMI() >= 23){
            return "Kelebihan Berat Badan";
        }
        
        elseif($this->nilaiBMI() <= 23.9 && $this->nilaiBMI() >= 18.5){
            return "Normal ( Ideal )";
        }

        elseif($this->nilaiBMI() < 18.5){
            return "Kekurangan berat badan";
        }

        else{
            return;
        }
    }
}
?>