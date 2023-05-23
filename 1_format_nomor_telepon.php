<?php
function formatNomorTelepon($nomorTelepon) {
    $nomorTelepon = str_replace("-", "", $nomorTelepon); // Menghapus tanda "-" dari nomor telepon
    $nomorTelepon = ltrim($nomorTelepon, "0"); // Menghapus angka 0 di depan nomor telepon jika ada

    $nomorTelepon = "0" . $nomorTelepon; // Menambahkan angka 0 di depan nomor telepon

    $formattedNomorTelepon = substr($nomorTelepon, 0, 4) . "-" . substr($nomorTelepon, 4, 4) . "-" . substr($nomorTelepon, 8);
    return $formattedNomorTelepon;
}

// Mengambil input nomor telepon dari pengguna
$nomorTelepon = readline("Masukkan nomor telepon: ");

// Memanggil fungsi formatNomorTelepon untuk memformat nomor telepon
$formattedNomorTelepon = formatNomorTelepon($nomorTelepon);

// Menampilkan output
echo "Input : " . $nomorTelepon . "\n";
echo "Output: " . $formattedNomorTelepon . "\n";
?>