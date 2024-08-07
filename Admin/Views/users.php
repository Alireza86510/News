<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Users</title>
    <link href="../Assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../Assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../Assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="../Assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="../Assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="index.php"><i class="fas fa-home"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i>Pages</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="404.php"><i class="fas fa-info-circle"></i>404 Error page</a>
                        </li>
                        <li>
                            <a href="500.php"><i class="fas fa-info-circle"></i>500 Error page</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <?php include ("./Partials/_navbar.php");?>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Users
                            <a href="AddUser.php" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-user-shield"></i>  Add New User</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Philip Chaney</td>
                                        <td>philip.chaney@gmail.com</td>
                                        <td>Manager</td>
                                        <td>Admin</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Doris Greene</td>
                                        <td>ms.greene@outlook.com</td>
                                        <td>Writer</td>
                                        <td>Staff</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mason Porter</td>
                                        <td>mason_porter@gmail.com</td>
                                        <td>Contributor</td>
                                        <td>Staff</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Minerva Hooper</td>
                                        <td>minerva.hooper@gmail.com</td>
                                        <td>Administrator</td>
                                        <td>Admin</td>
                                        <td>Disabled</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jessie Williams</td>
                                        <td>jessie@gmail.com</td>
                                        <td>Administrator</td>
                                        <td>Admin</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Peter Benhams</td>
                                        <td>pette@gmail.com</td>
                                        <td>Editor</td>
                                        <td>Staff</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jose Rodriguez</td>
                                        <td>jose.rodz@gmail.com</td>
                                        <td>Author</td>
                                        <td>Staff</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../Assets/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/vendor/datatables/datatables.min.js"></script>
    <script src="../Assets/js/initiate-datatables.js"></script>
    <script src="../Assets/js/script.js"></script>
</body>

</html>