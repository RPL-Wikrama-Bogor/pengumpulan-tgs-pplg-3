<?php
    class home extends controller {
        public function index()
        {
            $data['judul'] = 'home';
            $this->view('templates/header', $data);
            $this->view('home/index',);
            $this->view('templates/footer');
        }
        public function page()
        {
            $data['judul'] = 'page';
            $data['gambar'] = 'zif.jpg';
            $data['nama'] = 'Razief';
            $data['pekerjaan'] = 'Pelajar';
            $this->view('templates/header', $data);
            $this->view('home/page', $data);
            $this->view('templates/footer');
        }
    }
?>