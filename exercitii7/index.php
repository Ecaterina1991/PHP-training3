<?php
function conn()
{
$mysql = mysqli_connect("localhost","root","","mydb");


if(!$mysql) {
  die("Conexiune esuata");
}

mysqli_close($mysql);
}

function inserare_db() {
  global $mysql;

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
  }
 
if(strlen($username)<3){
  echo "Utilizatorul trebuie sa aiba mai mult de 3 caractere";
}
if(strlen($email)<8) {
  echo "Adresa de email trebuie sa aiba mai mult de 8 caractere";
}

$query = "INSERT INTO users('username', 'email') VALUES ('$username', '$email')";

$result = mysqli_query($mysql, $query);

if(!$result) {
die("Conexiunea a esuat");
}


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="#" method="POST">
  <label for="name">Name</label>
  <input type="text" name="name" placeholder="Name" required>
  <label for="email">Name</label>
  <input type="email" name="email" placeholder="Email" required>
  <label for="password">Password</label>
  <input type="password" name="password" placeholder="password" required>
  <input type="submit" value="Send!">
  
</form>

</body>
</html>