<?php
    function getRandomPass($lunghezzaPass,$lettere,$numeri,$simboli)
    {
        $i = 0;
        $password = "";

        while ($i < $lunghezzaPass) {

            if($lettere == 1){
                $password .= chr(97 + mt_rand(0, 25));
                $i++;
                if($i < $lunghezzaPass){
                    $password .= chr(65 + mt_rand(0, 25));
                    $i++;
                }
            }
            if($numeri == 1){
                if($i < $lunghezzaPass){
                    $password .= mt_rand(0, 9);
                    $i++;
                }
            }
            if($simboli == 1){
                if($i < $lunghezzaPass){
                    $password .= chr(33 + mt_rand(0, 14));
                    $i++;
                }
            }
            
            




        }

        return $password;
    }

?>