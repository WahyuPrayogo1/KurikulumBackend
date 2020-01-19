<?php
for ($n=9; $n >= 1; $n--) { 
    for ($j=1; $j <= 9 ; $j++) { 
        if ($j <= $n) {
            echo "  * ";
        }else{
            
            echo  "+";
        } 
    }echo "<br>";
    
}