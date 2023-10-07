<?php
    printf("<h3>Array</h3>");
    // Array in PHP
    $fruit = array("apple","pineapple","berry<br>");
    echo count($fruit)."<br>";

    $laptop = array("lenovo", "acer", "hp");
    printf("I choose laptop $laptop[0], $laptop[1], I dont Like $laptop[2]<br>");

    //Indexed Array
    $cars = array("Lambo", "Honda", "Toyota");
    $arrlength =   count($cars);

    for($x = 0; $x < $arrlength; $x+=2){
        echo $cars[$x]. "<br>";//output nya bakal ngambil dari si $x
    }
    //[] buat mendeclare array

    //Asocited Array
    $age = array("Mephew" => "16", "Ahsan" =>  "16");
    echo "Mephew is $age[Mephew] years old"
?> 