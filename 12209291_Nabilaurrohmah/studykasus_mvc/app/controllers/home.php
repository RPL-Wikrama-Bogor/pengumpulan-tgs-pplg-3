<?php

    // class Home{
    //     public function index($nama = 'jojo', $pekerjaan = 'Pelajar')
    //     {
    //         echo "Halo, nama saya $nama dan saya merupakan seorang $pekerjaan";
    //     }
    // }
    // class Home extends Controller{
    //     public function index()
    //     {
    //         $data['nama'] = 'Nabila';
    //         $data['pekerjaan'] = 'Pelajar';
    //         $data['judul'] = 'Home';
    //         $this->view('templates/header', $data);
    //         $this->view('home/index', $data);
    //         $this->view('templates/footer');
    //     }

    //     public function page()
    //     {
    //         $data['judul'] = 'page';
    //         $this->view('templates/header', $data);
    //         $this->view('home/page');
    //         $this->view('templates/footer');
    //     }
    // }
    class Home extends Controller{
        public function index()
        {
            $data['judul'] = 'Home';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }

        public function page()
        {
            $data['judul'] = 'Page';
            $data['gambar'] = 'pocoyo1.jpg';
            $data['nama'] = 'nabila';
            $data['pekerjaan'] = 'pelajar';
            $this->view('templates/header', $data);
            $this->view('home/page', $data);
            $this->view('templates/footer');
        } 
    }
?>