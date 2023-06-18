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

// function fibonacci($num) {
//   $num1=0;
//   $num2=1;
//   $output=0;

//   for($i=0; $i<=$num; $i++) {
//     if($i<=1) {
//       $output=$i;
//     }
//     else{
//       $output=$num1+$num2;
//       $num1=$num2;
//       $num2=$output;
//     }
//     echo $output.",";
//   }
// }

// fibonacci(15);


// Exercițiul 1: Numărul de cifre
// Scrie un script PHP care primește un număr întreg de la utilizator și afișează numărul de cifre ale acestuia. Utilizează o buclă while pentru a parcurge numărul și împarte-l succesiv la 10 până când devine 0.


// function division($num) {
//  $string="";

//   while(intval($num)>0) {    
//     $string.=$num."-"; 
//     $num=intval($num)/10;
//   }
//   //echo $string."<br>";
//   $arr=explode("-", $string);
//   echo "Numarul de cifre continut in numarul introdus este: ";
//    print_r(count($arr)-1);
// }

// division("12345678");


// Exercițiul 2: Factorialul unui număr
// Scrie un script PHP care primește un număr întreg de la utilizator și calculează factorialul acestuia. Utilizează o buclă while pentru a multiplica succesiv numărul cu valorile de la 1 la numărul dat.

//5= (5-0)*(5-1)*(5-2)*(5-3)*(5-4)

// $num=5;
// $i=0;
// $fact=1;
// while($i<$num) {
//   $result = ($num-$i);
//   $fact*=$result;
//   $i++;
// }
// echo $fact;



// Exercițiul 3: Suma cifrelor unui număr
// Scrie un script PHP care primește un număr întreg de la utilizator și calculează suma cifrelor acestuia. Utilizează o buclă while pentru a extrage cifrele numărului și a le aduna.

// $num = "5698325";
// $length = strlen($num);


// $i=0;
// $sum=0;

// while($i<=strlen($num)-1) {
//   $sum+=$num[$i];
//   $i++;
//  }

//  echo $sum;

// Exercițiul 1: Generarea unei liste numerotate în HTML folosind o buclă și funcții PHP:




//utilizeaza functia array_walk pentru a afisa textul "cartea x este scrisa de autorul y" pentru fiecare din elementele cheie valoare ale unui array. foloseste o conditionare prin care sa se afiseze o anumita fraza toar daca in array este prezent un anumit autor. 
//valoare, cheie, paragraf este ordinea parametrilor. array_walk() este functia de citire. putem apela functia cu array_walk, oricare ar fi denumirea functiei si inauntru trecem argumentele in ordinea: denumirea arrayului, denumirea functiei si continutul paragrafului.
//citim cu echo cheia valoarea paragraful in orice ordine vrem noi


$arr = ["Un veac de singuratate", "Singur", "Calatoriile lui Gulliver", "Ochii Sfinxului", "Punct Contrapunct"];
 ?>

<ol>
<?php for($i=0;$i<=sizeof($arr)-1; $i++): ?>
 <li> <?php echo $arr[$i];?></li>
 <?php endfor; ?>
 </ol>

 <?php echo "<br>";  ?>

  <?php
 $arr2 = ["Un veac de singuratate" => "Eco", "Singur" => "Strindberg", "Calatoriile lui Gulliver" => "Swift", "Ochii Sfinxului" => "Daniken", "Punct Contrapunct" => "Huxley"];

function citireArray($val,$key,$p) {

 global $arr2;

 if(in_array("Eco", $arr2)) {
 echo $val . $p . "$key." . "<br>";
 }
 }

 array_walk($arr2, "citireArray", " este autorul cartii ");

 echo "<br>";

 //Generarea unui cod de acces aleatoriu

 //un cod aleatoriu poate fi generat cu rand(). ar trebui sa definim fiecare caracter in parte separat. deci codul va fi string. vom itera cu $string[$i] in functie de lungimea stringului. fiecare cifra ar avea o valoare random intre 0 si 9.
 //if !(empty) ar putea fi o conditie de afisare, astfel incat sa se afiseze daca stringul nu este gol
//generarea unui cod inseamna ca el nu exista, dar apare atunci cand se indeplineste o anumita conditie
//care ar fi criteriul care sa ii determine aparitia?
//am putea folosi if(empty) ca punct de pornire, adica daca stringul este gol, generam un cod
// cate caractere sa aiba codul? oricate, intre sa zicem 5 si 10, adica si aici sa avem un nr random intre 5 si 10;
//dar codul trebuie generat o singura data, deci iteratia ar fi pentru caracterele sirului si atat
//cu fiecare iteratie vom concatena un nou caracter numeric random
//daca folosim !empty ca si conditie de pornire, va fi valabil doar in prima iteratie, dar if nu este o bucla, ci o conditie. putem defini if si inauntru o bucla, si in interiorul buclei sa se fac operatiunea de afisare a tuturor caracterelor



//   $string="";

// if(empty($string)) {

// for ($i=0; $i<=10; $i++) {
// $string[$i]= rand(0,9);

// }
// }
// echo $string;
//am generat un cod aleatoriu de 10 cifre, dar nu stiu daca el este de acces


// $lungime = 6; // Lungimea codului de acces
// $caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Caracterele permise

// $cod_acces = '';

// // Generează codul de acces
// for ($i = 0; $i < $lungime; $i++) {
//     $pozitie = rand(0, strlen($caractere) - 1);
//     $cod_acces .= $caractere[$pozitie];
// }

// echo $cod_acces;

//definim variabila lungime ca sa o putem modifica usor
//trecem in variabila caractere si litere si cifre ca sa se foloseasca si litere si cifre in parola.
//$pozitie va reprezenta indexul cu care alegem un caracter aleator din $caractere
//in stringul gol "cod_acces" adaugam prin concatenare in fiecare iteratie cate un caracter random din variabila caractere care va fi in functie de cifra de index aleasa random
//deci ce putem noi defini ca valori in functia predefinita rand nu sunt doar cifre, ci si de ex o alta functie strlen()-1


// $lungime = 10;
// $caractere = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
// $cod="";

// for($i=0; $i<=$lungime; $i++) {
//  $pozitie = rand(0, strlen($caractere)-1);
//  //indexul aleator
//  $cod.=$caractere[$pozitie];
// }
//  echo $cod;
 //frumos si elegant



//Să presupunem că avem un array de numere și dorim să le dublăm folosind o funcție și să afișăm rezultatul:

 
// $numbers = array(1, 2, 3, 4, 5);

// // Funcția care dublează fiecare element din array utilizând memoria de referință
// function doubleNumbers(&$array) {
//     for ($i = 0; $i < count($array); $i++) {
//         $array[$i] *= 2;
//     }

// }

// // Apelăm funcția pentru a dubla numerele din array
//  doubleNumbers($numbers);


// // Afișăm rezultatul
// foreach ($numbers as $number) {
//     echo $number . " ";
// }



   ?>

