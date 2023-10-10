<?php

class Home extends Controler{
    public function index() {
            $data['nama'] = 'Rivaldo';
            $data['judul'] = 'home';
            $this->views('templates/header', $data);
            $this->views('home/index', $data);
            $this->views('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->views('templates/header', $data);
        $this->views('home/page', $data);
        $this->views('templates/footer', $data);
    }
}

?>