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
    
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    
    $sql =  "INSERT INTO utente (ID, username, pwd, nome, cognome, email, dataregistrazione)
    VALUES (NULL, '$username', '$password', '$nome', '$cognome', '$email', current_timestamp() )";
    

    if ($conn->query($sql)) {
        echo "<p>Inserimento andato a buon fine</p>";
    } else {
        echo $conn -> error;
        echo "<p style='color:red'>Errore</p>";
    }
    
      $conn->close();
    ?>
    
    <a href="paginaregistrazione.html">Vai alla home page</a>
</body>
</html>

