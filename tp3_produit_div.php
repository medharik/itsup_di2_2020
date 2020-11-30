<?php 
$stock=[
['hp dv 6',5000,0,'images/hp.jpg'],
['dell   6',6000,30,'images/dell.jpg'],
['sony vaio',7000,0,'images/sony.jpg'],
['hp dv 6',5000,3,'images/hp.jpg'],
['dell   6',6000,30,'images/dell.jpg'],
['sony vaio',7000,0,'images/sony.jpg'],
['hp dv 6',5000,3,'images/hp.jpg'],
['dell   6',6000,30,'images/dell.jpg'],
['sony vaio',7000,0,'images/sony.jpg'],
['hp dv 6',5000,3,'images/hp.jpg'],
['dell   6',6000,30,'images/dell.jpg'],
['sony vaio',7000,0,'images/sony.jpg'],




];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes de produits </title>
    <link rel="stylesheet" href="style_produit.css">
</head>
<body>
<main>
<?php foreach($stock as $p) {?>
            <div class="produit b">
            <div class="tof">
            <img src="<?=$p[3]?>" alt="">
            </div>
            <h4><?=$p[2]?>DHS</h4>
            <div class="info">
            <h4><?=$p[0]?>6</h4>
            <h4><?php 
            $qte=$p[2];
            if($qte==0){ ?>
      <span class="rupture">  Rupture de stock</span>
            <?php } else if($qte<10) {?>
                <span class="alert">
                    Alerte de stock

            </span>
            <?php } else if($qte>=10) {?>
           <span class="stock">

               En stock

           </span>
            <?php } ?>
            </h4>
            </div>
            </div>
<?php }?>
</main>
    
</body>
</html>