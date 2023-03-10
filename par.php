<?php
    for ($par = 0; $par<=500; $par++){
        if (($par % 2 == 1) and ($par <500)){
            continue;
        }elseif ($par <=500) {
            echo $par . " - ";
        }else{
            break;
        }
    }
?>
        