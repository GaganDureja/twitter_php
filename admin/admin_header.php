<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head><meta charset="euc-kr">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - DAdmin</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="assets/css/morris.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/css/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Page Level Stylesheets -->
    
</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->

            <!-- Navbar Search Start -->
            <div class="navbar--search">
                <form action="search-results.html">
                    <input type="search" name="search" class="form-control" placeholder="Search Something..." required>
                    <button class="btn-link"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Search End -->

            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-bell"></i>
                            <span class="badge text-white bg-blue">7</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="mailbox_inbox.html" class="nav-link">
                            <i class="fa fa-envelope"></i>
                            <span class="badge text-white bg-blue">4</span>
                        </a>
                    </li>

                    <!-- Nav Language Start -->
                    <li class="nav-item dropdown nav-language">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/flags/us.png" alt="">
                            <span>English</span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="">
                                    <img src="assets/img/flags/de.png" alt="">
                                    <span>German</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="assets/img/flags/fr.png" alt="">
                                    <span>French</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="assets/img/flags/us.png" alt="">
                                    <span>English</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav Language End -->

                    <!-- Nav User Start -->
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle">
                            <span>Henry Foster</span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="users.php"><i class="fa fa-users"></i>Users</a></li>
                            <li><a href="updates.php"><i class="fa fa-clipboard"></i>Updates</a></li>
                            <!--<li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li class="dropdown-divider"></li>-->
                            <li><a href="lock-screen.php"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                    <!-- Nav User End -->
                </ul>
            </div>
        </header>