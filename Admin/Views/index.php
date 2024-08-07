<?php

require_once "../../Services/Interfaces/IUserService.php";
require_once "../../Services/UserService.php";
use Services\UserService;

$userService = new UserService(new PDO("mysql:host=localhost;dbname=news_db", "root", ""));
if (!empty($_SESSION["email"])) {
    $currentUser = $userService->GetUserByEmail($_SESSION["email"]);
    if ($currentUser != null) {
        header("location: ../../Views/index.php");
    }
} else {
    header("location: ../../Views/verify.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <link href="../Assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../Assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../Assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/master.css" rel="stylesheet">
    <link href="../Assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <img src="../Assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="#"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false"
                   class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                <ul class="collapse list-unstyled" id="pagesmenu">
                    <li>
                        <a href="404.php"><i class="fas fa-info-circle"></i> 404 Error page</a>
                    </li>
                    <li>
                        <a href="500.php"><i class="fas fa-info-circle"></i> 500 Error page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="users.php"><i class="fas fa-user-friends"></i>Users</a>
            </li>
            <li>
                <a href="news.php"><i class="fas fa-user-friends"></i>News</a>
            </li>
        </ul>
    </nav>
    <div id="body" class="active">
        <!-- navbar navigation component -->
        <?php include ("./Partials/_navbar.php");?>
        <!-- end of navbar navigation -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-header">
                        <div class="page-pretitle">Overview</div>
                        <h2 class="page-title">Dashboard</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="teal fas fa-newspaper"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">New Posts</p>
                                            <span class="number">6,267</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr/>
                                    <div class="stats">
                                        <i class="fas fa-calendar"></i> For this Month
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="olive fas fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">New Users</p>
                                            <span class="number">180,900</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr/>
                                    <div class="stats">
                                        <i class="fas fa-calendar"></i> For this Month
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="violet fas fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">Page views</p>
                                            <span class="number">28,210</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr/>
                                    <div class="stats">
                                        <i class="fas fa-stopwatch"></i> For this Month
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-big text-center">
                                            <i class="orange fas fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="detail">
                                            <p class="detail-subtitle">Support Request</p>
                                            <span class="number">75</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr/>
                                    <div class="stats">
                                        <i class="fas fa-envelope-open-text"></i> For this Month
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="head">
                                            <h5 class="mb-0">Traffic Overview</h5>
                                            <p class="text-muted">Current year website visitor data</p>
                                        </div>
                                        <div class="canvas-wrapper">
                                            <canvas class="chart" id="trafficflow"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="head">
                                            <h5 class="mb-0">Sales Overview</h5>
                                            <p class="text-muted">Current year sales data</p>
                                        </div>
                                        <div class="canvas-wrapper">
                                            <canvas class="chart" id="sales"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="head">
                                    <h5 class="mb-0">Top Visitors by Country</h5>
                                    <p class="text-muted">Current year website visitor data</p>
                                </div>
                                <div class="canvas-wrapper">
                                    <table class="table table-striped">
                                        <thead class="success">
                                        <tr>
                                            <th>Country</th>
                                            <th class="text-end">Unique Visitors</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-us"></i> United States</td>
                                            <td class="text-end">27,340</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-in"></i> India</td>
                                            <td class="text-end">21,280</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                            <td class="text-end">18,210</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-gb"></i> United Kingdom</td>
                                            <td class="text-end">15,176</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-es"></i> Spain</td>
                                            <td class="text-end">14,276</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-de"></i> Germany</td>
                                            <td class="text-end">13,176</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                            <td class="text-end">12,176</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-id"></i> Indonesia</td>
                                            <td class="text-end">11,886</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-ph"></i> Philippines</td>
                                            <td class="text-end">11,509</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-nz"></i> New Zealand</td>
                                            <td class="text-end">1,700</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="head">
                                    <h5 class="mb-0">Most Visited Pages</h5>
                                    <p class="text-muted">Current year website visitor data</p>
                                </div>
                                <div class="canvas-wrapper">
                                    <table class="table table-striped">
                                        <thead class="success">
                                        <tr>
                                            <th>Page Name</th>
                                            <th class="text-end">Visitors</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>/about.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                            <td class="text-end">8,340</td>
                                        </tr>
                                        <tr>
                                            <td>/special-promo.html <a href="#"><i class="fas fa-link blue"></i></a>
                                            </td>
                                            <td class="text-end">7,280</td>
                                        </tr>
                                        <tr>
                                            <td>/products.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                            <td class="text-end">6,210</td>
                                        </tr>
                                        <tr>
                                            <td>/documentation.html <a href="#"><i class="fas fa-link blue"></i></a>
                                            </td>
                                            <td class="text-end">5,176</td>
                                        </tr>
                                        <tr>
                                            <td>/customer-support.html <a href="#"><i class="fas fa-link blue"></i></a>
                                            </td>
                                            <td class="text-end">4,276</td>
                                        </tr>
                                        <tr>
                                            <td>/index.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                            <td class="text-end">3,176</td>
                                        </tr>
                                        <tr>
                                            <td>/products-pricing.html <a href="#"><i class="fas fa-link blue"></i></a>
                                            </td>
                                            <td class="text-end">2,176</td>
                                        </tr>
                                        <tr>
                                            <td>/product-features.html <a href="#"><i class="fas fa-link blue"></i></a>
                                            </td>
                                            <td class="text-end">1,886</td>
                                        </tr>
                                        <tr>
                                            <td>/contact-us.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                            <td class="text-end">1,509</td>
                                        </tr>
                                        <tr>
                                            <td>/terms-and-condition.html <a href="#"><i
                                                            class="fas fa-link blue"></i></a></td>
                                            <td class="text-end">1,100</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="dfd text-center">
                                        <i class="blue large-icon mb-2 fas fa-thumbs-up"></i>
                                        <h4 class="mb-0">+21,900</h4>
                                        <p class="text-muted">FACEBOOK PAGE LIKES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="dfd text-center">
                                        <i class="orange large-icon mb-2 fas fa-reply-all"></i>
                                        <h4 class="mb-0">+22,566</h4>
                                        <p class="text-muted">INSTAGRAM FOLLOWERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="dfd text-center">
                                        <i class="grey large-icon mb-2 fas fa-envelope"></i>
                                        <h4 class="mb-0">+15,566</h4>
                                        <p class="text-muted">E-MAIL SUBSCRIBERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="dfd text-center">
                                        <i class="olive large-icon mb-2 fas fa-dollar-sign"></i>
                                        <h4 class="mb-0">+98,601</h4>
                                        <p class="text-muted">TOTAL SALES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../Assets/vendor/jquery/jquery.min.js"></script>
<script src="../Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../Assets/vendor/chartsjs/Chart.min.js"></script>
<script src="../Assets/js/dashboard-charts.js"></script>
<script src="../Assets/js/script.js"></script>
</body>
</html>