<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="card text-center">
        Bienvenido
    </div>
    <div class="row pt-5 justify-content-center">
        <!--Inicio del formulario-->
        <form action="" id="form" class="form-horizontal">
            <div class="card-header">
                <input type="text" name="tipo_operacion" value="guardar" hidden="true">
                <div>
                    <h5>FORMULARIO PARA EL REGISTRO DE PACIENTES</h5>
                </div>
                <div class="form-group">
                    <select name="tipo_doc" id="tipo_doc" class="form-control">
                        <option value="">Seleccione el tipo de documento de identidad</option>
                        <opcion value="CC">Cedula de ciudadania</opcion>
                        <opcion value="TI">Tarjeta de identidad</opcion>
                        <opcion value="CE">Cedula de extranjeria</opcion>
                        <opcion value="RC">Registro civil</opcion>
                        <opcion value="NIT">Nit</opcion>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="documento" id="documento" name="documento" class="form-control" placeholder="Digite su numero de identidad">
                </div>
                <div class="form-group">
                    <input type="text" name="documento" id="documento" name="documento" class="form-control" placeholder="Digite su numero de identidad">
                </div>
                <div class="form-group">
                    <input type="date" name="fecha" id="fecha" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Digite su nombre">
                </div>
                <div class="form-group">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Digite su apellido">
                </div>
                <div class="form-group">
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="">Seleccione el sexo</option>
                        <opcion value="Masculino">Masculino</opcion>
                        <opcion value="Femenino">Femenino</opcion>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-info btn-block">Aceptar</button>
                </div>
            </div>
                <div>
                    <a class="nav-link" href="index.php"><--Index</a>
                </div>
        </form>
    </div>
</body>
</html>