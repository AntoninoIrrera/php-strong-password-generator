<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>


    <form action="index.php" method="GET">
        <label for="lunghezza">Lunghezza password</label>
        <input type="number" name="lunghezza" id="lunghezza">
        <input type="checkbox" id="lettere" name="lettere" value="1">
        <label for="lettere"> Lettere</label>
        <input type="checkbox" id="numeri" name="numeri" value="1">
        <label for="vehicle2"> Numeri</label>
        <input type="checkbox" id="simboli" name="simboli" value="1">
        <label for="simboli"> Simboli</label>
        <button type="submit">Invio</button>
    </form>


    <?php

    include_once __DIR__ . "/function.php";

    session_start();

    ?>



    <?php

    if (isset($_GET["lunghezza"])) {
        if(isset($_GET["lettere"]) or isset($_GET["numeri"]) or isset($_GET["simboli"])){

            if ($_GET["lunghezza"] >= 8) {
                // echo "password: " . getRandomPass($_GET["lunghezza"]);
                $_SESSION['password'] = getRandomPass($_GET["lunghezza"],$_GET["lettere"],$_GET["numeri"],$_GET["simboli"]);
                header("location: ./login.php");
            } else {
                echo "la password deve contenere aleno 8 caratteri";
            }
        }else{
            echo "selezionare almeno un tipo di carattere per la password";
        }
    }
    ?>






</body>

</html>