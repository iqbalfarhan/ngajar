<?php

function artiRambu($warna)
{
    switch ($warna) {
        case 'merah':
            $pesan = "Lampu merah berarti : Kendaraan harus berhenti";
            break;

        case 'kuning':
            $pesan = "Lampu kuning berarti : Kendaraan harus bersiap juntuk jalan";
            break;

        case 'hijau':
            $pesan = "Lampu hijau berarti : Kendaraan harus jalan";
            break;

        default:
            $pesan = "Lampu {$warna} tidak ditemukan";
            break;
    }

    return $pesan;
}

echo artiRambu("merah") . "\n";
echo artiRambu("kuning") . "\n";
echo artiRambu("hijau") . "\n";
echo artiRambu("biru") . "\n";
echo artiRambu("hitam") . "\n";
