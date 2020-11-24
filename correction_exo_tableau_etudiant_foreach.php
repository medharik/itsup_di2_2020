<?php 
$classeDi2=[
['ID    ','NOM','PRENOM','GENRE'],   
['HARIK','Mohamed','Homme'],
['TALIB','Mohamed','Homme'],
['TBAHI','Zineb','Femme'],
['Selmati','Imane','Femme'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des étudiants</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style_stock.css">
</head>
<body>
<h2 >Liste des <?=count($classeDi2)?>  étudiants :</h2>
<table>

    <thead>
        <tr>
            <th><?=$classeDi2[0][0]?></th>
            <th><?=$classeDi2[0][1]?></th>
            <th><?=$classeDi2[0][2]?></th>
            <th><?=$classeDi2[0][3]?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($classeDi2 as $c => $etudiant) {
      if($c!=0){ 
    ?>
        <tr>
            <td><?php echo $c ;?></td>
            <td><?=$etudiant[0]?></td>
            <td><?=$etudiant[1]?></td>
            <td><?=$etudiant[2]?></td>
        </tr>
    <?php } } ?>
    </tbody>
</table>
    
</body>
</html>