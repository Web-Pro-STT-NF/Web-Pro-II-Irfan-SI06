<?php
class Dosen_model extends CI_Model {
    public $id;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $nidm;
    public $pendidikan;

    public function getAll(){
        $query = $this->db->get('dosen');
        return $query->result();
    }

    public function getById($id){
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
?>