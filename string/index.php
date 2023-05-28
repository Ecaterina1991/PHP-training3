<?php





// $string = "        Salut       ";
// // $string[2] = "r";
// // echo $string;

// //$faraSp = trim($string);

// echo $string . "<br>" ;
// //. $faraSp;

// $lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus reiciendis rerum perspiciatis nam obcaecati, inventore nulla at! Non culpa alias quidem adipisci sed, quos tempore eveniet deserunt vitae suscipit veniam possimus minus mollitia maiores consequatur. Ratione ad voluptate sunt non illum temporibus, commodi pariatur praesentium deserunt autem dignissimos nemo illo";

// $nr_cuv = str_word_count($lorem);
// echo $nr_cuv;


// Sa se sorteze crescator un sir de numere</h2>

    // $arr = array(12,4,11,5,10,2,13,8,6,15,0,3,7,1,9,14);

    // print_r($arr);
    // for($i=0;$i<=15;$i++){
    //     $aux = $arr[$i];
    //     $j = $i-1;
    //     while($j>=0 && $arr[$j]>$aux ){
    //         $arr[$j+1] = $arr[$j];
    //         $j = $j-1;
    //     }
    //     $arr[$j+1] = $aux;
    // }
    // print_r($arr);


    // Exemplu: Calcularea sumei numerelor de la 1 la 100 cu bucla while
  //  $i = 1;
  //  $sum = 0;


  //   while($i<=100) {
  //     $sum+=$i;
  //     $i++;
  //   }

    //echo $sum;

    //Exemplu: Afișarea numerelor pare de la 2 la 20:

    // $i=2;

    // while($i<=20) {
    //  echo $i."<br>";
    //  $i+=2;
    // }

    // Trebuie scris un program pentru vanzarea prin licitatie, care va incepe sa se execute dupa obtinerea valorii initiale pret, atribuind valoarea variabilei inainte de intrarea in bucla. programul scrie valorile marindu-le cu unu si publica anuntul cu privire la acceptarea articolului pentru vanzare. cand pretul atinge o valoare peste 1000, statusul articolului este informatia despre posibilitatea vanzarii. de ex, rezultatul de iesire (daca valoarea initiala este setata la 999) poate arata astfel:
      //Current price: 999. Still not for sale
      //Current price: 1000. Still not for sale
      //Current price: 1001. You can start with sale!

      // $val = 999;

      // while ($val<=1020) {
      //   echo "Current price:" . $val." Still not for sale."."<br>";
      //   $val++;
      // }

      // echo "Current price:" . ($val) . "You can start the sale.";

      //Trebuie sa se faca un tabel ca in imaginea de mai jos. Programul trebuie sa calculeze pasii preturilor , comparativ cu Cantitate * Pret in functie de pasii de modificare a cantitatilor. Valoarea initiala este 10 si merge pana la 100, cu pasul de marire cu 10. 

      // $price = 5;
      // $counter = 10;
     
      // echo "<table border='1' align='center'>";
      // echo "<tr><th>Quantity</th>";
      // echo "<th>Price</th></tr>";
      //  while($counter<=100) {
      //   echo "<tr><td>";
      //   echo $counter;
      //   echo "</td><td>";
      //   echo $price * $counter;
      //   echo "</td>";
      //    $counter=$counter + 10;
      //  }
      //  echo "</table>";
      
//  Exercițiul 1: Afisarea numerelor până la 10.
// Scrie un program PHP care utilizează un for loop pentru a afișa toate numerele de la 1 la 10 în ordine crescătoare.

// for($i=1; $i<=10; $i++) {
//   echo $i."<br>";
// }

// Exercițiul 2: Numere pare.
// Scrie un program PHP care utilizează un for loop pentru a afișa toate numerele pare de la 1 la 20. definiti in cadrul aceluiasi loop o alta variabila $x pe care sa o afisati sub forma decrementarii, fara a defini careva variabile globale

// for( $i=2, $x=20; $i<=20; $i+=2, $x-=2) {
//   echo $i."<br>"."<br>";
//   echo $x."<br>";
// }
//pentru a afisa in cadrul buclei for doua variabile diferite una incrementare alta decrementare, se separa prin virgula. conditia de oprire ramane una singura

// Exercițiul 3: Suma numerelor.
// Scrie un program PHP care utilizează un for loop pentru a calcula și afișa suma numerelor de la 1 la 100.

// $sum = 0;

// for($i=1; $i<=100; $i++) {
//   $sum+=$i;
// }

// echo $sum;


// $numbers = [1, 2, 3, 4, 5];
// // Output așteptat: 1 2 3 4 5

// foreach($numbers as $number) {
// echo $number . " ";
// }

// $person = [
//   "name" => "John Doe",
//   "age" => 25,
//   "occupation" => "Developer"
// ];
// // Output așteptat: name: John Doe, age: 25, occupation: Developer

// foreach($person as $k => $v) {
//   echo "$k: $v, "; 
// }

// Scrie un program care calculează suma tuturor numerelor dintr-un array de numere întregi și afișează rezultatul.

// $sum=0;

// $numbers = [1, 2, 3, 4, 5];
// // Output așteptat: Suma numerelor este: 15

// foreach ($numbers as $num) {
//   $sum += $num;
// }

// echo "Suma numerelor este: $sum";

//EX DIFICULTATE MEDIE

// Exercițiul 1: Aproximare la numărul întreg mai apropiat
// Scrie un program PHP care să solicite utilizatorului să introducă un număr zecimal și să returneze cel mai apropiat număr întreg folosind funcțiile ceil() și floor(). Programul ar trebui să continue să solicite introducerea unui număr până când utilizatorul introduce valoarea "0" pentru a ieși din buclă.

// $nr = 56.38;

// while($nr>0) {
//   if(is_float($nr)) {
//     $nr = ceil($nr);
//     echo "Ati introdus numarul $nr. Va rog sa introduceti alt numar"."<br>";
//     $nr--;
//   } 
// }

// echo "Ati introdus valoarea zero";

//rezolvare gresita


// Exercițiul 2: Generarea unui șir de numere aleatoare
// Scrie un program PHP care să genereze și să afișeze un șir de 10 numere aleatoare între -50 și 50 folosind funcția rand(). Programul ar trebui să continue să genereze și să afișeze șiruri de numere până când găsește un șir în care suma numerelor este un multiplu de 10.


// while (true) {
// $nr = range(-50, 50);
// //var_dump($nr);

// $randomArr = shuffle($nr);
//  //var_dump($nr);

//  $arr_nou = array_slice($nr, 0, 10);
//  //print_r($arr_nou);

//  $string_arr = implode(",", $arr_nou);
//  echo "Sirul aleatoriu este: $string_arr";

// $sum=0;
// //generare sir random
// foreach($arr_nou as $item) {
//   echo $item . " ";
//   $sum += $item;
// }  

// echo $sum;

// if($sum % 10 == 0) {
//    die("Suma numerelor din acest sir este multiplu de zece!");
//   }
// }


// Exercițiul 3: Aproximare descendentă la numărul întreg
// Scrie un program PHP care să solicite utilizatorului să introducă un număr zecimal pozitiv și să returneze cel mai mare număr întreg mai mic sau egal cu valoarea introdusă folosind funcția floor(). Programul ar trebui să continue să solicite introducerea unui număr până când utilizatorul introduce o valoare negativă pentru a ieși din buclă.???????

// Exercițiul 1:
// Scrie un program în PHP care va afișa suma tuturor numerelor pare de la 1 la 100 folosind o buclă do while. La final, afișează suma totală.

// $sum=0;
// $i=0;
// do {
//   //echo $i;
// $sum+=$i;
// $i+=2;
// } 
// while($i<=100);

// echo $sum;

// Exercițiul 2:
// Scrie un program în PHP care va afișa tabla înmulțirii pentru un număr dat de la 1 la 10 folosind o buclă do while.


// $i=1;

// do{
// echo "1 * $i = $i"."<br>";
// $i++;
// }
// while($i<=10);

// Exercițiul 3:
// Scrie un program în PHP care va citi numere de la tastatură până când utilizatorul introduce valoarea zero. Afișează la final suma numerelor citite. Folosește o buclă do while pentru a realiza acest lucru.


// Ce este PHP și care este utilizarea sa în dezvoltarea web?

//PHP este acronimul lui Hypertext Preprocessor si este un limbaj de programare de server utilizat in dezvoltarea web, care functioneaza in relatie cu bazele de date. A fost inventat in 1994.

// Care este diferența dintre echo și print în PHP?

//print este o functie in timp ce echo este o instructiune de afisare. echo este mai rapid decat print. print returneaza 1. print(echo($x)) va da eroare echo(print($)) va returna 1. ambele se pot folosi pentru a afisa valorile constantelor sau a variabilelor, dar print returneaza 1. in calcule, iarasi doua valori citite cu print + echo pot da erori intrucat echo este o instructiune, nu o functie, ea are functia de afisare, nu de calcul si respectiv sintaxa utilizarii de cho direct in calcule este una gresita. 

// Cum se definește o constantă în PHP?

define("DARIA", "Copilul meu");
//echo DARIA;

//aceasta este o constanta pe care am creat-o eu, nu este predefinita. nu este necesar sa folosesc $ in fata la citire intrucat este constanta, nu variabila si va returna stringul: Copilul meu, ca output. daca as fi scris daria cu litere mici nu ar fi fost nicio problema, dar este preferabil sa folosim majuscule in crearea de constantelor pentru ca sa le putem deosebi mai usor de variabile in cadrul programelor

// Care este diferența dintre variabilele locale și cele globale în PHP?

//variabilele globale de obicei sunt definite in afara functiilor si a buclelor. ele pot fi setate ca fiind globale atunci cand se afla in interiorul buclelor si a functiilor folosind termenul global in fata variabilei. diferenta consta in accesibilitate. o variabila locala poate fi accesata doar in interiorul functiei in care se afla (desi functia altminteri poate fi apelata oriunde in program, ca si localizare). o variabila globala poate fi accesata de oriunde in cadrul programului.

$sum = 0; //variabila globala

function exempluFunctie($x, $y, $z){
  $sum = $x + $z;
  return $sum;

  //$z variabila locala

  //global $y; //definirea unei variabile locale ca fiind globala
}

$result = exempluFunctie(3, 4, 5);
//echo $result;

// Ce este un array în PHP și cum se accesează elementele sale?

//Un array in php este un tip de date in care putem depozita si folosi un sir de valori sub forma indexata sau asociativa (cheie valoare) sau multidimensionala.
//exemplu

$arr = [45, 98, 5, 32, 45]; //array indexat

//indexul cu care incepe un array este 0
//elementele sale pot fi accesate astfel

//echo($arr[2]);

//respectiv

$zile = ["azi" => "prezent", "maine" => "viitor"];
//echo($zile["maine"]);



// Care este diferența între GET și POST în PHP și când ar trebui să folosim fiecare metoda?


//get si post sunt doua metode diferite utilizate in php pentru a accesa si trimite datele. cu get se trimit datele prin corpul URL, iar cu post prin antetul url. post se utilizeaza in cazul necesitatii unei confidentialitati mai inalte si in cazul transmiterii unor cantinati mari de informatii. informatiile se analizeaza/parseaza dupa ce dam submit. get acceseaza in url datele reprezentate sub forma de cheie valoare "?cheie=valoare&cheie2=valoare2&(etc)". sintaxa variabilei globale get este $_GET[] si sintaxa variabilei globale POST este $_POST[].



// Cum putem preveni injecțiile SQL în PHP?


// Ce este o sesiune în PHP și cum putem crea, accesa și distruge sesiunile?


// Ce este includerea fișierelor în PHP și când ar trebui să o folosim?

//include '' si require '', respectiv include_once '' si require_once '' se pot folosi pentru a include careva fisiere externe reutilizabile, astfel incat daca aceeasi informatie se repeta in zeci sau sute de pagini si atunci cand schimbam un element vrem sa se schimbe peste tot, utilizam aceasta metoda ca sa ne usuram munca.

// Cum putem manipula datele formularului în PHP?
//


// Să presupunem că avem un array de șiruri de caractere și dorim să afișăm toate șirurile care conțin litera 'a'. Exercițiul constă în a itera prin array și a afișa numai elementele care satisfac această condiție.

//strpos("string original", "ce cautam");  returneaza false daca nu gaseste. returneaza indexul de inceput al stringului cautat daca gaseste.

// $fructe = ["mere", "pere", "banane", "prune", "caise"];

// foreach($fructe as $fruct) {
//   if(strpos($fruct, "a")!=false) {
//     echo $fruct."<br>";
//   }
// }

//seteaza un termometru care verifica temperatura din farmacie si atentioneaza atunci cand se depaseste limita de 25 grade celsius cu rosu. foloseste bucla while, conditionarea if, foloseste html pentru afisare. incheie if cu endif; daca temperatura este normala afiseaza text albastru "Temperatura din farmacie se incadreaza intre limitele admise. genereaza valorile de temperatura intamplator.

// $temp = rand(15, 32);
// $counter = 40;

// while ($counter>=0):
/*
// if($temp>18 && $temp <25): 
// ?>
// <p style="color:blue">Temperatura din farmacie se incadreaza intre limitele admise.</p>
// <?php
// elseif ($temp > 25):?>
// <p style="color:red;">Temperatura din farmacie este <?=$temp?> grade Celsius. Atentie! Temperatura neconforma! Scadeti imediat temperatura la valorile permise!</p>
// <?php elseif($temp < 18):?>
// <p style="color:green;">Temperatura din farmacie este <?=$temp?> grade Celsius. Atentie! Temperatura neconforma! Cresteti imediat temperatura la valorile permise!</p>
// <?php
// if($temp==23)
//   echo "Temperatura perfecta";
//   break;
// endif;*/

// $temp = rand(15,32);
// $counter= $counter - 3;
// endwhile;


// greseli: confund conditionarea while cu cea if. while trebuie sa fie true in principiu pana la finalizarea iteratiei de decrementare ca sa functioneze codul pentru toate cazurile prezentate. altminteri se va opri la prima conditionare a lui while si cam atat. 
// temperatura trebuie resetata la sfarsitul iteratiei, pentru ca este declarata ca variabila globala si nu se va schimba de la sine, ea fiind in afara while loop ului

//multumesc


//teorie sisteme numerice

//numerele in baza zece se numesc astfel pentru ca pot fi reprezentate in baza 10 astfel, spre ex: 456 echivaleaza matematic cu 6*10^0+5*10^1+4*10^2 = 6+50+400 = 456.
//numerele binare contin doar cifrele 1 si 0. pentru a transforma un numar binar intr-un numar zecimal procedam astfel: 11011 ex - luam fiecare cifra de la dreapta la stanga si o inmultim cu 2 la puterea initial 0, apoi 1 apoi 2 etc, si la sfarsit dupa ce am terminat iteratia prin toate cifrele, adunam rezultatele, vom obtine echivalentul in baza zece. ori pentru operatia inversa procedam astfel: in cazul lui 30 pe care il vrem binar, il impartim la 2. restul il trecem in dreapta 0, iar rezultatul il mai impartim o data la 2 si repetam procedura pana rezultatul este mai mic ca 2 si nu se imparte la 2. fiecare rest va fi fie zero fie 1 si atunci numarul rezultat va fi binar.

//in programare avem functii predefinite de calcul
//din decimal in binar
$dec = 895;
$bin = decbin($dec);
//echo $bin;

//din binar in decimal
$bin = 11001100100;
$dec= bindec($bin);
//echo $dec;

//Numerele octale sunt de la 0 la 7. matematic, conversia lor din sistemul zecimal in octal si invers este similar cu cel binar, cu fiferenta ca in loc de 2 in ecuatie se trece 8. adica odata vom inmulti fiecare cifra zecimala cu 8 la puterea (0 initial, apoi 0+n, unde n este egal cu 1), atunci cand vrem sa transfomam din octal in zecimal, iar invers din zecimal in octal pentru a face conversia matematica vom imparti numarul la 8, trecem restul in dreapta si iar la 8 si tot asa dupa cum am explicat si la binar

//in programare din decimal in octal
$dec = 23;
$oct = decoct($dec);
//echo $oct;

//din octal in decimal
$oct = 56;
$dec = octdec($oct);
//echo $dec;

//hexazecimal. reprezentarea numerica este intre 0-9 corespund cifrele 0-9 iar intre 10-15: A-F. logica matematica este aceeasi. ce este mai deosebit aici este ca in cazul reprezentarii hexazecimale tot ce inseamna 10, 11, 12, 13, 14, 15 se va reprezenta prin cifrele respective. deci ca sa transformam din hexazecimal in zecimal, vom inmulti fiecare cifra de la dreapta la stanga cu 16^0 initial, apoi 16^1 etc, si adunam. daca avem o litera, aceasta va fi transformata in numarul aferent in interiorul calculului matematic. invers, din zecimal in hexazecimal. impartim numarul la 16. afisam restul de la dreapta la stanga. daca restul este o valoare intre 10 si 15, vom trece litera respectiv. se trece si ultimul numar care nu se mai imparte la 16 ex. 56 dec in hexazecimal

//rez 3, rest 8 -   38 - 38 ar trebui sa fie reprezentarea in baza 16

//in programare din decimal in hexazecimal

$dec = "45";
$hex = strtoupper(dechex($dec));
//echo $hex;

//din hexazecimal in binar

$hex = 56;
$dec = hexdec($hex);
//echo $dec;

// Se consideră o succesiune de caractere de '1' şi '0' din care primul caracter
// este '1'. Această secvenţă este reprezentarea în baza 2 a unui număr
// natural. Să se afişeze acest numărul în baza 10.
// Date de intrare:
// 1111

// dec = (...) + 1*2**1 + 1 * 2**0

// $bin = "1111";
// $dec = 0;
// $exp=0;

// for ($exp=0, $i=strlen($bin)-1; $i>=0; $exp++, $i--) {
//   $dec += (int)($bin[$i] * pow(2, $exp));
// }

// echo $dec;

//greseala - am introdus in calcul valoarea $i care reprezinta indexul de contorizare a interatiilor in loc sa extrag caracter cu caracter cifrele din string.


// Să presupunem că avem următoarea matrice bidimensională:

// $matrice = array(
//     array(1, 2, 3),
//     array(4, 5, 6),
//     array(7, 8, 9)
// );

// Scopul exercițiului este să calculăm suma tuturor elementelor din matrice care sunt multipli de 3.

// un număr este un multiplu de trei dacă se împarte exact la trei fără a lăsa rest. De exemplu, 6 este un multiplu de trei deoarece se împarte exact la trei (6 ÷ 3 = 2), în timp ce numărul 7 nu este un multiplu de trei deoarece nu se împarte exact la trei (7 ÷ 3 = 2 rest 1).

//$mult_trei % 3 == 0

// $sum = 0;


// for($i=0; $i<sizeof($matrice); $i++) {
//   for ($j=0; $j<sizeof($matrice[$i]); $j++) {
//     if ($matrice[$i][$j]%3===0) {
//       $sum += $matrice[$i][$j];
//     }
//   }
// }
//echo $sum;

//greseala: am utilizat foreach in loc de for in interiorul for loopului exterior. in acest caz pentru a extrage elementele din matrice avem nevoie de doua siruri numerice, doua randuri de indexuri. in primul for iteram prin arrayurile continute, iar cu al doilea for extragem fiecare element

// Să presupunem că avem un număr întreg dat, de exemplu 12345. Scopul exercițiului este să inversăm ordinea cifrelor și să afișăm rezultatul invers.

//ce tipuri de date exista in php?

//integer, float, string, boolean, array, object, null, resource

//resource, nu resources

$string = "26 mai";
$string2 = "nbsp hkjf";
//echo strlen($string);
//echo strtoupper($string);
//echo strtolower($string);
//echo str_replace("mai", "iunie", $string);
//print_r(str_split($string)) ;
//print_r(explode("-", $string));
//$string = [1,2,3];
//print_r(implode(" ", $string));
//remarca: daca folosim str_split asupra unui string, acesta se va transforma intr-un array astfel incat fiecare caracter al sau va reprezenta un item de array, in timp ce daca utilizam explode, stringul in sine va fi un item (adica intreg cuvantul un item, nu va fi separat pe caractere)
//echo strpos($string, "ai"); //returneaza indexul caracterului cautat. primul parametru este variabila in care se face cautarea si al doilea parametru este elementul cautat
//echo strrev($string);
//echo strcmp($string, $string2);
//echo substr($string, 0, 5); // extrage din string un anume nr de caractere. primul parametru este variabila, al doilea index inceput, al treilea nr caractere incepand cu primul
//echo trim($string2);
//echo htmlspecialchars($string2);
//echo str_word_count($string);
//echo ucfirst($string2);
//echo ucwords($string2);

//$var = 8
$arr = [4,89,56,56, 25,25];
$arr2 = [9, 63, 78];
$arr_asociativ = ["Calatorie dintr-o camera in alta" => "Italo Calvino", "Cu sange rece" => "Truman Capote", "Nostalgia" => "Mircea Cartarescu"];

//$cifra = $arr[0];
//var_dump(strval($cifra));
//var_dump(in_array($var, $arr));
//array_push($arr, 55, 44);
// array_pop($arr);
// rsort($arr);
//array_unshift($arr, 444, 9);
//$merged_arr = array_merge($arr, $arr);
//$arr_extras = array_slice($arr, 1, 2);
//array_splice($arr, 0, 1);
//print_r($arr);

//functie de cautare a unei valori si returnare a unei chei

// $carte = array_search('Mircea Cartarescu', $arr_asociativ);
// print_r($carte);

//array_search este o functie cu care putem cauta in array o anumita valoare si sa returnam cheia, deci se poate folosi cand vrem sa extragem si sa afisam o anume cheie din array, cautand-o dupa valoare

//$chei = array_keys($arr_asociativ);
//print_r($chei);

// $valori = array_values($arr_asociativ);
// print_r($valori);

// $reverse = array_reverse($arr);
// print_r($reverse);

// $unic = array_unique($arr);
// print_r($unic);

// $sum = array_sum($arr);
// echo $sum;

// $flip = array_flip($arr_asociativ);
// print_r($flip);


// Să presupunem că avem următoarea matrice bidimensională:

// $matrice = array(
//   array(1, 2, 3),
//   array(4, 5, 6),
//   array(7, 8, 9)
// );

// Scopul exercițiului este să calculăm suma tuturor elementelor din matrice care sunt multipli de 3.

// $sum = 0;

// for($i=0; $i<count($matrice); $i++) {
//   for($j=0; $j<count($matrice[$i]); $j++) {
//     if($matrice[$i][$j]%3==0)
//     $sum += $matrice[$i][$j];
//   }
// }
// echo $sum;
//multumesc


//transforma numarul in baza 8 in unul decimal

// $oct = "564";
// $dec = 0;

// for($exp=0, $i=strlen($oct)-1; $i>=0; $exp++, $i--) {
// //caracter($oct[$i]) * 8**$exp
// $dec += (int)($oct[$i]) * pow(8, $exp);
// }

// echo $dec;

//multumesc

//transformare numar hexazecimal in zecimal desfasurat


// $hex = "A548";
// $dec = 0;
// $arr_hex = ['1'=>1, '2'=>2, '3'=>3, '4'=>4, '5'=>5, '6'=>6, '7'=>7, '8'=>8, '9'=>9, 'A'=>10, 'B'=>11, 'C'=>12, 'D'=>13, 'E'=>14, 'F'=>15];

// for($exp=0, $i=strlen($hex); $i>0; $exp++, $i--) {
// $dec += $arr_hex[$i]*16**$exp;
// }

// echo $dec;

// Un client al unei banci depune initial la banca suma de 500 de euro cu o dobanda de 10% pe an. Sa se afiseze soldul per fiecare an, daca lasa banii la banca 5 ani.

// $sumaDepusa = 500;
// $ani = 5;

// for ($i = 1; $i <= $ani; $i++) {

// $soldFinal = $sumaDepusa * pow(1.1, $i);
// echo "La sfârșitul anului $i clientul va avea soldul bancar:" . "<br>" . "$soldFinal euro"  . "<br>". "<br>";
// }

// $string = "Imi iubesc sotul";

// $section = substr($string, 4, 6);
// echo $section;


// afișarea numerelor prime mai mici decât un număr dat


//numarul care nu se mai imparte la alte numere fara rest, inafara de impartirea la el insusi si la 1. deci nr care nu are alti divizori in afara de el insusi si 1.  deci sa nu aiba divizori in randul valorilor prin care face iteratia


$limit = 20;
echo "Numere prime mai mici decât $limit: ";

for ($number = 2; $number < $limit; $number++) {
    $isPrime = true;

    // Verificăm dacă numărul curent ($number) este divizibil cu orice număr între 2 și ($number - 1)
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $number . " ";
    }
}




?>




