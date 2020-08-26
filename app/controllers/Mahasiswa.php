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
}
