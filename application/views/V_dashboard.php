<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Virtual Rimac Admin</title>

  <!-- Custom fonts for this template-->
  <link href="public/utils/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="public/utils/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" style="background-color:#989494; !important">
                  <!-- Sidebar -->
                      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"  id="accordionSidebar" style="background-color:#989494; !important">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" style="background-color:#CF312C; !important">
                      <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                      </div>
                      <div class="sidebar-brand-text mx-3">VRimac<sup> Admin</sup></div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0" >

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active"   >
                      <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Bienvenido</span></a>
                    </li>
                    <!-- Heading -->
                    <div class="sidebar-heading" style="background-color:#989494; !important">
                      Modulos
                    </div>
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item" style="background-color:#989494; !important">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Lugares Turisticos</span>
                      </a>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Acciones:</h6>
                          <a class="collapse-item" href="buttons.html">Administrar</a>
                          <a class="collapse-item" href="cards.html">Crear</a>
                        </div>
                      </div>
                    </li>
                    <!-- Nav Item - Utilities Collapse Menu -->
                    <li class="nav-item" style="background-color:#989494; !important">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Restaurantes:</span>
                      </a>
                      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Acciones:</h6>
                          <a class="collapse-item" href="utilities-color.html">Administrar</a>
                          <a class="collapse-item" href="utilities-border.html">Registrar</a>
                          
                        </div>
                      </div>
                    </li>
                  <!-- Nav Item - Utilities Collapse Menu -->
                    <li class="nav-item" style="background-color:#989494; !important">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Rutal Virtuales</span>
                      </a>
                      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Acciones:</h6>
                          <a class="collapse-item" href="login.html">Administrar</a>
                          <a class="collapse-item" href="register.html">Registrar</a>
                        </div>
                      </div>
                    </li>
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline" style="background-color:#989494; !important">
                      <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                  </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    

      <!-- Main Content -->
      <div id="content">
               
              

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bienvenido al panel administrativo de Virtual Rimac</h1>
          
          </div>
          <!-- Content Row -->

          <div class="row">

           
          </div>

          <div class="container" style="padding: 20px 0 20px 0">
                    <h4 style="margin-bottom: 20px">Registrar Lugar Turistico</h4>
                   

                    <div class="card" style="margin-top: 20px; background: #f1f1f1">
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre del Lugar:</label>
                                        <input class="form-control" id="nombre" placeholder="Documento">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción:</label>
                                        <br>
                                        <textarea class="form-control" rows="3" id="descripcion"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        Archivo:
                                        <input type="file" name="fileImagen" class="custom-file" accept="application/pdf">
                                        </tr>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Virtual Rimac 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>

    
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="public/utils/vendor/jquery/jquery.min.js"></script>
  <script src="public/utils/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="public/utils/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="public/utils/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="public/utils/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="public/utils/js/demo/chart-area-demo.js"></script>
  <script src="public/utils/js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo base_url(); ?>public/utils/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>public/normas/js/normas.js"></script>


</body>

</html>
