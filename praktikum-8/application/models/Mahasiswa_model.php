<?php
class Mahasiswa_model extends CI_Model {
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;
    public function predikat(){
        $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
        return $predikat; 
    } 
    public function getAll(){
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row();
    }
}
?>