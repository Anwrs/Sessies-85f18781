<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <form action="cart.php" method="get" style="display: flex; height: 30px; align-items: center">
        <h2>Keuze:</h2>
        <input type="number" name="number" id="">
        <button type="submit">Submit</button>

        </form>

    </body>
</html>

<?php
if(($_GET["number"] > 0) && ($_GET["number"] < 4)){
    if(isset($_GET["number"])){
        $_SESSION["keuze"] = $_GET["keuze"];
    }
    
    if(isset($_COOKIE["keuze"])){
        echo "Gekozen item: " . $_SESSION["keuze"];                                                         
    }
}
?>