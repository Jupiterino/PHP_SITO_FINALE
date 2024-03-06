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
             
      
        <div class="megadiv container megga" style="text-align: center;">
        <h1>TEATRO MOSCARDINI</h1>
        <div class="login" style="padding-bottom: 5%;">
            <h2 style="font-size: 400%;">
            <?php
      echo $_SESSION['username'] . " ECCOTI QUA";

        ?>
        </h2>
        </div>
        
    <br>
    <br>
    <a href="paginalogin.html" >
    <input type="button" class=" botto" value="TORNA INDIETRO">
    </a>
</body>
</html>
            

