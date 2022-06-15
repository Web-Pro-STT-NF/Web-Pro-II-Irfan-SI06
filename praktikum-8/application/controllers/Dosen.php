<?php
class Dosen extends CI_Controller{
    public function index(){
        // method Dosen 1
        $this->load->model('dosen_model', 'dsn1');

        $this->dsn1->id="1";
        $this->dsn1->nidn="	0414047101";
        $this->dsn1->nama="Sirojul Munir, S.Si, M.Kom.";
        $this->dsn1->gender="L";
        $this->dsn1->pendidikan='Magister komputer';
        $this->dsn1->prodi='Teknik Informasi';
        

        // method Dosen 2
        $this->load->model('dosen_model', 'dsn2');

        $this->dsn2->id="2";
        $this->dsn2->nidn="0413128601";
        $this->dsn2->nama="Ahmad Rio Adriansyah, S.Si. M.Si.";
        $this->dsn2->gender="L";
        $this->dsn2->pendidikan='Magister komputer';
        $this->dsn2->prodi='Sistem Informasi';

        // method Dosen 3
        $this->load->model('dosen_model', 'dsn3');

        $this->dsn3->id="3";
        $this->dsn3->nidn="420089004";
        $this->dsn3->nama="TIFANI NABARIAN, S.Kom, M.T.i";
        $this->dsn3->gender="P";
        $this->dsn3->pendidikan='Sarjana komputer';
        $this->dsn3->prodi='Bisnis Digital';

        //method Dosen 4
        $this->load->model('dosen_model', 'dsn4');
        $this->dsn4->id = $this->input->post('id');
        $this->dsn4->nidn = $this->input->post('nidn');
        $this->dsn4->nama = $this->input->post('nama');
        $this->dsn4->gender = $this->input->post('gender');
        $this->dsn4->pendidikan = $this->input->post('pendidikan');
        $this->dsn4->prodi = $this->input->post('prodi');

        // simpan objek yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }
}