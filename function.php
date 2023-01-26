<?php
    function getRandomPass($lunghezzaPass)
    {
        $i = 0;
        $password = "";

        while ($i < $lunghezzaPass) {

            $password .= chr(97 + mt_rand(0, 25));
            $i++;
            if($i < $lunghezzaPass){
                $password .= chr(65 + mt_rand(0, 25));
                $i++;
            }
            if($i < $lunghezzaPass){
                $password .= mt_rand(0, 9);
                $i++;
            }
            if($i < $lunghezzaPass){
                $password .= chr(33 + mt_rand(0, 14));
                $i++;
            }
            
            




        }

        return $password;
    }

?>