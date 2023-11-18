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

    public function cetak()
    {
        return [
            "nama depan" => $this->first_name,
            "nama belakang" => $this->last_name,
            "nama lengkap" => $this->full_name,
            "tanggal lahir" => date('l, d F Y', strtotime($this->dob)),
            "umur" => implode(" ", [$this->umur, "tahun"]),
            "jenis kelamin" => $this->pria ? "Laki-laki" : "Perempuan",
        ];
    }
}

$iqbal = new Mahasiswa("Iqbal", "Farhan", "1996-01-19", "132010040002", "LP3I Balikpapan");
$prana = new Mahasiswa("Prana", "Adriyani", "1996-06-28", "142020040032", "LP3I Balikpapan");
$wahyu = new Mahasiswa("Wahyu", "Pratama", "1996-11-16", "132020040016", "LP3I Balikpapan");
$tri = new Mahasiswa("Tri", "Handani", "1993-09-20", "112020040016", "UGM Malang");

echo "<pre>";
echo json_encode([
    "iqbal" => $iqbal->cetak(),
    "prana" => $prana->cetak(),
    "wahyu" => $wahyu->cetak(),
    "tri" => $tri->cetak(),
], JSON_PRETTY_PRINT);
echo "</pre>";

// jalankan diweb atau dengan php cli "php construct.php" di terminal
// hilangkan comment <pre></pre> jika ingin ditampilkan di web
