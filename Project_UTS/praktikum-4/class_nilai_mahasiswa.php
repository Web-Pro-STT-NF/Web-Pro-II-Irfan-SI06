<?php
class NilaiMahasiswa{
    var $nilai;
    var $matkul;
    var $nim;

    function __construct($nim, $matkul, $nilai){
        $this->nilai = $nilai;
        $this->matkul = $matkul;
        $this->nim =$nim;

    }

    function getNim(){
        return $this->nim;
    }

    function getMatkul(){
        return $this->matkul;
    }


    function getNilai(){
        return $this->nilai;
    }

    function grade(){
        if ($this->nilai >= 85)
        return "A";

        elseif($this->nilai < 85)
        return "B";

        elseif($this->nilai < 70)
        return "C";

        elseif($this->nilai < 56)
        return "D";

        elseif($this->nilai < 36)
        return "E";
    }

    function hasil(){
        if ($this->nilai > 56)
        return "LULUS";
        elseif($this->nilai <=56)
        return "TIDAK LULUS";
    }
}
?>