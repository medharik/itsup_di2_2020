<?php 

$liste_produits=[
['hp dv 7',9000,10],
['dell satelitte',4500,90],
['sony vaio',5000,2]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock de produit</title>
</head>
<body>
<table border="1" >
   <thead>
        <tr>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité en stock</th>
        </tr>
   </thead>
   <tbody>
<?php foreach($liste_produits as $produit) {   ?>
       <tr>
           <td><?=$produit[0]?></td>
           <td><?= $produit[1]?></td>
           <td><?=$produit[2]?></td>
       </tr>
<?php } ?>


   </tbody>
</table>
<?php 
$age=2;
if($age>18) {
    ?>
    <h2>Majeur</h2>
<?php } else { ?>
<h2>Mineur</h2>

<?php } ?>
</body>
</html>