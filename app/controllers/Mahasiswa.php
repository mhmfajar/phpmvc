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
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Mahasiswa_Model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('Mahasiswa_Model')->getMahasiswaById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Mahasiswa_Model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
}
