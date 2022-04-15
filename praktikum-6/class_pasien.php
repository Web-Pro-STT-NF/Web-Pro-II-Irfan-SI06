<?php

class pasien{

    public $id;
    private $kode_pasien;
    public $nama_pasien;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    function __construct($kode_pasien, $nama_pasien, $gender){
        $this->kode_pasien = $kode_pasien;
        $this->nama_pasien = $nama_pasien;
        $this->gender = $gender;
    }
    

    public function getKode(){
        return$this->kode_pasien;
    }

    public function getNama(){
        return$this->nama_pasien;
    }

    public function getGender(){
       return $this->gender;
    }
}


?>