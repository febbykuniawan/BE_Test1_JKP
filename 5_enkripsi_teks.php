<?php
function encryptText($input) {
    $input = str_replace(" ", "", $input); // Menghapus spasi dari input
    $length = strlen($input);
    $rows = floor(sqrt($length)); // Jumlah baris
    $columns = ceil($length / $rows); // Jumlah kolom
    $encryptedText = '';

    // Membuat matriks berdasarkan jumlah baris dan kolom
    $matrix = [];
    $index = 0;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            if ($index < $length) {
                $matrix[$i][$j] = $input[$index];
            } else {
                $matrix[$i][$j] = '';
            }
            $index++;
        }
    }

    // Membaca matriks secara kolom dan menghasilkan teks terenkripsi
    for ($j = 0; $j < $columns; $j++) {
        for ($i = 0; $i < $rows; $i++) {
            $encryptedText .= $matrix[$i][$j];
        }
        $encryptedText .= ' ';
    }

    return $encryptedText;
}

// Menampilkan output
$input = readline("Masukkan kalimat:");
$output = encryptText($input);
echo "Input : " . $input . "\n";
echo "Output: " . $output . "\n";
?>
