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
}
