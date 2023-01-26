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


        function getRandomPass($lunghezzaPass){
            $i = 0;
            $password = "";

            while($i < $lunghezzaPass){

                $password .= chr(97 + mt_rand(0, 25));
                $password .= chr(65 + mt_rand(0, 25));
                $password .= mt_rand(0, 9);
                $password .= chr(33 + mt_rand(0, 14));
                


                
                $i = $i + 4;
            }
                
            return $password;
        }

        if(isset($_GET["lunghezza"])){
            if($_GET["lunghezza"] >= 4){
                echo "password: " . getRandomPass($_GET["lunghezza"]);
            }else{
                echo "la password deve contenere aleno 4 caratteri";
            }
        }
    ?>






</body>
</html>