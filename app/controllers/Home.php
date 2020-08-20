<?php

class Home extends Controller
{
  public function index()
  {
    $data = [
      'judul' => __CLASS__
    ];

    $this->view('home.index', $data);
  }
}
