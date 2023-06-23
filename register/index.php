<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Baza de date</title>
</head>
<body>
  <form action="index.php" method="POST">
    <input type="text" name="username" placeholder="Numele" required>
    <input type="password" name="password" placeholder="Parola" required>
    <input type="submit" name="register" value="Inregistreaza">
  </form>
</body>
</html>



<?php
require_once 'connect.php';

if(isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM registru WHERE username = '$username'";
  $result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
echo "Acest nume de utilizator deja exista in baza de date!";
}
else {
  $query = "INSERT INTO registru (username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($connection, $query);
  echo "Inregistrare cu succes";
}
}

//selectare utilizatori din tabel
$query = "SELECT * FROM registru";
$result = mysqli_query($connection, $query);

//verificare existenta inregistrari
if(mysqli_num_rows($result)>0) {
  //iterare prin fiecare rand de rezultate
  while($row = mysqli_fetch_assoc($result)) {
    //afisare informatii despre utilizator
    echo "Nume utilizator: " . $row['username'] . "<br>";
    //$row['username'] are cheia corespunzatoare numelui de coloana si valoarea corespunzatoare randului
    echo "<br>";
  }
} else {
  echo "Nu exista inregistrari in baza de date.";
} 

//eliberarea rezultatelor 
mysqli_free_result($result);
// Utilizarea funcției mysqli_free_result() este importantă pentru a evita stocarea inutilă a datelor în memorie și pentru a elibera resursele ocupate de rezultatul interogării.
// Aceasta este recomandată mai ales în cazul în care rezultatul interogării returnează un număr mare de rânduri sau când interogarea este utilizată într-un buclă.

//inchiderea conexiunii la baza de date
mysqli_close($connection);





?>

