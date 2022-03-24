<?php
class NilaiMahasiswa{
    var $nilai;
    var $matkul;
    var $nim;

    function __construct($nilai, $matkul, $nim){
        $this->nilai = $nilai;
        $this->matkul = $matkul;
        $this->nim =$nim;

    }

    function getNilai(){
        return $this->nilai;
    }

    function getMatkul(){
        return $this->matkul;
    }

    function getNim(){
        return $this->nim;
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