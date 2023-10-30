<?php

class peminjaman extends controller {

    public function index() {
        $data['page'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('peminjamanmodel')->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['page'] = 'Tambah Peminjam';
        $this->view('templates/header', $data);
        $this->view('peminjaman/create', $data);
        $this->view('templates/footer');
    }

    public function simpanPeminjam() {
        $tgl= $_POST['tgl_pinjam'];
        $tgl1= date('Y-m-d H:i:s', strtotime('+2 days', strtotime($tgl)));
        $_POST['tgl_kembali'] = $tgl1;
        
        if($this->model('peminjamanmodel')->tambahPeminjaman($_POST) > 0) {
            header('Location: '. BASE_URL .' /peminjaman/index');
            exit;
        } else {
            header('Location: '. BASE_URL .' /peminjaman/index');
            exit;
        }
    }

    public function edit($id) {
        $data['page'] = 'Edit Peminjam';
        $data['peminjaman'] = $this->model('peminjamanmodel')->getPeminjamanById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjaman() {
        if($this->model('peminjamanmodel')->updateDataPeminjaman($_POST) > 0) {
            header('Location: '. BASE_URL .' /peminjaman/index');
            exit;
        } else {
            header('Location: '. BASE_URL .' /peminjaman/index');
            exit;
        }
    }

    public function hapus($id) {
        if($this->model('peminjamanmodel')->deletePeminjaman($id) > 0) {
            header('Location: '. BASE_URL .' /peminjaman/index');
            exit;
        } else {
            header('Location: '. BASE_URL .' /peminjaman/index');
            exit;
        }
    }

}

