<?php
include('conness.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>          
      <?php
      
      $name = $_POST['name'];
      $pw = $_POST['pw'];


      $sql =
        "SELECT utente.username FROM utente
        WHERE utente.username = '$name'";

      if(empty($name) || empty($pw)){
        echo "<h1>ERRORE MANCA QUALCHE DATO ...</h1>";
      }
      if ($conn->query($sql)) {
        $sql2 =
        "SELECT utente.username, utente.password FROM utente
        WHERE utente.username = $name AND
        utente.pwd = '$pw'";
        if ($conn->query($sql2)) {
          echo "siiii";
        }
      }
      else {
        echo "errore utente non trovato";
      }
      $conn->close();

      echo "<br><br><a href=\"paginalogin.html\">
            <input type=\"button\" value=\"TORNA INDIETRO\"<br><br>
            </a>";
        ?>
    <a href="pagina.html">Vai alla home page</a>
</body>
</html>
            

