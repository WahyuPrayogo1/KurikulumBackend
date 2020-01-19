<?php
for ($n=9; $n >= 1; $n--) { 
    for ($j=9; $j >= 1 ; $j--) { 
        if ($n <= $j) {
            echo  "+";
        }else{
            echo "  * ";
        } 
    }echo "<br>";
    
}