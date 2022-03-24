<?php
class Mahasiswa{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk){
        $this->nim =$nim;
        $this->nama =$nama;
        $this->thn_angkatan =$thn_angkatan;
        $this->prodi =$prodi;
        $this->ipk =$ipk;
    }

    function getNim(){
        return $this->nim;
    }

    function getNama(){
        return $this->nama;
    }
    function getThn_angkatan(){
        return $this->thn_angkatan;
    }

    function getProdi(){
        return $this->prodi;
    }

    function getIpk(){
        return $this->ipk;
    }

    function predikat(){
        if ($this->ipk >= 3.75 && $this->ipk <= 4.00)
        return "Cumlaude";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
        return "Memuaskan";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
        return "Baik";
        elseif ($this->ipk < 2.0)
        return "Cukup";
    }
}
?>