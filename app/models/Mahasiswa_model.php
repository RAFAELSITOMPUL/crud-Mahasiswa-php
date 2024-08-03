<?php

class Mahasiswa_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function tambah($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM mahasiswa ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function ubah($id)
    {
        $this->db->query("SELECT * FROM mahasiswa WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function prosesubah($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :jurusan)";
        $query = "UPDATE mahasiswa SET nama = :nama, nim = :nim, jurusan = :jurusan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}
