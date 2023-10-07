<?php
    //Ahsan
    //X RPL 2
    
    //Rumus Persegi
    $bilangan1 = 5;
    //$bilangan2 = 10;
    $hasilkeliling = $bilangan1 * 4;
    $hasilluas = $bilangan1 * $bilangan1;
    echo("<h1>Rumus Persegi</h1>");


    echo("Rumus Luas = S x S<br>");
    echo("Rumus Keliling = 4 x S<br>");
    echo("Hasil keliling = $bilangan1 * 4 = $hasilkeliling <br>");
    echo("Luas = $bilangan1 * $bilangan1 = $hasilluas");

    //Persegi Panjang
    $p = 10;
    $l = 5;

    $luas = $p * $l;
    $keliling = 2* ($p+$l);

    echo("<h1>Rumus Persegi Panjang</h1>");


    echo("Rumus Luas Persegi Panjang = p x l<br>");
    echo("Rumus keliling Persegi Panjang = 2 x (p + l)<br>");
    echo("luas = $p * $l = $luas<br>");
    echo("keliling = 2 * ($p + $l) = $keliling");

    //Rumus Segitiga
    $atas = 5;
    $tinggi = 15;
    $a = 10;
    $b = 5;
    $c = 10;
    $luasegitiga = 1/2 * $atas * $tinggi;
    $kelilingsegitiga = $a + $b + $c;

    echo("<h1>Rumus Segitiga</h1>");
    
    echo("Rumus Luas = 1/2 x $atas x $tinggi<br>");
    echo("Rumus Keliling = $a + $b + $c<br>");
    echo("Luas = 1/2 x $atas x $tinggi = $luasegitiga<br>");
    echo("Keliling = $a + $b + $c = $kelilingsegitiga<br>");

    //Rumus Lingkaran
    $jari_jari = 7;
    $phi= 22/7;
    $luaslingkaran = $phi * $jari_jari * $jari_jari;
    $kelilinglingkaran = 2 * $phi * $jari_jari;

    echo "<h1>Rumus Lingkaran</h1>";

    echo "Rumus Luas = &#960 * r <sup>2</sup><br>";
    echo "Rumus Keliling = 2* &#960 * $jari_jari<br>";
    echo "Rumus Luas Lingkaran = &#960 x $jari_jari<sup>2</sup> = $luaslingkaran<br>";
    echo "Rumus Keliling Lingkaran = 2 x 22/7 x $jari_jari<sup>2</sup> = $kelilinglingkaran";

    //Rumus Trapesium
    $atra = 5;
    $btra = 9;
    $ctra = 10;
    $dtra = 9;

    $aSisi = 10;
    $bSisi = 5;
    $tSisi = 8;
    $kelilingtrapesium = $atra + $btra + $ctra + $dtra;
    $luastrapesium = 1/2 * ($aSisi + $bSisi)*$tSisi;

    echo"<h1>Rumus Trapesium</h1>";
    echo"Rumus Luas Trapesium = 1/2 * ($aSisi + $bSisi) * $tSisi<br>";
    echo"Rumus Keliling Trapesium = AB + BC + CD + DA<br>";
    echo"Luas = 1/2 * ($aSisi + $bSisi) * $tSisi = $luastrapesium<br>";
    echo"keliling = $atra + $btra + $ctra + $dtra = $kelilingtrapesium";

?>