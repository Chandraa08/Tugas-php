<?php
echo "soal no 1: <br><br>";
$gaji_pokok = 5000000;
$tunjangan_transportasi = 500000;
$tunjangan_makan = 300000;
$pajak_persen = 10;

$total_gaji = $gaji_pokok + $tunjangan_transportasi + $tunjangan_makan;

$pajak = ($total_gaji * $pajak_persen) / 100;

$gaji_bersih = $total_gaji - $pajak;

echo "Gaji Bersih yang diterima karyawan: Rp" . number_format($gaji_bersih, 0, ',', '.');
echo " <br><br>";

echo "soal no 2: <br><br>";

$tabungan_awal = 10000000;
$harga_laptop = 7000000;
$harga_smartphone = 3500000;

$diskon_smartphone = 0.10;
$harga_smartphone_setelah_diskon = $harga_smartphone - ($harga_smartphone * $diskon_smartphone);

$total_pengeluaran = $harga_laptop + $harga_smartphone_setelah_diskon;

$sisa_tabungan = $tabungan_awal - $total_pengeluaran;

echo "Sisa tabungan Fajar setelah membeli adalah Rp" . number_format($sisa_tabungan, 0, ',', '.') . ".";
echo "<br><br>";

echo "soal no 3 <br><br>";

$harga_per_unit = 200000;
$jumlah_terjual = 150;

$total_pendapatan = $harga_per_unit * $jumlah_terjual;

$bagian_pemilik = ($total_pendapatan * 70) / 100;
$bagian_toko = ($total_pendapatan * 30) / 100;

echo "Pendapatan total: Rp" . number_format($total_pendapatan, 0, ',', '.') . "<br>";
echo "Bagian untuk pemilik produk: Rp" . number_format($bagian_pemilik, 0, ',', '.') . "<br>";
echo "Bagian untuk toko: Rp" . number_format($bagian_toko, 0, ',', '.') . "<br>";

?>
