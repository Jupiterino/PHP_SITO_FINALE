
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body class="bodyy">
    <div class="container row sss" style="text-align: center; margin: auto; padding-top:10%;">
        <div class="col-12">
            <div class="scatolaa" style="padding: 3%;">
                
                
   
                <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinema_finale";

        mysqli_report(MYSQLI_REPORT_OFF);
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $table = $_POST['tabella'];

        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        $count = 0;
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>$table</h1>";
        echo '<table class=\'table table-dark\'>';
        echo "<br><br>";
        while($row = mysqli_fetch_assoc($result)){
            if($count == 0){
                foreach ($row as $chiave => $y) {
                    echo "<td>" . "<p style=\"pappa\">$chiave</p>"  . "</td>";
                    }
            }
            echo "<tr>";
            foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
            $count ++;
        }
        echo '</table><br />';
        
        }else {
            echo "0 results";
          }

    

  {

 
}
    
        $conn->close();

        echo "<br><br><a href=\"index.html\">
            <input type=\"button\" value=\"TORNA INDIETRO\" class=\"btn boyyone\" style=\"background-color: rgb(175, 175, 175); color:black\"><br><br>
            </a>";
            ?>

    </div>
        </div>
        
    </div>
</body>
</html>
       

            

