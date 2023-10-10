<?php

class Pinjam extends Controller {
    public function index()
    {
        $data['page'] = 'Data Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getAllpinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Peminjaman';
        $this->view('templates/header', $data);
        $this->view('pinjam/create');
        $this->view('templates/footer');
    }

    public function simpan() {
        if( $this->model('PinjamModel')->tambahPinjam($_POST) > 0) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function edit($id){

        $data['page'] = 'Edit Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getPinjamById($id);
        $this->view('templates/header', $data);
        $this->view('pinjam/edit', $data);
        $this->view('templates/footer');
    }

    public function update() {
        if($this->model('PinjamModel')->updateDataPinjam($_POST) > 0) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function hapus($id) {
        if($this->model('PinjamModel')->deletePinjam($id) > 0) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function cari() {
        $data['page'] = 'Data Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getCari($_POST['cari']);
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }
}
