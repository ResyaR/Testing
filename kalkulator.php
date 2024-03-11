<title>Hasil Kalkulasi</title>
</head>
<body>
    <h1>Hasil Kalkulasi</h1>

<?php
$angka1 = floatval($_POST['angka1']);
$angka2 = floatval($_POST['angka2']);
$operasi = $_POST['operasi'];
$hasil = 0;

switch ($operasi) {
    case 'tambah':
        $hasil = $angka1 + $angka2;
        break;
    case 'kurang':
        $hasil = $angka1 - $angka2;
        break;
    case 'kali':
        $hasil = $angka1 * $angka2;
        break;
    case 'bagi':
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2;
        } else {
            $hasil = "Tidak bisa membagi dengan nol";
        }
        break;
    // Tambahkan kasus lainnya
    default:
        $hasil = "Operasi tidak valid";
        break;
}

echo "<p>Hasil: " . $hasil . "</p>";
?>