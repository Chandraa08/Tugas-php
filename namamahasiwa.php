<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
       <?php
       echo "soal no 1: <br><br>";

       $saldo_awal = 2000000;  
       $bunga_per_bulan = 0.03;  
       $jumlah_bulan = 11;  
       
       $saldo_akhir = $saldo_awal + ($saldo_awal * $bunga_per_bulan * $jumlah_bulan);
       
       echo "Saldo akhir nasabah setelah 11 bulan adalah: Rp. " . $saldo_akhir;
       echo "<br><br>";

       echo "soal no 2 : <br><br>";

       $pi = 3.14;
       $r = 5;
       $s = 10;

       $la = $pi * ( $r * $r );
       $lp = $la + $pi *$r * $s;

       echo "Luas Alas = ", $la , "<br><br>";
       echo "Luas Permukaan = ", $lp , "<br><br>";

       ?>

</body>
</html>