<?php

class pinjam extends Controller {

    public function index() {
        $data['page'] = 'Data pinjam';
        $data['pinjam'] = $this->model('PinjamModel')->getAllPinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['page'] = 'Tambah pinjam';
        $this->view('templates/header', $data);
        $this->view('pinjam/create');
        $this->view('templates/footer');
    }

    public function simpanpinjam() {
        if ($this->model('pinjamModel')->tambahpinjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function edit($id) {
        $data['page'] = 'pinjam';
        $data['pinjam'] = $this->model('pinjamModel')->getPinjamById($id);
        $this->view('templates/header', $data);
        $this->view('pinjam/edit', $data);
        $this->view('templates/footer');
    }
 
    public function updatepinjam() {
        if ($this->model('pinjamModel')->updateDataPinjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('pinjamModel')->deletepinjam($id) > 0 ) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function cari(){
        $data['page'] = 'Data pinjam';
        $data['pinjam'] = $this->model('pinjamModel')->cariDataPinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function reset() {
        $data['page'] = 'Data pinjam';
        $data['pinjam'] = $this->model('PinjamModel')->resetPinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }
}