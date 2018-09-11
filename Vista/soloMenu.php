<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../Vista/css/csssoloMenu.css">

        <title>Factur - Solo Menu Lateral</title>
    </head>

    <body>
    
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
                        <!-- MENU NOMINA -->
                        <li href="#submenu1" data-toggle="collapse" aria-expanded="false">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fas fa-dollar-sign fa-fw mr-3"></span>
                                <span class="menu-collapsed">Nominas</span>
                                <span class="fas fa-angle-down ml-auto"></span>
                            </div>
                        </li>
                    <!-- FIN DEL MENU DE NOMINA-->

                        <!-- CONTENIDO DEL SUB-MENU DE NOMINA -->
                        <div id='submenu1' class="collapse sidebar-submenu">
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Nomina1</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Nomina2</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Nomina3</span>
                            </a>
                        </div>
                        <!-- FIN DEL CONTENIDO DEL SUB-MENU DE NOMINA -->
                        <br>
                        <li><i class="fa fa-window-close"></i><a href="#">Cerrar Sesion</a></li>
                        <br>
                    </ul>
                </aside>
            </div>
    
        </header>

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

            <script>
                // Hide submenus
                $('#body-row .collapse').collapse('hide');

                // Collapse/Expand icon
                $('#collapse-icon').addClass('fa-angle-double-left');

                // Collapse click
                $('[data-toggle=sidebar-colapse]').click(function () {
                    SidebarCollapse();
                });

                function SidebarCollapse() {
                    $('.menu-collapsed').toggleClass('d-none');
                    $('.sidebar-submenu').toggleClass('d-none');
                    $('.submenu-icon').toggleClass('d-none');
                    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

                    // Treating d-flex/d-none on separators with title
                    var SeparatorTitle = $('.sidebar-separator-title');
                    if (SeparatorTitle.hasClass('d-flex')) {
                        SeparatorTitle.removeClass('d-flex');
                    } else {
                        SeparatorTitle.addClass('d-flex');
                    }

                    // Collapse/Expand icon
                    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
                }
            </script>

    </body>
</html>