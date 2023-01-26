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
        <button type="submit">Invio</button>
    </form>


    <?php

        include_once __DIR__ . "/function.php";

    ?>



    <?php

        if(isset($_GET["lunghezza"])){
            if($_GET["lunghezza"] >= 8){
                echo "password: " . getRandomPass($_GET["lunghezza"]);
            }else{
                echo "la password deve contenere aleno 8 caratteri";
            }
        }
    ?>






</body>
</html>