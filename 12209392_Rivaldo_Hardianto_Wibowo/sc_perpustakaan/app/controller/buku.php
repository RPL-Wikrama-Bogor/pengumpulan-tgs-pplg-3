<?php


class buku extends Controller {

    public function index()
    {
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->model('Buku_Model')->getAllBuku();
        $this->views('template/header', $data);
        $this->views('buku/index', $data);
        $this->views('template/footer', $data);
    }

    
    public function tambah()
    {
        $data['judul'] = 'Tambah Buku';
        $this->views('template/header', $data);
        $this->views('buku/create', $data);
        $this->views('template/footer', $data);
    }

    public function simpanBuku()
    {
        $_POST['tgl_kembali'] = date('Y-m-d H:i:s', strtotime($_POST['tgl_pinjam'] . ' +2 days'));
        var_dump($_POST);
        if ($this->model('Buku_Model')->tambahBuku($_POST) > 0) {
            header('location: '.BASEURL . '/buku/index');
            exit;
        }else{
            header('location: '. BASEURL . '/buku/index');
            exit;
        }
    }

    public function edit($id) {
        $data['judul'] = 'Edit Buku';
        $data['buku'] = $this->model('Buku_Model')->getBukuById($id);
        $this->views('template/header', $data);
        $this->views('buku/edit', $data);
        $this->views('template/footer', $data);
    }

    
    public function updateBuku()
    {
        if ($this->model('Buku_Model')->updateDataBuku($_POST) > 0) {
            header('location: '.BASEURL . '/buku/index');
            exit;
        }else{
            header('location: '. BASEURL . '/buku/index');
            exit;
        }
    }

    
    public function hapus($id)
    {
        if ($this->model('Buku_Model')->deleteBuku($id) > 0) {
            header('location: '.BASEURL . '/buku/index');
            exit;
        }else{
            header('location: '. BASEURL . '/buku/index');
            exit;
        }
    }

    public function cari()
    {
    $data['judul'] = 'Data Peminjam';
    $data['buku'] = $this->model('Buku_Model')->caridata();
    $this->views('template/header', $data);
    $this->views('buku/index', $data);
    $this->views('template/footer');
    }
}
