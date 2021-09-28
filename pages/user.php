
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/3cxcustom.png">
  <title>
    3CX Customize Profile
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <?php include 'menu.php';?>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
       <?php 
        include_once('navbar.php');
       ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">

                <!-- Add user -->
                  
                <a href="form_adduser.php"><button class="btn btn-primary" type="submit">Add User</button></a>

                 <!--End add user -->

                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Detail</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center  text-xs font-weight-bold mb-0 opacity-10">#</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">ชื่อ</th>
                                            <th class="text-center  text-xs font-weight-bold mb-0 opacity-10 ps-2">นามสกุล</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Username</th>                                            
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Status</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td align="center">1</td>
                                                <td align="center">Panupong</td>
                                                <td align="center">Pumpothong</td>
                                                <td align="center">Panupong</td>
                                                <td align="center">admin</td>
                                                <td align="center"><a href="form_edituser.php" class="bi bi-pencil-square"></a> | <i class="bi bi-archive-fill"></i></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php 
              include 'footer.php';
            ?>
        </div> <br>
    </main>
     <!--   Core JS Files   -->
     <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>
</html>