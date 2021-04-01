<?php
session_start();
$user = $_SESSION['sid'];

                        $selID=mysqli_query($link,"select * from users where email='$user' ");
                        $arrID=mysqli_fetch_assoc($selID);
                        $userName = $arrID['Name'];
                        $userImg = $arrID['img'];


    
?>






        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="" target="_blank">
                        <img src="admin/assets/img/users/<?=$userImg;?>" alt="" class="rounded-circle">
                    </a>
                </div>

                <div class="profile--name">
                    <a href="" class="btn-link" target="_blank"><?=$userName;?></a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="" class="nav-link" title="Profile" target="_blank">
                                <i class="fab fa-envira fa-rotate-90"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" title="Website" target="_blank">
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" title="Twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" title="Youtube" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav" >
                <ul style='list-style-type:none;'>
                    <li><a href="index1.php">Home</a></li>
                    <li><a href="user_profile.php">Profile</a></li>
                    <li><a href="admin/mail.php">Contact Us</a></li>
                    <li><a href="admin/logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- Sidebar Navigation End -->
        </aside>
        <!-- Sidebar End -->