<?php
class Book extends Controller {
    public function index()
    {
        $data['page'] = 'Data Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data); //view or view, book or buku
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Buku';
        $this->view('templates/header', $data);
        $this->view('buku/create'); //view or view, book or buku
        $this->view('templates/footer');
    }

    public function simpanBuku(){
        if( $this->model('BukuModel')->tambahBuku($_POST) > 0){
            header('location: ' . BASE_URL . '/book/index' );
            exit;
        }else{
            header('location: ' . BASE_URL . '/book/index' );
            exit;
        }
    }

    public function edit($id)
    {
        $data['page'] = 'Data Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/edit', $data); //view or view, book or buku
        $this->view('templates/footer');
    }

    public function updateBuku(){
        if( $this->model('BukuModel')->updateDataBuku($_POST) > 0){
            header('location: ' . BASE_URL . '/book/index' );
            exit;
        }else{
            header('location: ' . BASE_URL . '/book/index' );
            exit;
        }
    }

    public function hapus($id){
        if( $this->model('BukuModel')->deleteBuku($id) > 0){
            header('location: ' . BASE_URL . '/book/index' );
            exit;
        }else{
            header('location: ' . BASE_URL . '/book/index' );
            exit;
        }
    }
}

?>