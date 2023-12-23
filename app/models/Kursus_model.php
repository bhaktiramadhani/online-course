<?php

class Kursus_model
{
    private $table = 'kursus';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKursus()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getKursusById($id_kursus)
    {
        $query = "SELECT * FROM $this->table WHERE id_kursus = :id_kursus";
        $this->db->query($query);
        $this->db->bind('id_kursus', $id_kursus);
        return $this->db->single();
    }

    public function tambahKursus($data)
    {
        $query = "INSERT INTO $this->table
        VALUES
        ('', :judul_kursus, :deskripsi_kursus, :durasi, :thumbnail)";
        $this->db->query($query);
        $this->db->bind('judul_kursus', $data['judul_kursus']);
        $this->db->bind('thumbnail', $data['thumbnail']);
        $this->db->bind('deskripsi_kursus', $data['deskripsi_kursus']);
        $this->db->bind('durasi', $data['durasi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahKursus($data)
    {
        $query = "UPDATE $this->table
                    SET
                    judul_kursus = :judul_kursus,
                    deskripsi_kursus = :deskripsi_kursus,
                    durasi = :durasi,
                    thumbnail = :thumbnail
                    WHERE id_kursus = :id_kursus";
        $this->db->query($query);
        $this->db->bind('judul_kursus', $data['judul_kursus']);
        $this->db->bind('deskripsi_kursus', $data['deskripsi_kursus']);
        $this->db->bind('durasi', $data['durasi']);
        $this->db->bind('thumbnail', $data['thumbnail']);
        $this->db->bind('id_kursus', $data['id_kursus']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusKursus($id_kursus)
    {
        $query = "DELETE FROM $this->table WHERE id_kursus = :id_kursus";
        $this->db->query($query);
        $this->db->bind('id_kursus', $id_kursus);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
