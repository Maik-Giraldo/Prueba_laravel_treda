<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas</title>
    @include('bootstrap')
</head>
<body>
    @include('navbar')
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <label>Nombre</label>
                    <input type="text" placeholder="Nombre" id="nombre" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Fecha</label>
                    <input type="date" id="fecha" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <button class="d-block mx-auto btn btn-success" id="btn-continuar">Continuar</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha apertura</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id="table-store">

                </tbody>
            </table>
        </div>
    </div>
    <script src="js/tiendas.js"></script>
</body>
</html>