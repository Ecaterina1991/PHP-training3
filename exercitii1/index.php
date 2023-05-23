<?php

//expresia matematica: //nrbinar(de la dreapta la stanga) * 2**exponent(de la 0 la max)

//din binar in decimal

// $binar = "110011110";
// $nrDec = 0;
// $exp = 0;

// for($i=strlen($binar)-1; $i>=0; $i--) {
//   $nrDec += intval($binar[$i]) * (2 ** $exp);
//   $exp++;
// }

// echo $nrDec;


//din decimal in octal

// $dec = "4563";
// $nrOct = 0;
// $exp = 0;

// for($i=strlen($dec)-1; $i>=0; $i--) {
//   $nrOct += intval($dec[$i]) * 8 ** $exp;
//   $exp++;
// }

// echo $nrOct;





//16 => 10

// $hex = "45B";
// $dec = 0;
// $exp = 0;
// $arr_hex = ["0"=> 0, "1" => 1, "2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7, "8" => 8, "9" => 9, "A" => 10, "B" => 11, "C" => 12, "D" => 13, "E" => 14, "F" => 15];

// for ($i=strlen($hex)-1; $i>=0; $i--) {
//   $dec += $arr_hex[$hex[$i]] * (16 ** $exp);
//   $exp++;
// }

// echo $dec;




//Sa se sorteze crescator un sir de numere</h2>

    $arr = array(12,4,11,5,10,2,13,8,6,15,0,3,7,1,9,14);
    //print_r($arr);
    // for($i=0;$i<=count($arr)-1;$i++){
    //     $aux = $arr[$i];//i=2
    //     $j = $i-1; //sa presupunem ca $j=-1, si in urmatoarea iteratie ar fi 0 //j=1
    //     while($j>=0 && $arr[$j]>$aux ){
    //         $arr[$j+1] = $arr[$j];
    //         $j = $j-1;
    //     }
    //     $arr[$j+1] = $aux; //setare valoare
    // }
    // print_r($arr);

// sort($arr);
// $arr_clone = $arr;
// $arr_clone[0] = 400;
// print_r($arr);

//print_r($arr_clone);



//Numar par sau impar. Maxim</h2>


// $nr = 5;
// echo ($nr % 2 == 0)?  "par": "impar";
// $a = 6;
// echo "<br />";
// $b = 8;
// echo ($a >$b)?  "maxim $a": "maxim $b";

?>