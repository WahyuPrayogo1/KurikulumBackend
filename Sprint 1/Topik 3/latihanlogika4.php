<?php
for ($i=9; $i > 0; $i--) { 
    for ($j=9; $j > 0 ; $j--) { 
      if ($j == $i || $i+$j == 10 || $j == 5|| $i==5) {
        echo "(" . $i . "." . $j . ") ";
        // echo "(+,+)";
        // echo "+";
      }else{
        echo "(".$i . "," .$j . ") ";
        // echo "( -,- ) ";
        // echo ". ";
      }
    }
    echo "<br>";
}
echo "<br>";

for ($n=9; $n > 0 ; $n--) { 
    for ($j=9; $j > 0; $j--) { 
      if ($n == 9 || $n == 5 ||$n >= 5 && $j == 9|| $j == 1 && $n <= 5 || $n == 1) {
        echo "+";
      }else{
        echo " -";
      
      }
    }
    echo "<br>";
}











