<?php
session_start();
$user=$_SESSION['sid'];
include("database/database.php");
if($user=="")
{
  header("location:login.php");
}

    
    $sel=mysqli_query($link,"select * from users where email='$admin' ");
    
    
    $arr = mysqli_fetch_assoc($sel);
    $uname = $arr['Name'];
    
    

?>





















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
                            <span><? echo $uname ?></span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="user_profile.php"><i class="far fa-user"></i>Profile</a></li>
                            <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                            <li><a href="edit_profile.php"><i class="fa fa-cog"></i>Edit Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="lock-screen.php"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                    <!-- Nav User End -->
                </ul>
            </div>
        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="profile.php">
                        <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle">
                    </a>
                </div>

                <div class="profile--name">
                    <a href="profile.php" class="btn-link">Henry Foster</a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link" title="User Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lock-screen.php" class="nav-link" title="Lock Screen">
                                <i class="fa fa-lock"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailbox_inbox.html" class="nav-link" title="Messages">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="Logout">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul>
                                    <li><a href="ecommerce.html">Dashboard</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="products-edit.html">Edit Products</a></li>
                                    <li><a href="orders.html">Orders</a></li>
                                    <li><a href="order-view.html">Order View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Layouts</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i>
                                    <span>Page Layouts</span>
                                </a>

                                <ul>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="page-light.html">Page Light</a></li>
                                    <li><a href="sidebar-light.html">Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th-list"></i>
                                    <span>Footers</span>
                                </a>

                                <ul>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                    <li><a href="footer-transparent.html">Footer Transparent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Components</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-newspaper"></i>
                                    <span>UI Elements</span>
                                </a>

                                <ul>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="ui-slider.html">UI Slider</a></li>
                                    <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-wpforms"></i>
                                    <span>Form</span>
                                </a>

                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="dropzone.html">Dropzone</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Apps and Charts</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-envelope"></i>
                                    <span>Mailbox</span>
                                </a>

                                <ul>
                                    <li><a href="mailbox_inbox.html">Inbox</a></li>
                                    <li><a href="mailbox_compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <i class="far fa-comments"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="contacts.html">
                                    <i class="far fa-address-book"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="notes.html">
                                    <i class="far fa-sticky-note"></i>
                                    <span>Notes</span>
                                </a>
                            </li>
                            <li>
                                <a href="todo-list.html">
                                    <i class="fa fa-tasks"></i>
                                    <span>Todo List</span>
                                </a>
                            </li>
                            <li>
                                <a href="search-results.html">
                                    <i class="fa fa-search"></i>
                                    <span>Search Results</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Extra</a>

                        <ul>
                            <li class="active open">
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span>Extra Pages</span>
                                </a>

                                <ul>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li class="active"><a href="profile.html">Profile</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="lock-screen.php">Lock Screen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Navigation End -->

            <!-- Sidebar Widgets Start -->
            <div class="sidebar--widgets">
                <div class="widget">
                    <h3 class="h6 widget--title">Information Summary</h3>

                    <!-- Summary Widget Start -->
                    <div class="summary--widget">
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Daily Traffic</p>
                            <p class="summary--stats">307.512</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">Average Usage</p>
                            <p class="summary--stats">2,371,527</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Disk Usage</p>
                            <p class="summary--stats">37.5%</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">CPU Usage</p>
                            <p class="summary--stats">37.05-32</p>
                        </div>
                        
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Memory Usage</p>
                            <p class="summary--stats">37.05%</p>
                        </div>
                    </div>
                    <!-- Summary Widget End -->
                </div>
            </div>
            <!-- Sidebar Widgets End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">User Profile</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Extra Pages</span></li>
                                <li class="breadcrumb-item active"><span>Profile</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <!-- Summary Widget Start -->
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>

                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                            <!-- Summary Widget End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="row gutter-20">
                    <div class="col-lg-8">
                        <!-- Panel Start -->
                        <div class="panel profile-cover">
                            <div class="profile-cover__img">
                                <img src="assets/img/avatars/01_150x150.png" alt="">
                                <h3 class="h3">Henry Foster</h3>
                            </div>

                            <div class="profile-cover__action" data-bg-img="assets/img/covers/01_800x150.jpg" data-overlay="0.3">
                                <button class="btn btn-rounded btn-info">
                                    <i class="fa fa-plus"></i>
                                    <span>Follow</span>
                                </button>

                                <button class="btn btn-rounded btn-info">
                                    <i class="fa fa-comment"></i>
                                    <span>Message</span>
                                </button>
                            </div>

                            <div class="profile-cover__info">
                                <ul class="nav">
                                    <li><strong>26</strong>Projects</li>
                                    <li><strong>33</strong>Followers</li>
                                    <li><strong>136</strong>Following</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Panel End -->

                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Activity Feed</h3>
                            </div>

                            <div class="panel-content panel-activity">
                                <form action="#" class="panel-activity__status">
                                    <textarea name="user_activity" placeholder="Share what you've been up to..." class="form-control"></textarea>

                                    <div class="actions">
                                        <div class="btn-group">
                                            <button type="button" class="btn-link" title="Post an Image" data-toggle="tooltip">
                                                <i class="far fa-image"></i>
                                            </button>

                                            <button type="button" class="btn-link" title="Post an Video" data-toggle="tooltip">
                                                <i class="fas fa-video"></i>
                                            </button>

                                            <button type="button" class="btn-link" title="Post an Idea" data-toggle="tooltip">
                                                <i class="far fa-lightbulb"></i>
                                            </button>

                                            <button type="button" class="btn-link" title="Post an Question" data-toggle="tooltip">
                                                <i class="fas fa-question-circle"></i>
                                            </button>
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-rounded btn-info">Post</button>
                                    </div>
                                </form>

                                <?php
                        $selID=mysqli_query($link,"select * from users where email='$user' ");
                        $arrID=mysqli_fetch_assoc($selID);
                        $userID = $arrID['id'];
                        
                       
                        
                        
                        $sql = "SELECT * FROM LatestUpdate WHERE user_id='$userID' ORDER BY id DESC"; 
                        $result = $link->query($sql);
                        $res=mysqli_fetch_array($sth);
                        
                        
                        if($result-> num_rows > 0){
                            while($rows=$result->fetch_assoc()) {
                                
                            ?>
                            
                            
                            <ul class="panel-activity__list">
                                    <li>
                                        <i class="activity__list__icon fas fa-question-circle"></i>

                                        <div class="activity__list__header">
                                            
                                            <a href="#"><?=$arrID['Name'];?></a> <?=$user;?>
                                        </div>

                                        <div class="activity__list__body entry-content">
                                            <p><strong><?=$rows['body'];?></strong></p>
                                        </div>

                                        <div class="activity__list__footer">
                                            <a href="#"><i class="far fa-thumbs-up"></i>123</a>
                                            <a href="#"><i class="far fa-comments"></i>23</a>
                                            <span><i class="far fa-clock"></i><?=date("h:m,d-m-Y",$rows['tym'])?></span>
                                        </div>
                                    </li>

                                    
                                </ul>
                            
                            
                            
                            <?php
                                
                                
                                
                            }
                        }
                        else {
                            echo 'You have never posted anything, POST NOW!';
                        }
                        $link->close();
                      ?>
                            </div>
                        </div>
                        <!-- Panel End -->
                    </div>

                    <div class="col-lg-4">
                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">About Me</h3>
                            </div>

                            <div class="panel-content panel-about">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem odit esse quae, et praesentium eligendi, corporis minima repudiandae similique voluptatum dolorem temporibus doloremque.</p>

                                <table>
                                    <tr>
                                        <th><i class="fas fa-briefcase"></i>Occupation</th>
                                        <td>UI/UX Designer</td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-birthday-cake"></i>Date of Birth</th>
                                        <td>13 June 1983</td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-map-marker-alt"></i>Locatoin</th>
                                        <td>123 Lorem Steet, NY, United States.</td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-mobile-alt"></i>Mobile No.</th>
                                        <td><a href="tel:7328397510" class="btn-link">732-839-7510</a></td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-globe"></i>Website</th>
                                        <td><a href="mailto:example.com" class="btn-link">example.com</a></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="panel-social">
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Panel End -->

                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="weather--panel text-white bg-blue">
                                <div class="weather--title">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Dhaka, Bangladesh</span>
                                </div>

                                <div class="weather--info">
                                    <i class="wi wi-rain-wind"></i>
                                    <span>33째C</span>
                                </div>
                            </div>
                        </div>
                        <!-- Panel End -->

                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="weather--panel text-white bg-orange">
                                <div class="weather--title">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Melbourne, Autoria</span>
                                </div>

                                <div class="weather--info">
                                    <i class="wi wi-hot"></i>
                                    <span>35째C</span>
                                </div>
                            </div>
                        </div>
                        <!-- Panel End -->

                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">To-Do List</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="todo--panel">
                                <form action="#">
                                    <ul class="list-group" data-trigger="scrollbar">
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="checkbox" value="1" class="todo--input" checked>
                                                <span class="todo--text">Schedule Meeting</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="checkbox" value="2" class="todo--input">
                                                <span class="todo--text">Call Clients To Follow-Up</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="checkbox" value="3" class="todo--input" checked>
                                                <span class="todo--text">Book Flight For Holiday</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="checkbox" value="4" class="todo--input">
                                                <span class="todo--text">Forward Important Tasks</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="checkbox" value="6" class="todo--input">
                                                <span class="todo--text">Important Tasks</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                    </ul>

                                    <div class="input-group">
                                        <input type="text" name="todo" placeholder="Add New Task" class="form-control" autocomplete="off" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn-link">+</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Panel End -->

                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Feeds &amp; Activities</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="feeds-panel">
                                <ul class="nav">
                                    <li>
                                        <span class="time">2 mins</span>
                                        <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                        <span class="text">New Order Received</span>
                                    </li>
                                    <li>
                                        <span class="time">10 mins</span>
                                        <i class="fa fa-user text-white bg-orange"></i>
                                        <span class="text">Updated Profile Picture</span>
                                    </li>
                                    <li>
                                        <span class="time">20 mins</span>
                                        <i class="fa fa-comment text-white bg-red"></i>
                                        <span class="text"><a href="#">John Doe</a> Commented on <a href="#">News #123</a></span>
                                    </li>
                                    <li>
                                        <span class="time">21 mins</span>
                                        <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                        <span class="text">New Order Received</span>
                                    </li>
                                    <li>
                                        <span class="time">25 mins</span>
                                        <i class="fa fa-user text-white bg-green"></i>
                                        <span class="text">New User Registered</span>
                                    </li>
                                    <li>
                                        <span class="time">25 mins</span>
                                        <i class="fa fa-times text-white bg-dark"></i>
                                        <span class="text">Order <a href="#">#24DP01</a> Rejected</span>
                                    </li>
                                    <li>
                                        <span class="time">2 hours</span>
                                        <i class="fa fa-comment text-white bg-red"></i>
                                        <span class="text"><a href="#">John Doe</a> Commented on <a href="#">News #123</a></span>
                                    </li>
                                    <li>
                                        <span class="time">3 hours</span>
                                        <i class="fa fa-user text-white bg-orange"></i>
                                        <span class="text">You Uploaded A Image</span>
                                    </li>
                                    <li>
                                        <span class="time">4 hours</span>
                                        <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                        <span class="text">New Order Received</span>
                                    </li>
                                    <li>
                                        <span class="time">8 hours</span>
                                        <i class="fa fa-user text-white bg-green"></i>
                                        <span class="text">New User Registered</span>
                                    </li>
                                    <li>
                                        <span class="time">22 hours</span>
                                        <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                        <span class="text">New Order Received</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Panel End -->
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery-jvectormap.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="assets/js/horizontal-timeline.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Page Level Scripts -->

</body>
</html>
