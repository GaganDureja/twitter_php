<?php
session_start();
session_destroy();
include('header.php');
?>

            <div class="navbar--nav">
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a href="admin/lock-screen.php" class="btn btn-outline-info" >
                            <i class="far fa-life-ring"></i>
                            <span>Admin</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="admin/login.php" class="btn btn-outline-info" >
                            <i class="far fa-envelope"></i>
                            <span>User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
    <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="https://themeforest.net/user/themelooks/portfolio" target="_blank">
                        <img src="assets/img/themelooks.png" alt="" class="rounded-circle">
                    </a>
                </div>

                <div class="profile--name">
                    <a href="https://themeforest.net/user/themelooks/portfolio" class="btn-link" target="_blank">Blog Post</a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://themeforest.net/user/themelooks/portfolio" class="nav-link" title="Profile" target="_blank">
                                <i class="fab fa-envira fa-rotate-90"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.themelooks.com/" class="nav-link" title="Website" target="_blank">
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.facebook.com/ThemeLooks/" class="nav-link" title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/themelooks" class="nav-link" title="Twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.youtube.com/channel/UCn3HJFPxoEUoUYupJaARxDw" class="nav-link" title="Youtube" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div><h3>Please login</h3></div>
            <!-- Sidebar Navigation End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Main Content Start -->
            <section class="main--content">
                <div class='m-4'  style='text-align:center;'>
                    <h2>Please login to to create your post</h2>
                </div>
            </section>
            <!-- Main Content End -->


<?php 
include('footer.php')
?>