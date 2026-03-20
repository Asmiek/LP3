<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado1</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    

    <?php
        $nome = $_POST['txtnome1'];
        
        if(isset ( $_POST['adicionais']))
{
        $adc = $_POST['adicionais'];
       
        $valorf = 0;

        echo "<pre>";
        print_r($adc);
        
   
        if(in_array("bacon", $adc))
        {
            $valorf = $valorf + 3;
        }

        if(in_array("cheddar", $adc))
        {
            $valorf = $valorf + 2.50;
        }

        if(in_array("cebola", $adc))
        {
            $valorf = $valorf + 2;
        }

        if(in_array("hamburguer", $adc))
        {
            $valorf = $valorf + 5;
        }
}       
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>