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

      //a se afisa numele studentului, nota, media



//                     $students = [
  
//               [
//                   "name" =>"Maria",
//                   "grades" =>[8,7,9,6]
//               ],
//               [
//                   "name"=>"Ciprian",
//                   "grades"=>[9,9,8,10]
//               ],
//               [
//                   "name"=>"Alex",
//                   "grades"=>[7,6,8,7]
//               ]
//               ];

//               //calculez media
               
//               foreach($students as $student) {
//                 $name = $student["name"];
//                 $grades = $student["grades"];

//                 $sum = 0;

//                 foreach ($grades as $grade) {
//                     $sum += $grade;
//                     //echo $grade;
//                 }

           

           
//            echo "Numele studentului este {$name} si are notele: "; 
        
//                   foreach ($grades as $index => $grade) {
//                     echo $grade;

//                  if ($index != count($grades)-1){
//                     echo ", ";
//                  }
//                 }
                
//                 $average = $sum / count($grades);

             
//                 echo "<br>"."Media: $average"."<br>";
               
             
//  }

    //a se pune parametrii intr-un array asociativ

    $string = "http//myPage.php?id=25&cat=18&user=34";

    $arr = explode("?", $string);
   
    $arr = explode("&", $arr[1]);
     

     $finalArr = [];


     for ($i=0; $i<sizeof($arr); $i++) {
        $currentParam =  explode("=", $arr[$i]);
        $finalArr[$currentParam[0]] = $currentParam[1];
     }

     print_r($finalArr);

     
                 
?>