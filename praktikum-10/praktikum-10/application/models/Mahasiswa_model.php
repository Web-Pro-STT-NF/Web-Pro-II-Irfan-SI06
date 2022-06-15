<?php 
 class Mahasiswa_model extends CI_Model{

     private $table = "mahasiswa";
     
     public function getAll(){
         //SELECT * FROM mahasiswa
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         // SELECT * FROM mahasiswa WHERE nim=$id;
         $this->db->where('nim',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function save($data){
         // INSERT INTO mahasiswa (nim,nama,gender,tmp_lahir,tgl_lahir,ipk)
         // VALUES ('021312','ahmad','L','Jakarta','2000-05-04',3.40);
         $sql = "INSERT INTO mahasiswa 
         (nim,nama,gender,tmp_lahir,tgl_lahir,prodi_kode,ipk)
           VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);

     }

     public function update($data){
        // UPDATE
        $sql = "UPDATE mahasiswa SET nim=?,nama=?,gender=?,tmp_lahir=?,
        tgl_lahir=?,prodi_kode=?,ipk=? WHERE nim=?";
         $this->db->query($sql,$data);
     }

     public function delete($id){
        // DELETE FROM mahasiswa WHERE nim=$id;
        $sql = "delete from mahasiswa where nim=?";
        $this->db->query($sql,array($id));
     }


     /*
     public $id;
     public $nama;
     public $gender;
     public $tmp_lahir;
     public $tgl_lahir;
     public $ipk;
     public $prodi;

     public function predikat(){
         $predikat = ($this->ipk >= 3.75)?"Cumlaude":"Baik";
         return $predikat;
     }

     public function getAll(){
         $result  = $this->db->get('mahasiswa')->result();
         return $result;
     }
     */
 }

?>