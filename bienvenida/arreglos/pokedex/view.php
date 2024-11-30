


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>

<div id="contenedor_principal"class= "container">

    <div class=row>
        <section class="col-8" id="tabla">

            <h1>POKEDEX</h1>
                <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Habilidad</th>
            <th scope="col">Fuerza</th>
            <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Picachu</td>
            <td>Impactrueno</td>
            <td>50</td>
            <td>Electrico</td>
            </tr>

        </tbody>
        </table>



        </section>
        <section class="col-4" id="formulario">
        <!-- method: puede ser GET o POST, por defecto es GET  -->
        <!-- action=  el archivo al que se enviara la informacion por defecto, es el mismo archivo del formulario-->
        <!-- -->

    <form method="POST"  action = "controlador.php">
        <h3 style="font-family:verdana">Agrega un pokemon</h3>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required placeholder= "Ingrese el nombre">
        </div>
        

        <div class="mb-3">
            <label for="dueno" class="form-label">dueno</label>
            <input type="text" class="form-control" id="dueno" name="dueno" placeholder= "Ingrese el dueno">
        </div>
        

        <div class="mb-3">
            <label for="habilidad" class="form-label">habilidad</label>
            <input type="text" class="form-control" id="habilidad" name="habilidad" required placeholder= "Ingrese la habilidad"> 
        </div>
        

        <div class="mb-3">
            <label for="region" class="form-label">region</label>
            <input type="text" class="form-control" id="region" name="region" placeholder= "Ingrese la region">
        </div>
        

        <div class="mb-3">
            <label for="prevolucion" class="form-label">prevolucion</label>
            <input type="text" class="form-control" id="prevolucion" name="prevolucion" placeholder= "Ingrese la prevolucion">
        </div>
        

        <div class="mb-3">
            <label for="evolucion" class="form-label">evolucion</label>
            <input type="text" class="form-control" id="evolucion" name="evolucion" placeholder= "Ingrese la evolucion">
        </div>

        <div class="mb-3">
            <label for="fuerza" class="form-label">fuerza</label>
            <input type="number" class="form-control" id="fuerza" name="fuerza" required value="50" min="0" max="100" readonly>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">tipo</label>
            <select class="form-select" name="tipo" id="tipo">
            <option value="1">Normal</option>
            <option value="2">Fuego</option>
            <option value="3">Agua</option>
            <option value="4">Tierra</option>
            <option value="5">Electrico</option>
            <option value="6">Aire</option>
            </select>
        </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <br>
        </form>
        </section>
    </div>

    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/main.js"></script>
</body>
</html>