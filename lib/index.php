<?php echo "Hello, PHP!"; ?>


<?php // Variabel
$nama = "Mbak kunti";
$umur = 22;
echo "Halo, nama saya $nama dan saya berumur $umur tahun.";
?>


<?php //  Operator
$a = 10;
$b = 5;
echo $a + $b; // Penjumlahan echo $a - $b; // Pengurangan echo $a * $b; // Perkalian echo $a / $b; // Pembagian echo $a % $b; // Modulus 
?>


<?php //  IF-ELSE
$nilai = 80; 
if ($nilai >= 75) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>


<?php  /// SWITCH
$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari tidak diketahui";
}
?>

<?php  // FOR
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}
?>

<?php // WHILE
$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}
?>

<?php // FOREACH (Untuk Array)
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}
?>

?php 
$hewan = ["Kucing", "Anjing", "Burung"]; 
echo $hewan[0]; // Output: Kucing 
?>


