<?php

class Controller
{
  public function view($view, $data = [])
  {
    $url = str_replace(".", "/", $view);
    require_once '../app/views/templates/header.php';
    require_once '../app/views/' . $url . '.php';
    require_once '../app/views/templates/footer.php';
  }
}
