<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="container"> 
    <div class="row">

    <form action="numero1.php" method="POST">

    <div class="mb-3">

        <label for="nome1" class="form-label">Qual é o seu nome?</label>
        <input type="text" class="form-control" id="nome1" name="txtnome1">

     </div>


            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="adicionais[]" value="bacon">
                <label class="btn btn-outline-primary" for="btncheck1">Bacon: R$ 3,00</label>

                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="adicionais[]" value="cheddar" >
                <label class="btn btn-outline-primary" for="btncheck2">Cheddar Cremoso: R$ 2,50</label>

                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="adicionais[]" value="cebola" >
                <label class="btn btn-outline-primary" for="btncheck3">Cebola Caramelizada: R$ 2,00</label>

                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="adicionais[]" value="hamburguer">
                <label class="btn btn-outline-primary" for="btncheck4">Hambúrguer Extra: R$ 5,00</label>
            </div>


        
     <button type="submit" class="btn btn-success">Enviar</button>
    </form>


    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>