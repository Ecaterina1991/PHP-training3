<?php
//Exercițiul 1: Numere prime
//Scrie un program în PHP care afișează toate numerele prime mai mici decât 100.

// echo "Numere prime mai mici decât 100: ";

// for ($i=2; $i<=100; $i++) {
//   $estePrim = true;
//   for ($j=2; $j<=sqrt($i); $j++) {
//     if($i%$j==0) {
//       $estePrim=false;
//     }
//   }
//   if($estePrim) {
//     echo $i." ";
//   }
// }







// Exercițiul 3: Triunghi de asteriscuri
// Scrie un program în PHP care afișează un triunghi de asteriscuri, având un număr specificat de linii
//

// $rows = 7;
// $spaces = $rows;

// for($i=1; $i<=$rows; $i++) {
//   for($s=$rows; $s>=1; $s--) {
//     echo "&nbsp;&nbsp;";
//   }
//   for($k=1; $k<= $i*2-1; $k++) {
//     echo "*";
//   }
//   echo "<br>";
// }


//ar fi de afisat un triunghi care sa respecte un nr de iteratii egal cu rows. asta ar fi limita. pornind de la 1. i=1, i<=rows, i++
//inauntru alte 2 loopuri - unul pt spatii goale, altul pentru asteriscuri
//spatii - a se afisa in ordine descrescatoare
//asterisc crescator de la 1 
//aproape bine
//conditie respectata, desi alta era intentia




//Scrie un program în PHP care afișează toate numerele prime mai mici decât 100.

//nr prim este nr care se divide doar la sine insusi si la 1. a verifica conditia ca un nr nu este prim inseamna a testa daca niciun nr care este mai mic sau egal cu radacina patrata din limita nu are divizori, deci impartit la fiecare dintre numerle sirului, niciun rezultat nu este == 0. si asta vom verifica daca un numar nu este prim. si inainte de asta vom crea o variabila isPrime careia ii vom atribui valoarea true, pentru ca dupa bucla si conditionare sa putem crea sirul cu numere prime facans sortarea dupa true/false ca si valoarea a lui isPrime

// for($i=2; $i<=100; $i++) {
//   $isPrime = true;

//   for($j=2; $j<=sqrt($i); $j++) {
//     //verific conditia nu este prim
//     if($i%$j==0) {
//       //inseamna ca are alti divizori
//       $isPrime= false;
//     }
//   }

//   if($isPrime) {
//     echo $i." ";
//   }
// }

// Exercițiul 2: Factorial
// Scrie un program în PHP care calculează factorialul unui număr dat de la tastatură.


// $produs = 1;

// for ($i=10; $i>=1; $i--){
//  $produs = $produs * $i;
// }

// echo $produs;



// Exercițiul 1: Suma cifrelor
// Scrie un program în PHP care calculează suma cifrelor unui număr dat de la tastatură.


// $nr = "856942";
// $sum=0;

// for($i=0; $i<=strlen($nr)-1; $i++) {
// $sum+=$nr[$i];
// }

// echo $sum;

// Tabel de înmulțire
// Scrie un program în PHP care afișează tabelul de înmulțire de la 1 la 10.

// for ($i=1; $i<=10; $i++) {
// echo "1"."*". $i ."="."$i". "<br>";
// }

// echo "<table>";
// for ($i = 1; $i <= 10; $i++) {
//     echo "<tr>";
//     for ($j = 1; $j <= 10; $j++) {
//         echo "<td>" . ($i * $j) . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

//bucla externa determina repetarea de 10 ori a randului tr in interiorul tabelului
//in fiecare rand se afiseaza 10 celule datorita buclei interne j si in fiecare celula td se afiseaza rezultatul i*j



//Numerele Fibonacci sunt numere naturale care fac parte din următorul șir, în care fiecare număr este egal cu suma celor două de dinainte: 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, …


// Exercițiul 3: Fibonacci
// Scrie un program în PHP care afișează primele n numere din seria Fibonacci, unde n este un număr dat de la tastatură.

function fibonacci($num) {
  $num1=0;
  $num2=1;
  $output=0;

  for($i=0; $i<=$num; $i++) {
    if($i<=1) {
      $output=$i;
    }
    else{
      $output=$num1+$num2;
      $num1=$num2;
      $num2=$output;
    }
    echo $output.",";
  }


}

fibonacci(15);



?>