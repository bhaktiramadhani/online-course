<?php

class Materi_model
{
    private $table = 'materi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMateri()
    {
        $query = "SELECT $this->table.*, kursus.*
                    FROM $this->table
                    JOIN kursus
                    on kursus.id_kursus = $this->table.id_kursus;";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMateriByIdKursus($id_kursus)
    {
        $query = "SELECT * FROM $this->table WHERE id_kursus = :id_kursus";
        $this->db->query($query);
        $this->db->bind('id_kursus', $id_kursus);
        return $this->db->resultSet();
    }

    public function getMateriByIdMateri($id_materi)
    {
        $query = "SELECT * FROM $this->table WHERE id_materi = :id_materi";
        $this->db->query($query);
        $this->db->bind('id_materi', $id_materi);
        return $this->db->single();
    }

    public function tambahMateri($data)
    {
        $query = "INSERT INTO $this->table
                    VALUES
                    ('', :id_kursus, :judul_materi, :deskripsi_materi, :link_embed)";
        $this->db->query($query);
        $this->db->bind('id_kursus', $data['id_kursus']);
        $this->db->bind('judul_materi', $data['judul_materi']);
        $this->db->bind('deskripsi_materi', $data['deskripsi_materi']);
        $this->db->bind('link_embed', $data['link_embed']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahMateri($data)
    {
        $query = "UPDATE $this->table SET
                    judul_materi = :judul_materi,
                    deskripsi_materi = :deskripsi_materi,
                    link_embed = :link_embed
                    WHERE id_materi = :id_materi";
        $this->db->query($query);
        $this->db->bind('id_materi', $data['id_materi']);
        $this->db->bind('judul_materi', $data['judul_materi']);
        $this->db->bind('deskripsi_materi', $data['deskripsi_materi']);
        $this->db->bind('link_embed', $data['link_embed']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusMateri($id_materi)
    {
        $query = "DELETE FROM $this->table WHERE id_materi = :id_materi";
        $this->db->query($query);
        $this->db->bind('id_materi', $id_materi);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
