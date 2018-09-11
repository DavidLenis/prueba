<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="../Vista/img/Icono - Barnav.png" />
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/cssGRol.css">
        
        <title>Factur - Gestionar Roles</title>

    </head>

    <body class="hm-gradient">

        <header>
        
        <div class="wrapper">
                <aside class="main_sidebar">
                    <ul>
                        <br>
                        <li><i class="fa fa-calculator"></i><a href="../Vista/gestionarFacturas.php">Gestionar Facturas</a></li>
                        <br>
                        <li><i class="fa fa-address-book-o"></i><a href="../Vista/gestionarPersona.php">Gestionar Persona</a></li>
                        <br>
                        <li class="active"><i class="fa fa-truck"></i><a href="../Vista/gestionarProductos.php">Gestionar Productos</a></li>
                        <br>
                        <li><i class="fa fa-line-chart"></i><a href="../Vista/gestionarGastos.php">Gestionar Gastos</a></li>
                        <br>
                        <li><i class="fa fa-calendar"></i><a href="../Vista/gestionarHorarios.php">Gestionar Empleados</a></li>
                        <br>
                        <li><i class="fa fa-puzzle-piece"></i><a href="../Vista/gestionarRol.php">Gestionar Rol</a></li>
                        <br>
                        <li><i class="fa fa-money"></i><a href="#">Nominas</a></li>
                        <br>
                        <li><i class="fa fa-window-close"></i><a href="#">Cerrar Sesion</a></li>
                        <br>
                    </ul>
                </aside>
            </div>

        </header>

        <section>
        
            <form method="POST" action="">

                <div class="container mt-4">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="pt-3 pb-2 font-up deep-purple-text"><strong>Ingrese los campos</strong></h5>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="md-form">
                                                <i class="fa fa-barcode prefix"></i>
                                                <input type="text" id="form1" class="form-control" required autofocus>
                                                <label for="form1" class="">Codigo del Rol</label>
                                                <small id="Help1" class="form-text text-muted">
                                                Ingrese el Codigo del Rol.
                                                </small>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="md-form">
                                                <i class="fa fa-tag prefix"></i>
                                                <input type="text" id="inputPlaceholderEx" class="form-control" required autofocus>
                                                <label for="inputPlaceholderEx">Nombre del Rol</label>
                                                <small id="Help2" class="form-text text-muted">
                                                    Ingrese el Nombre del Rol.
                                                </small>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="md-form">
                                                <i class="fa fa-dollar prefix"></i>
                                                <input type="text" id="inputPlaceholderEx" class="form-control" required autofocus>
                                                <label for="inputPlaceholderEx">Valor por Hora</label>
                                                <small id="Help3" class="form-text text-muted">
                                                    Ingrese el Valor por Hora del Rol.
                                                </small>
                                            </div>

                                        </div>

                                        <div class="col-md-8">
                                    
                                            <div class="md-form">
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                                <button type="button" class="btn btn-primary">Buscar</button>
                                                <button type="button" class="btn btn-primary">Actualizar</button>
                                            </div>
                                        
                                        </div>


                                        <div class="table-responsive">
                                        
                                            <table class="table" id="">

                                                <thead>
                                                    <tr>
                                                        <th class="th-sm">Codigo del Rol</th>
                                                        <th class="th-sm">Nombre del Rol</th>
                                                        <th class="th-sm">Valor por Hora</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mesero</td>
                                                        <td>20000</td>
                                                    </tr>
                                            </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </section>

        <footer>
        
        </footer>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

    </body>
</html>