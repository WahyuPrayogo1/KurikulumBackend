<?php
// $n = 9;
// for ($i= 0; $i <= $n; $i++)
// {
//   if ($i%2 ==0)
//   {
//   continue;
//   }
// echo $i," ";

// }

for ($i=9; $i > 0; $i--) { 
    for ($j=9; $j > 0 ; $j--) { 
      if ($j == $i || $i+$j == 10 || $j == 5|| i==5) {
        echo "(" . $i . "." . $j . ") ";
        echo "(+,+)";
        echo "+";
      }else{
        echo "(".$i . "," .$j . ") ";
        echo "( -,- ) ";
        echo ". ";
      }
    }
    echo "<br>";
}