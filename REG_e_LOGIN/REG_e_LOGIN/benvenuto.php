<?php
session_start();
include('conness.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../PHP1/PHP1/style.css">
    <title>Document</title>
</head>
<body class="bodyy"> 
             
      <?php
      echo $_SESSION['username'] . " ECCOTI QUA";

        ?>
    <br>
    <br>
    <a href="paginalogin.html" class="botto">
    <input type="button" class="btn" value="TORNA INDIETRO"><br><br>
    </a>
</body>
</html>
            

