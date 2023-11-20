<?php

class Siswa extends Controler{
    public function index() {
        $data['judul'] = 'daftar siswa';
        $this->views('templates/header');
        $this->views('siswa/index');
        $this->views('templates/footer');
    }
}

?>