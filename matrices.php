<?php

$t=[
[1,3,6],
[2,5,7],
[3,4,6]
];
$unique=[];
$c=0;
// creation du tableau unique (qui ne contient que des valeurs uniques)
//  à partir du tableau t

for ($i=0; $i < 3; $i++) {// les lignes  
   for ($j=0; $j <3 ; $j++) {//les colonnes de chaque ligne
   if (!in_array($t[$i][$j],$unique)) {
   $unique[]=$t[$i][$j];//push
   }
    
   }
}

print_r($unique);

echo '<hr>';

for ($i=0; $i <count($unique) ; $i++) { 
   // echo $t[$i][$j],'<br>';
   
   if ($unique[$i]%3==0) {
      $c++;  
     }
}
echo "le nombre de valeur divisibles par 3 est $c";





?>