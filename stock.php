<?php 
$stock=[
    ['hp dv 6',9000,10],
    ['dell d9',10000,100],
    ['sony vaio',10000,1],
    ['sony vaio',10000,1],
    ['sony vaio',10000,1],
    ['sony vaio',10000,1],
    ['sony vaio',10000,1],
    ['sony vaio',10000,1],
    ['sony vaio',10000,1],
    ['acer vaio',10000,1],

];
// echo "<tr>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Liste des <?= count($stock);?> produits en stock</h2>
<table >
    <thead>
    <tr>
        <th>Libellé</th>
        <th>Prix</th>
        <th>Quantité</th>
    </tr>
    </thead>
    <tbody>
   <?php foreach($sto ck as $p) {  ?>
    <tr>
        <td><?php echo $p[0];?></td>
        <td><?php echo $p[1];?></td>
        <td><?= $p[2];?>  </td>
    </tr>
    
    <?php } ?>
   
    </tbody>
</table>
    
</body>
</html>