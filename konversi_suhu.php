<?php
    $celcius = 30;
    $fahrenheit;
    $Kelvin;
    $reamur;
    $rankine;

    $fahrenheit = ($celcius * 9 / 5) + 32;
    $Kelvin = $celcius + 273.15;
    $reamur = 4 / 5 * $celcius;
    $rankine = 9 / 5 * $celcius + 491.67;

    echo "<h2>Konversi Suhu</h2>";

    echo "30 Celcius = $fahrenheit&deg; Fahrenheit<br> ";
    echo "30 Celcius = $Kelvin&deg; Kelvin<br> ";
    echo "30 Celcius = $reamur&deg; Reamur<br> ";
    echo "30 Celcius = $rankine&deg; Rankine";
    
?>

