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

            // facem o functie ( despre functii o sa vorbim data viitoare )

                function isPrime($n){

                       if($n <=1){
                           return false;
                       }

                       $i = 2;

                       while($i <= sqrt($n)){
                           if($n % $i == 0){
                               return false;
                           }
                           $i++;
                       }
                       return  true;
               }


               $num = 302;

                       if(isPrime($num)){
                           echo $num . " este un numar prim";
                       } else {
                           echo $num . " nu este un numar prim";
                       }

?>