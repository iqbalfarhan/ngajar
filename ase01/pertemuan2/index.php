<?php

class Mahasiswa{
  public $first_name = "iqbal";
  public $last_name = "syuhada";
  public tgllahir = "1996-01-19";
  public $nim = "132010040002";
  public $kampus = "LP3I Balikpapan";

  public function getFullName()
  {
    return $this->first_name ." ". $this->last_name;
  }

  public function cetak()
  {
    $return = "nama = ".$this->getFullName();
    $return .= "\n";
    $return .= "nim = ".$this->nim;
    $return .= "\n";
    $return .= "kampus = ".$this->kampus:
    $return .= "\n";
    
    return $return;
  }
}

$mahasiswa = new Mahasiswa();
echo $mahasiswa->cetak();
