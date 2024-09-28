<?php
// diubah sesuai input
$nilai_teori = 100;
$nilai_praktik = 80;

$syarat_teori = 70;
$syarat_praktik = 75;

if ($nilai_teori >= $syarat_teori && $nilai_praktik >= $syarat_praktik) {
    echo "Selamat, Anda lulus!";
} else {
    echo "Maaf, Anda tidak lulus.";
}

echo "<br><br>";
echo "<soal no 5 <br><br>";


$usia = (int)readline("Masukkan usia pemohon: ");
$penghasilan = (int)readline("Masukkan penghasilan bulanan pemohon (dalam Rp): ");
$riwayatKredit = strtolower(readline("Masukkan riwayat kredit pemohon (macet/tidak macet): "));

if ($usia >= 21 && $usia <= 60 && $penghasilan >= 5000000 && $riwayatKredit !== "macet") {
    echo "Pemohon Kredit Layak." . PHP_EOL;
} else {
    echo "Pemohon Kredit Tidak Layak." . PHP_EOL;
}
    
?>
