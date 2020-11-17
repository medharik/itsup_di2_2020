<?php 
$x=10;
// echo 'x est $x '; x est $x
// echo "x est $x"; x est 10
// echo 'x est '.$x; x est 10


function difference($x,$y){

   if(is_numeric($x) && is_numeric($y)){
    if($x>$y){
        $d=$x-$y;
            echo "la difference entre $x et $y est $d<br>";
    }else if($x<$y){
        $d=$y-$x;
        echo "la difference entre $x et $y est $d<br>";
    }else{
        echo "$x=$y, la diffrence est 0<br>";
    }
   }else{
       if(!is_numeric($x))
       echo '<p style="color:red">'.$x.' n\'est pas un nombre</p>';
       else {
        echo '<p style="color:red">'.$y.' n\'est pas un nombre</p>';
   
       }
   }

}

// function  exist1($nombre,$tableau){
// $trouve=0;
//     for ($i=0; $i <count($tableau) ; $i++) { 
//         if($tableau[$i]==$nombre){
//             $trouve=1;
//         }
//     }

//     if($trouve==1){
// echo "$nombre se trouve dans le tableau<br>";
//     }else{
//         echo "$nombre n'existe pas dans le tableau<br>";
//     }

// }
// function  exist2($nombre,$tableau){
// $x=0;
//     for ($i=0; $i <count($tableau) ; $i++) { 
//         if($tableau[$i]==$nombre){
//            echo "le nombre $nombre est trouvé dans la position numéro $i<br>";
//         $x=1;
//         }

//     }

//     if($x==0){
//         echo "$nombre n'existe pas dans le tableau<br>";
//     }

// }


function  khadraoui($nombre,$tableau){
    $trouve=0;
        for ($i=0; $i <count($tableau) ; $i++) { 
            if($tableau[$i]==$nombre){
                $trouve=1;
            }
        }
    
        if($trouve==1){
     return true;
        }else{
         return false;
        }
    
    }
  
    
// exist(10,[1,2,3])
// difference(12,2);
// difference(8,2);
// difference(10,10);
// difference(-10,10);
// difference("test",90);
// difference(90,"test 2");
// difference(100,"test 2");
// exist2(1,[1,0,9,1,1]); 
$nombre=1;
$t=[10,7,8,9,1,11];
if(khadraoui($nombre,$t)){
    echo "oui";
}else{
    echo "non";
}
?>