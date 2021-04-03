<?php
    
    if(isset($_POST['submit'])){
        $to = "gagandureja675@gmail.com"; // this is your Email address
        $first_name = $_POST['name'];    
        $from = $_POST['email']; // this is the sender's Email address
        $message_subject = $_POST['subject'];
        $message_subject2 = $_POST['subject'];
        $message = $first_name .' (' . $from .')'. " wrote the following:" . $message_subject . "\n\n" . $_POST['message'];
        $message2 = "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
   
    
        mail($to,$message_subject,$message);
        mail($from,$message_subject2,$message2);
        
        
       echo"<script>alert('Thanks for the Message! We will Contact you Soon'); window.location=('../index.php');</script>";
        
        
        
    }
?>

























<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>

    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="assets/css/summernote-bs4.min.css">
    <link rel="stylesheet" href="assets/css/summernote-bs4-overrides.css">

</head>
<body>
    
    
    
    
    
    <!-- App Content Start -->
                        <div class="app_content col-lg-9">
                            <!-- Mail Compose Start -->
                            <div class="mail-compose">
                                <h3 class="mail-compose__title">Compose New Message</h3>

                                <form method="post">
                                    
                                    <div class="form-group">
                                        <label for='admin_receiver'>To:</label>
                                        <input name='admin_receiver' type="email" placeholder="To:" class="form-control" value='gagandureja675@gmail.com' disabled>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject:" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" data-trigger="summernote" required></textarea>
                                    </div>

                                    <div class="btn-list pt-3">
                                        
                                        <input type="submit" name='submit' value='Send Message'></i>
                                        
                                        
                                        
                                        <button type="button" onclick="window.location.href='login.php'" class="btn btn-sm btn-rounded btn-default">Discard</button>
                                        
                                    </div>
                                </form>
                            </div>
                            <!-- Mail Compose End -->
                        </div>
                        <!-- App Content End -->
                        
                        
                        
                        
                        
                        
                        
                        

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
    <script src="assets/js/summernote-bs4.min.js"></script>
    <script src="assets/js/summernote-bs4-init.js"></script>

</body>
</html>

                        
                        
    
    
    
    