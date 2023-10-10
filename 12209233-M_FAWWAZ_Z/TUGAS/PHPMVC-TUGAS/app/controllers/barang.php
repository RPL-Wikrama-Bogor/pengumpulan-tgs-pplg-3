<?php

class barang extends controller
{

    public function index()
    {
        $data['page'] = 'Data Barang';
        $data['barang'] = $this->model('modelBarang')->getallbarang();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Barang';

        $data['nama_peminjam_isi'] = isset($_POST['nama_peminjam']) ? $_POST['nama_peminjam'] : '';
        $data['jenis_barang_isi'] = isset($_POST['jenis_barang']) ? $_POST['jenis_barang'] : '';
        $data['no_barang_isi'] = isset($_POST['no_barang']) ? $_POST['no_barang'] : '';
        $data['tgl_pinjam_isi'] = isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : '';
        $this->view('templates/header', $data);
        $this->view('barang/tambah', $data);
        $this->view('templates/footer');
    }

    public function simpanbarang()
    {
        if (empty($_POST['nama_peminjam']) || empty($_POST['jenis_barang']) || empty($_POST['no_barang']) || empty($_POST['tgl_pinjam'])) {
            $message = "Silahkan isi";

            if (empty($_POST['nama_peminjam'])) {
                $message .= " Nama";
            }
            if (empty($_POST['jenis_barang'])) {
                $message .= " Jenis";
            }
            if (empty($_POST['no_barang'])) {
                $message .= " No barang";
            }
            if (empty($_POST['tgl_pinjam'])) {
                $message .= " Tanggal Peminjam";
            }

        } else {

            if ($this->model('modelBarang')->tambahBarang($_POST) > 0) {
                header('Location: ' . BASE_URL . '/barang/index');
                exit;
            } else {
                header('Location: ' . BASE_URL . '/barang/index');
                exit;
            }
        }
    }

    public function edit($id)
    {

        $data['page'] = 'Edit Barang';
        $data['barang'] = $this->model('modelBarang')->getbarangbyid($id);
        $this->view('templates/header', $data);
        $this->view('barang/edit', $data);
        $this->view('templates/footer');
    }

    public function updatebarang()
    {
        if ($this->model('modelBarang')->updatebarang($_POST) > 0) {
            header('location: ' . BASE_URL . '/barang/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/barang/index');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('modelBarang')->deletebarang($id) > 0) {
            header('location: ' . BASE_URL . '/barang/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/barang/index');
            exit;
        }
    }
    public function cari()
  {
    $data['page'] = 'Data Barang';
    $data['barang'] = $this->model('modelBarang')->cariBarang($_POST['search']);
    $this->view('templates/header', $data);
    $this->view('barang/index', $data);
    $this->view('templates/footer');
}

}