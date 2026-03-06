<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<body class="d-flex justify-content-center align-items-center vh-100">
<div class="card text-center p-4">
    <?php 


$nome = $_POST['txtnome'] ;
$peso = $_POST['txtpeso'] ;
$altura = $_POST['txtaltura'] ;
$imc = $peso / ($altura * $altura);

echo "<h4 class = 'text-primary'>Olá $nome, considerando que voce tem $peso KG e $altura metros <br></h4>";

if ($imc < 18.5)
    {

     echo "<h3 class = 'text-warning'> você está abaixo do peso </h3>";
 
    }

if (18.5<$imc && $imc< 25)
    {
     echo "<h3 class = 'text-success'>você está no peso ideal</h3>";
 
    }

if (25<$imc && $imc< 30)
    {
     echo "<h3 class = 'text-warning'> você está com sobrepeso</h3>";
 
    }

if (30<$imc && $imc< 40)
    {
     echo "<h3 class = 'text-danger'>você está obeso</h3>";
 
    }

if ($imc> 40)
    {
     echo "<h3 class = 'text-dark'>você está IMENSO</h3>";
 
    }
?>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>     
</body>
</html>