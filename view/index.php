<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/style.css">
    <!--iconos-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Prueba ISTE 2023</title>

    <!-- vendor css -->
    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <link href="../../public/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="../../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../public/css/bracket.css">

</head>
<body>
    
    <nav class="sidebar "> <!--close-->
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/logo.png">
                </span>

                <div class="text header-text">
                    <span class="name">Josue Ruiz</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                        <i class='bx bx-search icon' ></i>
                        <input type="search" placeholder="Search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Bienvenida</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="#">
                            <i class='bx bx-task icon' ></i>
                            <span class="text nav-text">CRUD</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon' ></i>
                        <i class='bx bx-sun icon sun' ></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">Dashboard</div>
        <!-- ########## START: MAIN PANEL ########## -->
    
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Producto</h4>
        <p class="mg-b-0">Desde esta ventana podra editar los registros de productos</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mantenimiento de Producto</h6>
            <button id="btnnuevo" class="btn btn-outline-primary btn-block mg-b-10">Nuevo Registro</button>

            <div class="table-wrapper">
              <table id="producto_data" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="">Nombre</th>
                    <th class="">Descripcion</th>
                    <th class="">Precio</th>
                    <th class="">Stock</th>
                    <th class="wd-5p"></th>
                    <th class="wd-5p"></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>
      </div>
     <!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    </section>


    <!--SCRIPTS-->
    <?php require_once("modalmantenimiento.php");?>

<script src="../../public/lib/jquery/jquery.js"></script>
<script src="../../public/lib/popper.js/popper.js"></script>
<script src="../../public/lib/bootstrap/bootstrap.js"></script>
<script src="../../public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="../../public/lib/moment/moment.js"></script>
<script src="../../public/lib/jquery-ui/jquery-ui.js"></script>
<script src="../../public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="../../public/lib/peity/jquery.peity.js"></script>
<script src="../../public/js/bracket.js"></script>

<script src="../../public/lib/datatables/jquery.dataTables.js"></script>
<script src="../../public/lib/datatables-responsive/dataTables.responsive.js"></script>

<script src="../../public/datatables/dataTables.buttons.min.js"></script>
<script src="../../public/datatables/buttons.html5.min.js"></script>
<script src="../../public/datatables/buttons.colVis.min.js"></script>
<script src="../../public/datatables/jszip.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" src="mntproducto.js"></script>
<script src="assets/script.js"></script>

</body>
</html>