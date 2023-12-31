<?php

class pinjamModel {
    private $table = 'studi_kasus';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPinjam()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getPinjamById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahpinjam($data) {
        $query = "INSERT INTO studi_kasus (nama_peminjam, jenis_barang, no_barang, tgl_pinjam) VALUES(:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam)";
        $this->db->query($query);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->execute();

        return $this->db->rowCount();
    }       

    public function updateDataPinjam($data) {
        $query = "UPDATE studi_kasus SET nama_peminjam=:nama_peminjam, jenis_barang=:jenis_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->execute();

        return $this->db->rowcount();
    }

    public function deletePinjam($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPinjam(){
        $cari = $_POST['cari'];
        $query = "SELECT * FROM studi_kasus WHERE nama_peminjam LIKE :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        // $this->db->execute();

        return $this->db->resultSet();
    }

    public function resetPinjam()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    
}

?>




