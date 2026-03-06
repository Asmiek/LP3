<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <div class="row">

            <h1>Formularios</h1>

            <h2 class ='text-primary'>Formulário n1 </h2> 
            <form action="recebedadosatividade1.php" method="POST">

                <div class="mb-3">
                <label for="camponome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="camponome" name="txtnome">
                </div>

                 <div class="mb-3">
                <label for="campopeso" class="form-label">Qual seu peso em KG</label>
                <input type="text" class="form-control" id="campopeso" name="txtpeso">
                </div>

               <div class="mb-3">
                <label for="campoaltura" class="form-label">Qual sua altura em M</label>
                <input type="text" class="form-control" id="campoaltura" name="txtaltura">
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
            
            
            </form>



             <h2 class ='text-primary'>Formulário n2 </h2> 
            <form action="atividade2.php" method="POST">

            <div class="mb-3">
            <select class="form-select"  name="txtcarro" aria-label="select">
                <option selected>Escolha seu carro</option>
                <option value="popular">Carro Popular</option>
                <option value="luxo">Carro de Luxo</option> 
        
            </select>
            </div>

                 <div class="mb-3">
                <label for="dias" class="form-label">Quantos dias pretende alugar</label>
                <input type="text" class="form-control" id="dias" name="txtdias">
                </div>

               <div class="mb-3">
                <label for="campokm" class="form-label">Quilometros percorridos</label>
                <input type="text" class="form-control" id="campokm" name="txtkm">
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
            
            
            </form>

        </div>


    </div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>        
</body>
</html>