<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }

    public function page()
    {
        $data['judul'] = 'NOTEPAD';
        $data['gambar'] = 'messii.jpeg';
        $data['nama'] = 'Lionel Messi';
        $data['pekerjaan'] = 'Pemain sepak bola';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');

    }
}