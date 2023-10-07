<?php

//Output / echo
echo ("<h1>Biodata Bapa Dz</h1>");
echo ("<p>Nama       : Taufiq Dzikri Pangestu</p>");
echo ("<p>Sekolah    : SMKN 1 SUBANG</p>");
echo ("<p>MAPEL      : Produktif</p>");
echo ("<p>TTL        : Subang, 26 Maret, 1997</p>");
echo ("<p>Alamat     : Wanayasa</p>");
echo ("<p>Pendidikan : UPI </p>");

//output dan string
echo ("<h1>Biodata Bapak Dz");
$nama = "Taufik Dzikri Pangestu";
$sekolah = "SMKN 1 Subang";
echo ("<h1>Nama :" . $nama . "</h1>");
$umur = 18.55;
echo ("<p>Sekolah :" . $sekolah . "</p>");
echo ("<p> Umur :" . $umur . "<p>");

//Aritmatika dan logika string
echo ("<h1>Aritmatika</h1>");
$bilangan1 = 10;
$bilangan2 = 25;
$hasilpenjumlahan;
$hasilpengurangan;
$hasilperkalian;
$hasilpembagian;

$hasilpenjumlahan = $bilangan1 + $bilangan2;
$hasilpengurangan = $bilangan1 - $bilangan2;
$hasilperkalian = $bilangan1 * $bilangan2;
$hasilpembagian = $bilangan1 / $bilangan2;

echo ("hasil penjumlahan $bilangan1 + $bilangan2 = $hasilpenjumlahan <br>");
echo ("hasil pengurangan $bilangan1 - $bilangan2 = $hasilpengurangan<br>");
echo ("hasil perkalian $bilangan1 * $bilangan2 = $hasilperkalian<br>");
echo ("hasilpembagian $bilangan1 / $bilangan2 = $hasilpembagian");

?>
