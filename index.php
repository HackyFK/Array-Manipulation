<?php
// Ambil nilai 'factor' dari parameter URL
$factor = isset($_GET['factor']) ? (int)$_GET['factor'] : 0;

// Periksa apakah 'factor' adalah angka valid
if ($factor <= 0) {
    echo "Please provide a valid 'factor' in the URL, e.g., ?factor=4";
    exit;
}

// Buat array angka dari 1 sampai 40
$array = range(1, 40);

// Ubah array untuk menandai angka kelipatan 'factor'
$result = array_map(function ($num) use ($factor) {
    return $num % $factor === 0 ? "$num (multiple of $factor)" : $num;
}, $array);

// Tampilkan hasil array
echo "<pre>";
print_r($result);
echo "</pre>";
?>
