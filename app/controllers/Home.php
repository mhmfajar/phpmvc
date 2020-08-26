<?php

class Home extends Controller
{
  public function index()
  {
    $data = [
      'judul' => __CLASS__,
      'nama' => $this->model('User_model')->getUser()
    ];

    $this->view('home.index', $data);
  }
}
