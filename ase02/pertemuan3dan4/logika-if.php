<?php

function artiRambu($warna)
{
    if ($warna == "merah") {
        return "Lampu merah berarti : Kendaraan harus berhenti";
    } elseif ($warna == "kuning") {
        return "Lampu kuning berarti : Kendaraan harus bersiap juntuk jalan";
    } elseif ($warna == "hijau") {
        return "Lampu hijau berarti : Kendaraan harus jalan";
    } else {
        return "Lampu {$warna} tidak ditemukan";
    }
}

echo artiRambu("merah") . "\n";
echo artiRambu("kuning") . "\n";
echo artiRambu("hijau") . "\n";
echo artiRambu("biru") . "\n";
echo artiRambu("hitam") . "\n";
