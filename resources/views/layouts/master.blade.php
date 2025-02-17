<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PerpusApp - Dashboard</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('../assets/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('../assets/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">PerpusApp</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="/" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                       
                        //pengecekan role admin librarian
                            <li class="nav-item menu">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Master Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Books</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Books Category</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="nav-icon fas fa-cube"></i>
                                    <p>Activity</p>
                                </a>
                            </li>
                        //akhir

                        //pengecekan role admin
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>User Account</p>
                                </a>
                            </li>
                        //akhir

                        //pengecekan role borrower
                            <li class="nav-item">
                                <a href="" class="nav-link ">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>Books</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ">
                                    <i class="nav-icon fas fa-bookmark"></i>
                                    <p>Book Borrowed</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ">
                                    <i class="nav-icon fas fa-star"></i>
                                    <p>My Collection</p>
                                </a>
                            </li>
                        //akhir

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Log Out</p>
                            </a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">

            kontent


        </div>


        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="{{ asset('../assets/jquery.min.js') }}"></script>
    <script src="{{ asset('../assets/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('../assets/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../assets/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('../assets/adminlte.js') }}"></script>
    <script src="dist/js/demo.js"></script>
    <script src="{{ asset('../assets/dashboard.js') }}"></script>
</body>

</html>
