<?php

$input="hello";
    
    echo "Input : $input <br>";
    for($a =0; $a<=$input; $a++){
        for($b=$input; $b>=$a; $b-=1){
            echo "Output : $b";
        }
    }

?>