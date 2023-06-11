<?php

// $lista = array('rosu','galben','albastru');

// foreach ($lista as $item) {
//   echo "Culorile sunt: {$item}"."<br>";
// }

 //$x = 1;

// while($x<=5) {
//   
//   $x++;
// }

// do {
// echo "Numerele sunt $x"."<br>";
// $x++;
// } 
// while($x<=10);

//afisare nr pare cu for pana la 20

// for ($i=1; $i<=20; $i++) {
//   if($i % 2 ===0) {
//     echo "Numerele pare sunt: $i"."<br>";
//   }
// }

// Verificarea daca un numar este prim utilizand bucla while

            // function isPrime($n) {
            //     if ($n<=1) {
            //         return false;
            //     }

            //     $i = 2;

            //     while ($i <= sqrt($n)) {
            //         if ($n % $i == 0) {
            //          return false;
            //         }
            //         return true;
            //         $i++;
            //     }
            // }

            // $num = 7;

            // if(isPrime($num)==true) {
            //     echo $num . " este un numar prim";
            // } else {
            //     echo $num . " nu este un numar prim";
            // }


            // $nrMax = [45, 12, 89, 23, 5, 105];

            // $max = $nrMax[0];

            // foreach ($nrMax as $nr) {
            //     if($nr>$max) {
            //         $max = $nr;
            //     }
            // }

            // echo "In acest sir numarul maxim este " . $max;

       

      //piramida

    //   $rows = 5;
    //   $spaces = $rows;

    //   for ($i = 1; $i <= $rows; $i++) {
    //     for($j = 1; $j <= $spaces; $j++) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     $spaces--;

    //     for ($k = 1; $k<=2*$i-1; $k++) {
    //         echo "*";
    //     }
    //         echo "<br>";
    //   }

      //greseala: am scris $k = $i*2-1 in loc de "<=" si astfel am creat o bucla infinita cu afisarea de * incontinuu

                    $students = [
  
              [
                  "name" =>"Maria",
                  "grades" =>[8,7,9,6]
              ],
              [
                  "name"=>"Ciprian",
                  "grades"=>[9,9,8,10]
              ],
              [
                  "name"=>"Alex",
                  "grades"=>[7,6,8,7]
              ]
              ];

              // calculam media fiecarui student si afisam media
                  foreach ( $students as $student){
                   
                      $name = $student["name"];
                      //echo $name;
                      $grades = $student["grades"];
                      //print_r($grades);
                      $sum = 0;
                      foreach ($grades as $grade){
                          $sum += $grade;
                      }


                  echo "Studentul $name are urmatoarele note : ";

                  foreach ($grades as $index=>$grade) {
                      echo $grade;
                      if ($index != count($grades) - 1) {
                          echo ", ";
                      }
                      }

                      
                     $average = $sum / count($grades);


                      echo "</br>";
                      echo "Media $average";
                      echo "<br><br>"; 
                                                  
                  }

                 
?>