<?php

class BukuModel{
    private $table = 'tb_pinjam';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBuku($data)
    {
        $data['kembali'] = date('Y-m-d H:i:s', strtotime($data['tgl_pinjam'] . ' +2 days'));
        $data['status'] = "belum kembali";
        $query = "INSERT INTO tb_pinjam (nama, jenis_barang, no_barang, tgl_pinjam, kembali, status) VALUES (:nama, :jenis_barang, :no_barang, :tgl_pinjam, :kembali, :status)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('kembali', $data['kembali']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBuku($data)
    {
        if ($data['kembali'] != '0000-00-00 00:00:00' && $data['kembali'] > $data['tgl_pinjam']) {
            $data['status'] = 'Sudah Kembali';
        }  else {
            $data['kembali'] = date('Y-m-d H:i:s', strtotime($data['tgl_pinjam'] . ' +2 days'));
            $data['status'] = 'Belum Kembali';
        }
        // return $data['kembali'];
        $query = "UPDATE tb_pinjam SET nama=:nama, jenis_barang=:jenis_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, kembali=:kembali, status=:status WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('no_barang', $data['no_barang']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('kembali', $data['kembali']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteBuku($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id'); 
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function caridata($keyword)
    {
        $query = "SELECT * FROM tb_pinjam WHERE nama LIKE :keyword OR  jenis_barang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%" . $keyword . "%");
        return $this->db->resultSet();
    }
}
?>