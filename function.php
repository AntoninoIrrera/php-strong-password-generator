<?php
    function getRandomPass($lunghezzaPass,$lettere,$numeri,$simboli,$ripetizione)
    {
        $i = 0;
        $password = "";
        $caratteriPassList = [];


        while ($i < $lunghezzaPass) {


            if($ripetizione == 0){


                if ($lettere == 1) {
                    $randomLetter = chr(97 + mt_rand(0, 25));

                    if(!in_array($randomLetter,$caratteriPassList)){
                        $caratteriPassList[] = $randomLetter;
                        $i++;
                    }

                    if ($i < $lunghezzaPass) {
                        $randomCapsLetter = chr(65 + mt_rand(0, 25));
                        if(!in_array($randomCapsLetter,$caratteriPassList)){
                            $caratteriPassList[] = $randomCapsLetter;
                            $i++;
                        }
                    }
                }
                if ($numeri == 1) {
                    if ($i < $lunghezzaPass) {
                        $randomNumber = mt_rand(0, 9);
                        if(!in_array($randomNumber,$caratteriPassList)){
                            $caratteriPassList[] = $randomNumber;
                            $i++;
                        }
                    }
                }
                if ($simboli == 1) {
                    if ($i < $lunghezzaPass) {
                        $randomSimbol = chr(33 + mt_rand(0, 14));
                        if(!in_array($randomSimbol,$caratteriPassList)){
                            $caratteriPassList[] = $randomSimbol;
                            $i++;
                        }
                    }
                }

            }else{

                
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


        }

        if(count($caratteriPassList) > 0){
            foreach ($caratteriPassList as $carattere) {
                $password .= $carattere;
            }
        }


        return $password;
    }

?>