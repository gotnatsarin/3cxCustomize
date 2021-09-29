<?php 
include('connect.php');
$id = $_GET['id'];
$result = pg_query($conn, "SELECT * FROM public.access_user 
WHERE user_id = $id");

$row = pg_fetch_assoc($result);

echo $row['firstname'];


var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/3cxcustom.png">
  <title>
    3CX Customize Edit User
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
        <?php include 'component/menu.php';?>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
       <?php 
        include_once('component/navbar.php');
       ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4"></div>
            <div class="row">
              <div class="col-3"></div>
                <div class="col-6 center">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h5>Edit Users</h5>
                        </div>
                          <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="card-body">
                                  <form action="form">
                                    <label>Firstname</label>
                                    <div class="mb-3">
                                      <input type="text" class="form-control" placeholder="Firstname" value="<?php echo $row['firstname'] ?>" name="firstname" aria-label="name" aria-describedby="email-addon">
                                    </div>
                                    <label>Lastname</label>
                                    <div class="mb-3">
                                      <input type="text" class="form-control" placeholder="Lastname" aria-label="text" aria-describedby="password-addon">
                                    </div>
                                    <label>Username</label>
                                    <div class="mb-3">
                                      <input type="Username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="email-addon">
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                    </div>
                                    <label>Email</label>
                                    <div class="mb-3">
                                      <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="email-addon">
                                    </div>
                                    <label>Status</label>
                                    <div class="mb-3">
                                      <select class="form-select" aria-label="Default select example" id="cars">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                      </select>
                                    </div>
                                    <div class="d-grid gap-6 d-md-block">
                                        <a href="../pages/user.php"><button class="btn btn-danger btn-lg" type="button">Back</button></a>
                                        <button class="btn btn-primary btn-lg me-md-2" type="button">Submit</button>
                                      </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            
            <?php 
            pg_free_result($result);
            pg_close($conn);
              include 'component/footer.php';
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