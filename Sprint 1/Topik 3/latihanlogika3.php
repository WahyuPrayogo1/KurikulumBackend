<?php

for ($i=9; $i >= 1; $i--) { 
  for ($j=9; $j >= 1 ; $j--) { 
    if ( $i+$j<=10 && $j>=$i || $i+$j >=10 && $j <= $i){
      echo "+";
    }else{
     echo " - ";
    }
  }
  echo "<br>";
}




  
            

        
