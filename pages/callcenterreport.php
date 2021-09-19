<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/3cxcustom.png">
    <title>
        3CX Customize Call Center Report
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
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Call Center Report</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Call Center Report</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none"></span>
                                <a class="nav-link  " href="../pages/sign-in.php">Sing In</a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Detail</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase  text-xs font-weight-bold mb-0 opacity-10">Date/Time</th>
                                            <th class="text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Service Name</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Cumtomer No.</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Incident No.</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Agent ID</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Question 1</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Question 2</th>
                                            <th class="text-center text-uppercase  text-xs font-weight-bold mb-0 opacity-10 ps-2">Agent Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/01/07 12:20:10</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335620</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889756</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1001</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Panupong</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/01/12 15:40:16</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335791</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889569</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1004</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Wichit</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/01/14 07:48:10</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335620</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889367</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1001</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Panupong</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/01/21 09:43:17</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335764</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889329</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1003</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Sakkarin</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/02/23 20:58:17</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335781</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889369</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1005</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Pawin</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/03/28 21:36:54</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335452</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889457</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1006</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Anuwat</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/04/30 22:10:10</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335389</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889467</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1007</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Nattawut</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0">2021/05/08 23:14:02</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Intellregent</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0203335468</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">INC0889367</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1008</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">1</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">0</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">Wisarut</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
            <div class="col-lg-1"></div>
                <div class="col-lg-10 mb-lg-0 mb-4">
                    <div class="card z-index-2">
                        <div class="card-body p-3">
                            <h6>Garph </h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                            <!--    <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Spotify</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">working</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">60%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Invision</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">done</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">100%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Jira</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">canceled</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">30%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Slack</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">canceled</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">0%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Webdev</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">working</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">80%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Adobe XD</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">done</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">100%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                include 'footer.php'
            ?>
        </div> <br>
    </main>
     <!--   Core JS Files   -->
     <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
        


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }, {
                    label: "Websites",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
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