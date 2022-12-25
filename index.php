<?php
session_start();
 
if (!empty($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CV Sri Rejeki - <?=$_GET['page']?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/images/logo-mini.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include 'sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">

        <!--halaman dinamis-->
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          switch ($page) {
            case 'Home':
              include "home.php";
              break;
            case 'Proyek':
              include "proyek/proyek.php";
              break;
            case 'Karyawan':
              include "karyawan/karyawan.php";
              break;
            case 'Konsumen':
              include "konsumen/konsumen.php";
              break;
            case 'Material':
              include "material/material.php";
              break;
            case 'Alat':
              include "alat/alat.php";
              break;
            case 'Laporan':
              include "laporan/laporan.php";
              break;
            default:
              echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              break;
          }
        } else {
          include "home.php";
        }

        ?>
        <!-- end halaman dinamis-->

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="./assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="./assets/vendors/chart.js/Chart.min.js"></script>
  <script src="./assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="./assets/js/off-canvas.js"></script>
  <script src="./assets/js/hoverable-collapse.js"></script>
  <script src="./assets/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./assets/js/dashboard.js"></script>
  <script src="./assets/js/data-table.js"></script>
  <script src="./assets/js/jquery.dataTables.js"></script>
  <script src="./assets/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>