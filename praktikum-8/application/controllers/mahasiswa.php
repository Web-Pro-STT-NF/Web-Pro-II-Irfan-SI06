<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
// METHOD MAHASISWA
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // buat objek model 1 dan nilainya
        $this->mhs1= new Mahasiswa_model();
        $this->mhs1->id=1;
        $this->mhs1->nim="010001";
        $this->mhs1->nama='Faiz Fikri';
        $this->mhs1->gender='L';
        $this->mhs1->prodi='Sistem Informasi';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        // buat objek model 2 dan nilainya
        $this->mhs2= new Mahasiswa_model();
        $this->mhs2->id=2;
        $this->mhs2->nim="020001";
        $this->mhs2->nama='Pandan Wangi';
        $this->mhs2->gender='P';
        $this->mhs2->prodi='Teknik Informasi';
        $this->mhs2->ipk=3.55;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id=3;
        $this->mhs3->nim = $this->input->post('nim');
        $this->mhs3->nama = $this->input->post('nama');
        $this->mhs3->gender = $this->input->post('gender');
        $this->mhs3->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs3->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs3->prodi = $this->input->post('prodi');
        $this->mhs3->ipk = $this->input->post('ipk');

        // simpan objek yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');

    }
}
