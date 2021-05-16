<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Panel Admin SIMASDANG</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?= base_url('asset/backend/assets/images/favicon.png'); ?>"
    />
    <!-- Custom CSS -->
    <!-- <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet" /> -->
    <link
      href="<?= base_url('asset/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css'); ?>"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="<?= base_url('asset/backend/assets/libs/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Custom CSS -->
    <link href="<?= base_url('asset/backend/dist/css/style.min.css'); ?>" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="<?= base_url('asset/backend/assets/images/logo-icon.png'); ?>"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img
                  src="<?= base_url('asset/backend/assets/images/logo-text.png'); ?>"
                  alt="homepage"
                  class="light-logo"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="<?= base_url('asset/backend/assets/images/users/1.jpg'); ?>"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item mt-2" href="javascript:void(0)"
                    ><i class="ti-user me-1 ms-1"></i> My Profile</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="ti-settings me-1 ms-1"></i> Account Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="d-flex justify-content-center p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-danger btn-lg text-white"
                      ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                    >
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="<?= base_url('admin/dashboard'); ?>"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="<?= base_url('admin/produk'); ?>"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bar"></i
                  ><span class="hide-menu">Produk</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="<?= base_url('admin/transaksi'); ?>"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bubble"></i
                  ><span class="hide-menu">Transaksi</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-inside"></i
                  ><span class="hide-menu">Pengeluaran</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="<?= base_url('admin/data_pengguna'); ?>"
                  aria-expanded="false"
                  ><i class="mdi mdi-blur-linear"></i
                  ><span class="hide-menu">Data Akun</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Konten</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?= base_url('admin/konten_produk'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Konten Produk</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('admin/konten_about'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu">Konten Tentang Kami</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('admin/konten_testimonial'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu">Konten Testimonial</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-face"></i
                  ><span class="hide-menu">Laporan</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i
                      ><span class="hide-menu">Pemasukan</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-cool"></i
                      ><span class="hide-menu">Pengeluaran</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid = ISI KONTEN  -->
        <!-- ============================================================== -->
        
        <?php $this->load->view($content); ?>

        <!-- ============================================================== -->
        <!-- End Container fluid = AKHIR ISI KONTEN -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          &copy; SIMASDANG Group <?= date('Y'); ?>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('asset/Backend/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('asset/Backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    
    <script src="<?= base_url('asset/Backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <script src="<?= base_url('asset/Backend/assets/extra-libs/sparkline/sparkline.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('asset/Backend/dist/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('asset/Backend/dist/js/sidebarmenu.js'); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('asset/Backend/dist/js/custom.min.js'); ?>"></script>
    <!--This page JavaScript -->
    <script src="<?= base_url('asset/Backend/assets/extra-libs/DataTables/datatables.min.js'); ?>"></script>
    <script src="<?= base_url('asset/Backend/script.js'); ?>"></script>
    <script>
     
    </script>
  </body>
</html>
