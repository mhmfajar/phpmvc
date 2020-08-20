<?php

class About extends Controller
{
  public function index($nama = 'Fajar', $pekerjaan = 'Nganggur', $umur = 22)
  {
    $data = [
      'judul' => 'About',
      'nama' => $nama,
      'pekerjaan' => $pekerjaan,
      'umur' => $umur
    ];

    $this->view('about.index', $data);
  }

  public function page()
  {
    $data = [
      'judul' => 'About | Page'
    ];

    $this->view('about.page', $data);
  }
}
