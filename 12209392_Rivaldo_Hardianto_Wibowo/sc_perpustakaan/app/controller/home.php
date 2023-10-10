<?php

class home extends Controller
{
    public function index(){
        $data['h5'] = 'Inventaris Alat Pembelajaran';
        $data['judul'] = 'Beranda Perpustakaan';
        $this->views('template/header', $data);
        $this->views('home/index', $data);
        $this->views('template/footer', $data); 
    }
}


?>