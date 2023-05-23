<?php

function findMinFlips($page) {
    $totalPages = 231;

    // Jumlah halaman yang harus dibalik dari depan
    $flipsFromFront = ceil(($page - 1) / 2);

    // Jumlah halaman yang harus dibalik dari belakang
    $flipsFromBack = ceil(($totalPages - $page) / 2);

    if ($flipsFromFront < $flipsFromBack) {
        return "From first page flip {$flipsFromFront}x";
    } else {
        return "From last page flip {$flipsFromBack}x";
    }
}

// Menampilkan output
$input = readline("Masukkan nomor halaman:");
$output = findMinFlips($input);
echo $output;
?>