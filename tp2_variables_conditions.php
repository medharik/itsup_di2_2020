<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp 2 en PHP</title>
</head>
<body>
    
    <h2>Les variables </h2>

    <?php 
        $a=1;$b=2;$c=3;
        echo "a est : $a , b est $b, c est $c <br>";
        $a=$b;// passage par valeur 
        echo "a est $a , b est $b <br>";
        $c=&$a;// passage par Adresse (REFERENCE)
        $c=100;
        echo "a est : $a , b est $b, c est $c <br>";
        $a=300;
        echo "c  =  $c <br>";
        echo 'a est : $a , b est $b, c est $c <br>';
        echo 'a est : '.$a.' , b est '.$b.', c est'.$c.' <br>';// la concatenation .

        $nom ="KHADRAOUI";
        echo $nom;
        echo '<p>le nom est $nom</p>';
        echo "<p>le nom est $nom</p>";
        echo '<p>le nom est '.$nom.'</p>';
    
    ?>

    <h2>les conditions</h2>
    <?php 
    $nom ='HARIK';
    $age=20;
$gender="femme";
$maj="";
$pol="";
$suj="";


if($gender =="homme" && $age > 18){
   $maj="Majeur";
   $pol="Mr.";
   $suj="il";
}
if($gender =="homme" && $age <= 18){
    $maj="mineur";
    $pol="Mr.";
    $suj="il";
}
if($gender =="femme" && $age >18){
    $maj="Majeure";
    $pol="Mme.";
    $suj="elle";
}
if($gender =="femme" && $age <= 18){
    $maj="mineure";
    $pol="Mme.";
    $suj="elle";
}
echo "$pol $nom a $age ans , $suj est $maj";

// Mr.HARIK a 38ans , il est majeur
// Mme. HARIK a 38ans , elle est mineure 
 
    
    ?>

</body>
</html>