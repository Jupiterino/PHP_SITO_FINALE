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
    <h2 style="color:red;"">
    <?php
    echo $_SESSION['errore'];
    unset($_SESSION['errore']);
    ?>

</h2>
    <a href="paginalogin.html">Torna alla home page</a>
</body>
</html>