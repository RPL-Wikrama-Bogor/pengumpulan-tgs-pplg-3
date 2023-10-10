<?php

class Barang extends Controller {

    public function index()
    {
        $data['page'] = 'Data Buku';
        $data['barang'] =  $this->model('BarangModel')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Peminjaman';
        $this->view('templates/header', $data);
        $this->view('barang/create');
        $this->view('templates/footer');
    }
    
    public function simpanBarang() {
        if( $this->model('BarangModel')->tambahBarang($_POST) > 0 ) {
            header('location: '. BASE_URL . '/barang/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/barang/index');
            exit;
        }
    }

    public function edit($id)
    {
        $data['page'] = 'Edit Peminjaman';
        $data['barang'] = $this->model('BarangModel')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('barang/edit', $data);
        $this->view('templates/footer');
    }

    public function updateBarang()
    {
        if ($this->model('BarangModel')->updateDataBarang($_POST) > 0) {
            header('location: '. BASE_URL . '/barang/index');
            exit;
        }else {
            header('location: '. BASE_URL . '/barang/index');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('BarangModel')->deleteBarang($id) > 0) {
           header('location: '. BASE_URL . '/barang/index');
           exit;
        }else {
            header('location: '. BASE_URL . '/barang/index');
            exit;
        }
    }

    public function cari() {
        $data['page'] = 'Data Buku';
        $data['barang'] =  $this->model('BarangModel')->cariData();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }
}