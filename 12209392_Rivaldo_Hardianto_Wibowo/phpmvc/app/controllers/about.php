<?php
    class About extends Controler {

        public function index($nama = 'Rivaldo',$pekerjaan = 'Pelajar', $umur = '16')
        {
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur'] = $umur;
            $data['judul'] = 'about me';
            $this->views('templates/header',$data);
            $this->views('about/index', $data);
            $this->views('templates/footer');

        }

        public function page()
        {   
            $data['judul'] = 'pages';
            $this->views('templates/header',$data);
            $this->views('about/page');
            $this->views('templates/footer');
        }
    }
?>