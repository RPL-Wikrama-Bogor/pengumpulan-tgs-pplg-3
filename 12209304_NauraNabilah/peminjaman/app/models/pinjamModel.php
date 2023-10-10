<?php

class PinjamModel {
    private $table = 'pinjam';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
  
    public function getAllpinjam()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getPinjamById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPinjam($data) {
        $query = "INSERT INTO pinjam (nama_peminjam, jns_barang, no_barang, tgl_pinjam, tgl_kembali, status_pinjam) VALUES(:nama_peminjam, :jns_barang, :no_barang, :tgl_pinjam, :tgl_kembali, :status_pinjam)";
        $this->db->query($query);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jns_barang', $data['jns_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', date('Y-m-d H:i:s', strtotime($data['tgl_pinjam'] . ' +2 day')));
        $this->db->bind('status_pinjam', "Belum Kembali");
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataPinjam($data) {
        $query = "UPDATE pinjam SET nama_peminjam=:nama_peminjam, jns_barang=:jns_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali, status_pinjam=:status_pinjam WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jns_barang', $data['jns_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        if (date("Y-m-d H:i:s") > date($data['tgl_pinjam'])) {
            $this->db->bind('status_pinjam',  "Sudah Kembali");
        } else {
            $this->db->bind('status_pinjam', "Belum kembali");
        }
        $this->db->execute();

        return $this->db->rowcount();
    }

    public function deletePinjam($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getCari($data) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_peminjam LIKE :cari OR jns_barang LIKE :cari');
        $this->db->bind('cari', $data);
        return $this->db->resultSet();
    }
}

?>
