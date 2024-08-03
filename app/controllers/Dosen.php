<?php

class Dosen extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Dosen';
        $data['dosen'] = $this->model('Dosen_model')->tampil();
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('dosen/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data Dosen';
        
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('dosen/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Dosen_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' .BASEURL.'Dosen');
            exit;
        }
    }

    // public function formubah($id)
    // {
    //     $data['title'] = 'Ubah Data Mahasiswa';
    //     $data['ubahdata'] = $this->model('Mahasiswa_model')->ubah($id);
    //     $this->view('templates/header', $data);
    //     $this->view('templates/topbar');
    //     $this->view('templates/sidebar', $data);
    //     $this->view('mahasiswa/ubah_data', $data);
    //     $this->view('templates/footer');
    // }

    
    // public function prosesubah()
    // {
    //     if ($this->model('Mahasiswa_model')->prosesubah($_POST) > 0) {
    //         Flasher::setFlash('berhasil', 'diubah', 'success');
    //         header('Location: '. BASEURL . 'Mahasiswa');
    //         exit;
    //     }

// }
// public function delete()
// {
//     if ($this->model('Example_model')->delete($_POST) > 0) {
//         Flasher::setFlash('berhasil', 'dihapus', 'success');
//         header('Location: ' .BASEURL .'Mahasiswa');
//         exit;
//     }
// }
}