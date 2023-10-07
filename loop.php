<?php
//Loop in PHP
/*  While loop
    Do While loop
    For Loop
    Foreach loop
    Break/continue
*/
    //While loop
    $x = 0;
    while($x <= 100){
        echo("Nomor : $x<br>");
        $x+=10;
        printf("<br>");
    }
    //Do while loop
    $y = 0;
    do{
        printf("Nomor : $y<br>");
        $y++;
    }while($y <= 10);
    print("<br>");
    //For while loop
    $i;
    for($i=0; $i <=100; $i++) {
        echo"Nomor : $i<br>";
    }
    //Foreach loop
    $age = array("Asep" => "35", "budi" => "25", "ano" => "15");

    foreach($age as $z => $value){
        echo"$z = $value<br>";
    }
    //Break/Continue loop
    for($v = 0; $v < 10; $v++){
        if($v == 4){
            break;//continue melanjutkan 
        } 
        echo"nomer :$v<br>";
   }
?>