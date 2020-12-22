<?php 
$produit1=['libelle'=>'hp dv 7','prix'=>8000,'images'=>'http://placeimg.com/300/300/tech','qte'=>100];
$produit2=['libelle'=>'dell d 7','prix'=>10000,'images'=>'http://placeimg.com/300/300/tech','qte'=>0];
$stock=[$produit1,$produit2];
//scaffold pour peupler des donnees fictives  (de test)
for($i=0;$i<100;$i++){
    $produit=['libelle'=>'produit '.$i,'prix'=>random_int(1000,10000),'images'=>'http://placeimg.com/300/300/tech','qte'=>rand(0,100)];
$stock[]=$produit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($stock  as $p){ ?>
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 text-center border p-2">
                <img src="http://placeimg.com/300/300/tech" alt="" class="img-fluid">
                <h4><?=$p['libelle']?></h4>
                <h4><?=$p['prix']?>DHS</h4>
                <h4>
                <?php if($p['qte']==0) {  ?>
                    <div class="text-danger">
                     Rupture de stock
                    </div>
                <?php } ?>
                <?php if($p['qte']>0) {  ?>
                    <div class="text-primary">
                     Disponible en stock
                    </div>
                <?php } ?>

                
            </h4>
            </div>
            <?php } ?>
        </div>

    </div>
    
</body>
</html>