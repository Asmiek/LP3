<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
<h1>LP3 Aula 2</h1>    

<?php 

$BAT = 16 ;
echo "Tecto $BAT <br>";
echo'sla oq texto $BAT<br>';
echo 4 . "<br>";
echo $BAT ;


?>

<h3>Lista</h3>

<?php
if ($BAT % 2 == 0 ){
    $resp = "PAR";
}
else{
    $resp = "impar";
}
?>


<ul>
    <li>A variavel Bat é <?php echo "$resp" ?> </li>

<?php if ($BAT % 2 == 0 ){ ?>
 
    <li>A Variavel bat é par</li>


<?php } else { ?>
 
    <li>A Variavel bat é impar</li>

<?php } ?>

</ul>

</body>
</html>