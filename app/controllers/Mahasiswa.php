<?php

class Mahasiswa extends Controller
{
  public function index()
  {
    $data = [
      'judul' => 'Daftar Mahasiswa',
      'mhs' => $this->model('Mahasiswa_model')->getAllMahasiswa()
    ];

    $this->view('mahasiswa.index', $data);
  }

  public function detail($id)
  {
    $data = [
      'judul' => 'Detail Mahasiswa',
      'mhs' => $this->model('Mahasiswa_model')->getMahasiswaById($id)
    ];

    $this->view('mahasiswa.detail', $data);
  }

  public function tambah()
  {
    if ($this->model('Mahasiswa_Model')->tambahDataMahasiswa($_POST) > 0) {
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
}
