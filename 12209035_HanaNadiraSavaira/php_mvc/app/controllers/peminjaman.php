<?php

class Peminjaman extends Controller {

    public function index() {
        $data['page'] = 'Data Peminjam';
        $data['peminjaman'] = $this->model('PinjamModel')->getAllPeminjam();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['page'] = 'Tambah Peminjam';
        $this->view('templates/header', $data);
        $this->view('peminjaman/create');
        $this->view('templates/footer');
    }

    public function simpanPeminjam() {
        if ($this->model('PinjamModel')->tambahPeminjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function edit($id) {
        $data['page'] = 'Edit Peminjam';
        $data['peminjaman'] = $this->model('PinjamModel')->getPeminjamById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjam() {
        if ($this->model('PinjamModel')->updateDataPeminjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('PinjamModel')->deletePeminjam($id) > 0 ) {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function cari() {
        $data['page'] = 'Data Peminjam';
        $data['peminjaman'] = $this->model('PinjamModel')->cariDataPeminjam();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    // public function simpanJam() {
    //     if($_POST['tgl_pinjam']){
    //         $tgl_pinjam= $_POST['tgl_pinjam'];
    //         $tgl_kembali= date('Y-m-d H:i:s', strtotime('+2 days', strtotime($tgl_pinjam)));
    //         $_POST['tgl_kembali'] = $tgl_kembali;
    //     }
    //     if( $this->model('PinjamModel')->tambahPeminjam($_POST) > 0 ) {
    //         header('location: '. BASE_URL . '/barang/index');
    //         exit;
    //     }else{
    //         header('location: '. BASE_URL . '/barang/index');
    //         exit;
    //     }
    // }

    // public function setStatus($data) {
    //     $this->model->setStatus($data);
    // }
}