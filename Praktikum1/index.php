<?php 
// ini sebuah komentar
/* ini sebuah komentar */
# komentar pakai tanda kres
// ini apa 

echo "Hellow world <br>";
print_r("Siti Nurhalizah <br>");
var_dump("Teknik Informatika");
echo "<hr>";

$nama = "Siti Nurhalizah"; //tipe data string
$umur = "20"; //tipe data integer
$berat_badan = "53.5"; //tipe data float
$mahasiswa = true; //tipe data bolean

echo "Nama saya : $nama <br>";
echo "Umur saya : $umur tahun <br>";
echo "Berat badan saya : $berat_badan kg <br>";
echo '<hr>';

// Membuat Array
$programs = ["php", "Javascript", "Html", "CSS"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}

?>