<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Crud Yurany Zul</title>
</head>
<body>
    <header></header>
    <main class="mainCrud">
        <div class="div1Crud">
            <div class="div2Crud">
                <center><h1 class="tituloCrud">Regístrate en <br> nuestra web</h1></center>
                <form action="agregarDatos.php" method="POST">
                    <div class="form-group col-xl-auto">
                        <label class="subCrud">Crear registro: </label><br>
                        <label for="name">Nombre Usuario</label>
                        <input type="text" class="form-control" name="username" id="name">
                    </div>
                    <div class="form-group col-xl-auto">
                        <label for="mail">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" id="mail">
                    </div>
                    <div class="form-group col-xl-auto">
                        <label for="clave">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="clave">
                    </div>
                    <div class="form-group col-xl-auto ">
                        <input type="checkbox" id="check">
                        <label class="form-check-label" for="check">
                            Check me out
                        </label>
                    </div>
                    <div class="form-group col-xl-auto">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" value="Agregar" name="agregar" >Agregar</button>
                    </div>
                </form>
                <hr>
                <form action="buscarDatos.php" method="POST">
                        
                    <div class="form-group col-xl-auto">
                        <label class="subCrud">Consultar registro: </label><br>
                        <label>Buscar Usuario</label>
                        <input type="text" class="form-control" name="search" id="search">
                    </div>
                    <div class="form-group col-xl-auto">
                        <button type="submit" class="btn btn-success btn-lg btn-block" value="Buscar" name="buscar">Buscar</button>
                    </div>
                </form>
                <hr>
                <form action="eliminarDatos.php" method="POST">
                        
                    <div class="form-group col-xl-auto">
                        <label class="subCrud">Eliminar registro: </label><br>
                        <label>Eliminar Usuario</label>
                        <input type="text" class="form-control" name="actualizar" id="actualizar">
                    </div>
                    <div class="form-group col-xl-auto">
                        <button type="submit" class="btn btn-danger btn-block" id="btnEliminar" name="btnEliminar">Eliminar</button>
                    </div>
                </form>
            </div>
            <div>
                <h1>Resultados:</h1>
            </div>
        </div>
        
    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

