<?php error_reporting(E_ALL ^(E_NOTICE | E_WARNING)); ?>

<?php
    include 'koneksi.php';
    $query = $db->prepare("SELECT * FROM barang");
    $query->execute();
    $data = $query->fetchAll();
?>

<!doctype html>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>DataTables | Remark Admin Template</title>
    
    <link rel="apple-touch-icon" href="style/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="style/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="style/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="style/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="style/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="style/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="style/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="style/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="style/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="style/global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
        <link rel="stylesheet" href="style/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
        <link rel="stylesheet" href="style/assets/examples/css/tables/datatable.css">
    
    
    <!-- Fonts -->
        <link rel="stylesheet" href="style/global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="style/global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="style/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="style/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="style/global/vendor/media-match/media.match.min.js"></script>
    <script src="style/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="style/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition site-navbar-small ">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
      role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="../index.html">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="style/assets/images/logo.png"
            title="Remark">
          <img class="navbar-brand-logo navbar-brand-logo-special" src="style/assets/images/logo-colored.png"
            title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Remark</span>
        </a>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
            <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>

          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
   
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="style/global/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item" id="toggleChat">
              <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
                data-url="../site-sidebar.tpl">
                <i class="icon wb-chat" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    
    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-item has-sub">
                <a href="?page=barang" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Barang</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
<!--               <li class="site-menu-item has-sub">
                <a href="?page=category" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                  <span class="site-menu-title">Category</span>
                  <span class="site-menu-arrow"></span>
                </a>

              </li>

              <li class="site-menu-item has-sub">
                <a href="?page=postingan" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                  <span class="site-menu-title">Postingan</span>
                  <span class="site-menu-arrow"></span>
                </a>

              </li> -->
 <!--              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                  <span class="site-menu-title">Compents</span>
                  <span class="site-menu-arrow"></span>
                </a>

              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                  <span class="site-menu-title">Widgets</span>
                  <span class="site-menu-arrow"></span>
                </a>

              </li>
              <li class="site-menu-category">Apps</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                  <span class="site-menu-title">Apps</span>
                  <span class="site-menu-arrow"></span>
                </a>

              </li> -->
            </ul>      
          </div>
        </div>

      </div>
    </div>

    <!-- Page -->
    <?php 
      $page = $_GET['page'];
      $aksi = $_GET['aksi'];

      if ($page == "barang") {
          if ($aksi == "") {
            include "page/barang/barang.php";
          }elseif ($aksi == "tambah") {
            include "page/barang/tambah.php";
          }elseif ($aksi == "ubah") {
            include "page/barang/ubah.php";
          }elseif ($aksi == "delete" ) {
            include "page/barang/delete.php";
          }
       } 
    ?>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="style/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="style/global/vendor/jquery/jquery.js"></script>
    <script src="style/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="style/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="style/global/vendor/animsition/animsition.js"></script>
    <script src="style/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="style/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="style/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    
    <!-- Plugins -->
    <script src="style/global/vendor/switchery/switchery.js"></script>
    <script src="style/global/vendor/intro-js/intro.js"></script>
    <script src="style/global/vendor/screenfull/screenfull.js"></script>
    <script src="style/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="style/global/vendor/datatables.net/jquery.dataTables.js"></script>
        <script src="style/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="style/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="style/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
        <script src="style/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
        <script src="style/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
        <script src="style/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
        <script src="style/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
        <script src="style/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
        <script src="style/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
        <script src="style/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
        <script src="style/global/vendor/datatables.net-buttons/buttons.print.js"></script>
        <script src="style/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
        <script src="style/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
        <script src="style/global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="style/global/vendor/bootbox/bootbox.js"></script>
    
    <!-- Scripts -->
    <script src="style/global/js/Component.js"></script>
    <script src="style/global/js/Plugin.js"></script>
    <script src="style/global/js/Base.js"></script>
    <script src="style/global/js/Config.js"></script>
    
    <script src="style/assets/js/Section/Menubar.js"></script>
    <script src="style/assets/js/Section/Sidebar.js"></script>
    <script src="style/assets/js/Section/PageAside.js"></script>
    <script src="style/assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="style/global/js/config/colors.js"></script>
    <script src="style/assets/js/config/tour.js"></script>
    <script>Config.set('assets', 'style/assets');</script>
    
    <!-- Page -->
    <script src="style/assets/js/Site.js"></script>
    <script src="style/global/js/Plugin/asscrollable.js"></script>
    <script src="style/global/js/Plugin/slidepanel.js"></script>
    <script src="style/global/js/Plugin/switchery.js"></script>
        <script src="style/global/js/Plugin/datatables.js"></script>
    
        <script src="style/assets/examples/js/tables/datatable.js"></script>
    
  </body>
</html>
