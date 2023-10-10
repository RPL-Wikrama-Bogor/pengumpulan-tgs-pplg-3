<?php


class Buku extends Controler {

    public function index()
    {
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->views('templates/header', $data);
        $this->views('buku/index', $data);
        $this->views('templates/footer', $data);
    }

    
    public function tambah()
    {
        $data['judul'] = 'Tambah Buku';
        $this->views('templates/header', $data);
        $this->views('buku/create', $data);
        $this->views('templates/footer', $data);
    }

    public function simpanBuku()
    {
        if ($this->model('BukuModel')->tambahBuku($_POST) > 0) {
            header('location: '.BASEURL . '/buku/index');
            exit;
        }else{
            header('location: '. BASEURL . '/buku/index');
            exit;
        }
    }

    public function edit($id) {
        $data['judul'] = 'Edit Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id);
        $this->views('templates/header', $data);
        $this->views('buku/edit', $data);
        $this->views('templates/footer', $data);
    }

    
    public function updateBuku()
    {
        if ($this->model('BukuModel')->updateDataBuku($_POST) > 0) {
            header('location: '.BASEURL . '/buku/index');
            exit;
        }else{
            header('location: '. BASEURL . '/buku/index');
            exit;
        }
    }

    
    public function hapus($id)
    {
        if ($this->model('BukuModel')->deleteBuku($id) > 0) {
            header('location: '.BASEURL . '/buku/index');
            exit;
        }else{
            header('location: '. BASEURL . '/buku/index');
            exit;
        }
    }
}