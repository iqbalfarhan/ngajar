<?php

class Mahasiswa
{
    public $first_name;
    public $last_name;
    public $full_name;
    public $dob;
    public $umur;
    public $nim;
    public $kampus;
    public $pria = true;

    public function __construct($firstname, $lastname, $dob, $nim, $kampus = "LP3I Balikpapan")
    {
        //construct dijalankan paling awal ketika class di buat
        $this->first_name = $firstname;
        $this->last_name = $lastname;
        $this->dob = $dob;
        $this->nim = $nim;
        $this->kampus = $kampus;

        // menjalankan fungsi ketike construct
        $this->setFullname();
        $this->setUmur();
        $this->setJenisKelamin();
    }

    public function setUmur()
    {
        $this->umur = date('Y') - date('Y', strtotime($this->dob));
    }

    public function setJenisKelamin()
    {
        $this->pria = substr($this->nim, 4, 3) == "100" ? true : false;
    }

    public function setFullName()
    {
        $this->full_name = $this->first_name . " " . $this->last_name;
    }

    public function __toString()
    {
        $jeniskelamin = $this->pria ? "Laki-laki" : "Perempuan";
        $tanggallahir = date('l, d F Y', strtotime($this->dob));

        return "Hai, Perkenalkan saya {$this->first_name}, nama panjang saya {$this->full_name}." .
            "saya seorang {$jeniskelamin} dan saya belajar di {$this->kampus}. Sekarang saya berumur {$this->umur} tahun" .
            "karena saya lahir pada hari {$tanggallahir}";
    }
}

$iqbal = new Mahasiswa("Iqbal", "Farhan", "1996-01-19", "132010040002", "LP3I Balikpapan");
echo $iqbal;
