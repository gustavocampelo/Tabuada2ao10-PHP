<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <title>Tabuada do 2 até o 10</title>
</head>

<body>
    <h1 class="titulo">Tabuadas do 2 até o 10</h1>
    <div class="container">
        <div class="element">
            <?php for($i=2;$i<=10;$i++){
            echo "<div class='table'><h4> Tabuada do $i</h4>";
            ?>

            <?php
                for($j=1;$j<=10;$j++){ 
            ?>

            <?php     echo"<p> $i x $j = " . $j*$i . "</p>";  ?>
            <?php
            
            }
            echo "</div>";
            echo "<br>";
        }
        echo "</div>";
        ?>



        </div>
</body>

</html>