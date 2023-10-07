<?php declare(strict_types=1);

    echo"<h4>function</h4>";
    function familyName($fname, $year){
        echo "$fname Nasrulloh. Born In $year <br>";
    } 

    familyName("Aleandra", "2026");
    familyName("Syafira", "2027");
    familyName("Namira", "2030");
    familyName("Rumi", "2031");


    echo"<h4>Strict Declration</h4>";
    //strict declaration
    function addNumber(int $a, int $b){
        return $a + $b;
    } echo addNumber (8, 8);


    echo"<h4>Strict Declaration v2</h4>";
    function setHeight(int $minheight = 50){
        echo"The Height  is : $minheight<br>";
    }

    //mengambil default value menjadi argument kecuali baris k 2
    setHeight(350);
    setHeight();//default dari minheight($mingheight =50)
    setHeight(135);
    setHeight(80);

    //function return values
    echo"<h4>Return Values</h4>";
    function sum(int $x, int $y){
        $z = $x + $y;
        return $z;
    } // untuk bilangan cacah bukan desimal karena ada tipe data integer
    echo"5 + 10 : ". sum(5, 10)."<br>";
    echo"9 + 45 : ". sum(9, 45)."<br>";
    echo"6 + 14 : ". sum(6, 14)."<br>";

    printf("<h4>Return Values</h4>");
    //sesama float return nya harus float juga
    function addNum(float $f, float $g) : float{
        return $f + $g;
    } 
    echo addNum(1.2, 3.5)."<br>";

    //kalau ada dua tipe data return nya harus salah satu misal:
    function addNumb(float $c, float $d) : int{
        return (int) ($c + $d);
    }
    echo addNumb(1.5, 6.4);

?>