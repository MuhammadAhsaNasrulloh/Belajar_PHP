<?php
//Muhammad Ahsan 
//XI RPL 2

    /*$nilai = 100;

    echo "<h1>Nilai Rapot</h1>";
    if ($nilai == 100)
    {
        echo("A<br>");
    } else if ($nilai > 70)
    {
        echo ("B<br>");
    } else
    {
        echo("Tidak Lulus<br>");
    }
    */

    /* Simbol operator
    == : sama dengan/memenuhi kondisi
    && : dan/menyatukan dua kondisi menjadi hal yang sama 
    || : atau/salah satu kondisi berbeda akan menampilkan hasil
    != : tidak sama/not/ kondisi yang berbeda atau negasi
    >= : lebih dari/sama dengan kondisi
    =< : kurang dari/sama dengan kondisi
    */
    /*
    $nilaismk = 82;

    if ($nilaismk > 80)
    {
        echo("Selamat anda Lulus SMKN 1 Subang<br>");
    } else 
    {
        echo("Maaf anda belum Lulus dari SMKN 1 Subang<br>");
    }*/
    

    //Login System
    /*
    $Username = "";
    $Password = "12345";

    if($Username == "dzikri" AND $Password == "12345")
    {
        echo("Selamat datang Kembali");
    } else if ($Username == "" OR $Password == "")
    {
        printf("Isi Username/Password dengan Lengkap");
    }else
    {
        printf("Password/Username Salah");
    }
    */
    $nilaiRaport = 67;

    if($nilaiRaport > 100)
    {
        printf("YANG BENER INPUTNYA");
    } else if($nilaiRaport >= 90)
    {
        printf("Bagus banget");
    } else if ($nilaiRaport >= 80)
    {
        printf("Bagus aja");
    } else if ($nilaiRaport >= 70)
    {
        printf("Bagus bagus");
    } else if($nilaiRaport >= 60)
    {
        printf("bagus");
    } else if($nilaiRaport >= 50)
    {
        printf("cukup");
    } else if($nilaiRaport >= 40)
    {
        printf("sangat jelek");
    } else if($nilaiRaport >= 30)
    {
        printf("jelek banget");
    } else if ($nilaiRaport >= 0)
    {
        echo("gatau");
    }
?>