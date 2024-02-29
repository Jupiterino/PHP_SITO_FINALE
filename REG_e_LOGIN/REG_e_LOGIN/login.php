<?php
session_start();
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
      
      if(empty($name) || empty($pw)){
        $_SESSION['errore'] = "MANCA QUALCHE DATO ...";
        header('Location: errore.php');
      }

      $sql =
        "SELECT utente.username, utente.pwd FROM utente
          WHERE utente.username = '$name'";

      
      $result = $conn->query($sql);
      if ($result == FALSE) {
        $_SESSION['errore'] = " QUALCOSA NON VA ...";
        header('Location: errore.php');
      } else {
        if ($result->num_rows == 0) {
          $_SESSION['errore'] = $name . " NON SEI ANCORA REGISTATO!!!";
          header('Location: errore.php');
        } else {
          $row = $result->fetch_assoc();
          $p = $row["pwd"];
          if ($pw == $p) {
            $_SESSION['username'] = $name;
            header('Location: benvenuto.php');
          } else {
            $_SESSION['errore'] = $name . " HAI SBAGLIATO PASSWORD!!!";
            header('Location: errore.php');
          }



        }
      }



        ?>
<br><br><a href="paginalogin.html">
            <input type="button" value="TORNA INDIETRO"><br><br>
            </a>
</body>
</html>
            

