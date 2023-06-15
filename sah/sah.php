<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>

.black{
  width: 2em;
  height: 2em;
  background-color: black;
  border: 1px solid black;
}

.white{
  width: 2em;
  height: 2em;
  background-color: white;
  border: 1px solid black;
}

.col-wrapper {
  display: flex;
  flex-flow: row wrap;
}

.break{
  flex-basis: 100%;
  height: 0;
  width: 0;
  overflow: hidden;
}

.main-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

.main-wrapper:nth-child(1) {
 margin-top: 4em;
}
  </style>
</head>


<body>

<?php function sah() {
?>


<?php for($j=1; $j<=4; $j++): ?>

<div class="col-wrapper main-wrapper">

<?php for($i=1; $i<=8; $i++): ?>
<div id="col" <?php echo ($i%2==0)?"class='black'":"class='white'"; ?>></div>

<?php endfor; ?>
<div class="break"></div>


<?php for($n=1; $n<=8; $n++): ?>
<div id="col2" <?php echo ($n%2==0)?"class='white'":"class='black'"; ?>></div>
<?php endfor; ?>

</div>

<?php endfor; ?>

<?php } ?>

 <?php echo sah();  ?>
 
 <!-- greseala: am scris denumirea function la apelarea functiei
alta greseala: nu am scris echo in fata operatorului ternar din tagurile divpentru citirea clasei. tot ce este in codul php ca sa fie afisat trebuie citit cu echo sau print
-->

</body>
</html>