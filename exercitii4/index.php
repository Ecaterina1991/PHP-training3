<?php
//creeaza un array cu 5-6 elemente, integreaza-l intr-un cod html, citeste-l intr-o lista html folosind bucla php. conditioneaza doua stilizari diferite astfel incat sa se modifice stilizarea daca nr de elemente din array este mai mare de 5 elemente
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .primul {
      color:red;
      
    }

    .primul li {
      list-style-type: disc;
    }

    .doi {
      color: green;
      
    }

    .doi li {
      list-style-type: circle;
    }

  </style>
  </head>


<body>

<?php
$array = [ 'fotbal', 'meci', 'invingatori', 'turneu', 'cor', 'gol'];
?>

<h1>Familie de cuvinte fotbal</h1>


<ul  <?php echo sizeof($array) > 5 ? 'class="primul"' : 'class="doi"'; ?>>
<?php foreach($array as $item) { ?>

  <li><?php echo $item; ?> </li>
  
<?php  } ?>
</ul>

<!-- clasa se trece in ul si se integreaza in cod php. rezultatul - clasa se citeste cu echo. conditionarea nu se trece intre paranteze rotunde. termenul class="denumireClasa" se trece intre ghilimele simple. cu punct si virgula la sfarsit.
aici greseala a fost ca nu am inchis tagul ul si din cauza asta lipsea prima bulina
-->

</body>
</html>