<?php



// $rows = 10;
// $columns = 10;

// echo "<table>";
// for ($i = 1; $i <= $rows; $i++) {
//     echo "<tr>";
//     for ($j = 1; $j <= $columns; $j++) {
//         $result = $i * $j;
//         echo "<td>" . $result . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";


// echo "<h1>Metoda For</h1>";

// $masini = ['unu'=>'Volvo', 'doi'=>'BMW', 'trei'=>'Logan', 'patru'=>'Hunday'];

// foreach($masini as $masina) {
//   echo $masina."<br>";
// }
// echo "<br>";

// foreach($masini as $k=>$v) {
//   echo $v."<br>";
// }

// echo "<br>";

// echo "<h1>Metoda While</h1>";

// $i=1;

// while($i<=10) {
//   echo $i."<br>";
//   $i++;
// }

// echo "<br>";

// echo "<h1>Metoda Do While</h1>";

// $i=1;

// do {
// echo $i."<br>";
// $i++;


// } while($i<=10);

// echo "<br>";

// echo "<h1>Metoda Functii</h1>";

// //cum fac o functie care sa adune doua numere

// function adunare($a,$b) {
//  $y=$a+$b;

//  echo "$y este rezultatul inmultirii $a si $b";
// }

// adunare(a:4,b:5);

// $rand=10;
// $col=10;

// echo "<table>";
// for($i=1; $i<=10; $i++) {
//   echo "<tr>";
//   for($j=1; $j<=10; $j++) {
//    $res=$i*$j;
//    echo "<td>".$res."</td>";
//   }
//   echo "</tr>";
// }
// echo "</table>";

// $numbers = array(2, 4, 6, 8, 10);
// $searchElement = 6;
// $found = false;

// foreach ($numbers as $number) {
//     if ($number == $searchElement) {
//         $found = true;
//         break;
//     }
// }

// if ($found) {
//     echo "Elementul $searchElement există în array.";
// } else {
//     echo "Elementul $searchElement nu există în array.";
// }




// $arr=[4,9,5,8,6,2];
// $elem_cautat=58;
// $gasit=false;

// foreach($arr as $item) {
//   if($item==$elem_cautat){
//     $gasit=true;
//     break;
//   }
// }

// if($gasit) {
//   echo "Elementul cautat $elem_cautat este in array.";
// } else {
//   echo "Elementul cautat $elem_cautat nu este in array.";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <form action="" method="get">
  <input type="text" name="nr">
  <input type="submit" name="calc" value="Calculeaza">
</form> 

<?php
//am un formular cu un input pt nr si un submit calculeaza. numele inputului nr este nr si va fi folosit ulterior in codul php

//daca inputul nr este setata si nu este null

//$nr_din_input este variabila in care depozitam numarul pe care utilizatorul il introduce in formular

//atribuim respectiva valoare unei alte variabile numita $nr, ca sa putem fac modificari asupra acestui nr in codul php, in iteratii, dar sa pastram si valoarea initiala a nr din form pt afisarea finala

//pentru orice numar pozitiv, adunam fiecare cifra cu urmatoarea cifra
//resetam valoarea lui $nr la acelasi nr fara ultima cifra, impartindu-l la 10, pentru urmatoarea iteratie

// $suma=0;

// if(isset($_GET['nr'])) {
//   $nr_form=$_GET['nr'];
//   $nr=$nr_form;

//   while($nr>0) {
//     $suma = $suma + $nr%10;
//     $nr=$nr/10;
//   }
//   echo "Suma cifrelor numarului $nr_form este $suma.";
// }


//calculul primelor x nr naturale in functie de numarul introdus in form

// $suma=0;

// if(isset($_GET["nr"])){
//   $nr=$_GET["nr"];

//   for($i=0; $i<=$nr; $i++) {
//     $suma=$suma+$i;
//   }
// echo "Suma primelor n numere naturale ale numarului $nr reprezinta $suma.";

// }

//calcul nr cifre din numarul introdus in form

// $nr_cifre=0;

// if(isset($_GET['nr'])) {
//   $nr_input = $_GET['nr'];
//   $nr=$nr_input;

//   while($nr>0) {
//     $nr = (int)($nr/10);
//     $nr_cifre++;
//   }
//   echo "Numarul de cifre a numarului din input $nr_input este $nr_cifre.";
// }

//initial nu s-a aplicat corect si imi afisa cu o cifra in plus pentru ca nu am pus intre paranteze impartirea in fata functiei int
//aici variabila nr cifre se incrementeaza cu fiecare impartire care reprezinta o alternativa la numararea cifrelor si rezultatul incapsuleaza nr cifrelor

//afisarea divizorilor unui numar si calculul sumei acestora

// $divizori='';
// $suma=0;

// if(isset($_GET['nr'])) {
//   $nr=$_GET['nr'];
//   for($i=2;$i<=$nr/2;$i++) {
//     if($nr%$i==0) {
//       $divizori.= $i.",";
//       $suma+=$i;
//     }
//   }
//   echo "Divizorii numarului $nr sunt $divizori si suma lor este $suma.";
// }


$a=array();
$b=[];
if(isset($_GET['nr'])){
  $nr=$_GET['nr'];
  for($i=0; $i<$nr; $i++) {
    $random_nr = rand(0,100);
    $a[$i]=$random_nr;
    $b[$i]=$a[$i];
  }
  echo "Vectorul a cu $nr elemente generate aleator: ";
  print_r($a);

  echo "<br>";
  print_r($b);
}


?>



</body>
</html>