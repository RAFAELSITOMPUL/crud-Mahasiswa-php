<?php

class Dosen_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function tambah($data)
    {
        $query = "INSERT INTO dosen VALUES ('', :nama, :nip, :tanggal_lahir, :alamat, :no_telpon, :email, :jabatan, departement_id)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telpon', $data['no_telpon']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('departement_id', $data['departement_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM dosen ORDER BY dosen_id DESC");
        return $this->db->resultSet();
    }

    // public function ubah($id)
    // {
    //     $this->db->query("SELECT * FROM dosen WHERE id = :id");
    //     $this->db->bind('id', $id);
    //     return $this->db->resultSet();
    // }

    // public function prosesubah($data)
    // {
    //     $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :jurusan)";
    //     $query = "UPDATE mahasiswa SET nama = :nama, nim = :nim, jurusan = :jurusan WHERE id = :id";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nim', $data['nim']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

}
