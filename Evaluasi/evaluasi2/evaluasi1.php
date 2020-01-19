<?php

$students = array('IT-017'=>'Lutfi<br>',
                  'IT-001'=>'Ridwan <br>',
                  'IT-002'=>'Arief<br>',
                  'IT-005'=>'Achmad<br>',
                  'IT-004'=>'Yusuf<br>'
                  
                );
 

krsort($students);


foreach ($students as $key => $value) {
    echo "$key = $value\n";
}

echo "<br>";
ksort($students);
foreach ($students as $key => $value) {
    echo "$key = $value\n";
}
