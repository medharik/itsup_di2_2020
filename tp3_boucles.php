<?php 
// Qu'affiche le programme suivant ? 
  for ($i=0; $i < 10 ; $i++) { 
    
    echo  "A $i";
    if($i%2==0 &&  $i !=0)  echo "B : $i<br>";
    else echo "C $i <br>";
    if($i==4) break;
    if($i==3) continue;


    echo "D  $i <hr>";

  }

echo  "fin du programme <hr>";


// i=0 => A0 , C0 ,  D 0
// i=1=> A1 , C1 , D 1
// i=2 => A 2 , B 2 , D2 
// i=3 => A 3  C3 
//i=4 => A4 B4 
//fin du programme
// boucle while 

$j=0;
// ++j  => pre incrementation 
// j++ => post incrementation  

$t=false;
while($j++<=5 && $t==false){

  if($j==3) $t=false;
    
  //  $j++;// incrementation par 1 
    echo "j est $j<br>";
}
echo "<hr>";
$t=false;
$j=0;

do{

    if($j==3) $t=false;
    
    echo "j est $j<br>";
      
    //  $j++;// incrementation par 1 
}while(++$j<=5 && $t==true);




?>