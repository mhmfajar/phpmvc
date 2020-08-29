<?php

class Mahasiswa_model
{
  private $db, $table = 'mahasiswa';

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query(Select . $this->table);
    return $this->db->allSet();
  }

  public function getMahasiswaById($id)
  {
    $this->db->query(Select . $this->table . Id);
    $this->db->bind('id', $id);
    return $this->db->singleSet();
  }
}
