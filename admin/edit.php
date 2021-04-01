<?php
session_start();
$admin=$_SESSION['sid'];
include("database/database.php");
if($admin=="")
{
  header("location:lock-screen.php");
}
?>


<?php
include('admin_header.php');
?>

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
                            <li class="active">
                                <a href="users.php">
                                    <i class="fa fa-users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="updates.php">
                                    <i class="fa fa-users"></i>
                                    <span>Updates</span>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                </ul>
            </div>
        
            
        </aside>
        <main class="main--container">
            <section class="main--content">
                <!--<div class="row gutter-20">
                    
                    </div>-->
                    
                    
<?php
    include('database/database.php');
    extract($_POST);
    $edid = $_GET['editid'];
    $get_prev="select * from users where id='$edid'";
    $run_prev=mysqli_query($link, $get_prev);
    $row_prev=mysqli_fetch_array($run_prev);
    $Pname=$row_prev['Name'];
    $Pmail=$row_prev['email'];
    $Pactive=$row_prev['active'];
    
    
    if(isset($sub)) {
        if(mysqli_query($link,"UPDATE `users` SET `Name` = '$name', `email` = '$mail' , `active` = '$actv'  WHERE `id` = '$edid'")){
            echo "<script> alert ('User updated Successfully')</script>";
        }
        else{
            echo "<script> alert ('Failed')</script>";
        }
    }
        
    
    
    
?>
                    
            <div>
                <section class="col-md-6 connectedSortable">
                    <form  method='post'>
                        
                      <div class="form-group">
                        <label for="fname">Name</label>
                        <input type="text" id='fname' class="form-control" name='name' value='<?php echo $Pname ?>' placeholder="Name">
                      </div>
                      
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id='email' class="form-control" name='mail' value='<?php echo $Pmail ?>' placeholder="Email">
                      </div>
                      
                    
                      
                      <!--
                      <div class="form-group">
                          <label for="activ">Status</label>
                          <select name="actv" id="activ" value='<?php $Pactive?>'>
                              <option value="1">Activate</option>
                              <option value="0">Deactivate</option>
                          </select>
                        
                      </div>
                      </br>-->
                      
                      <div class="form-group">
                            <label class="form-radio">
                                <input type="radio" name="actv" value="1" class="form-radio-input"  <?php if($Pactive=="1"){echo 'checked';}?>>
                                <span class="form-radio-label">Activate</span>
                            </label>

                            <label class="form-radio">
                                <input type="radio" name="actv" value="0" class="form-radio-input" <?php if($Pactive=="0"){echo 'checked';}?>>
                                <span class="form-radio-label">Deactivate</span>
                            </label>
                      </div>
                      
                      <button type="submit" name='sub' class="btn btn-primary">Submit</button>
                      
                    </form>
                    
                    
                </section> 
                </br></br>
                <section class="col-md-6 connectedSortable">
                    <div class="box"  >
                        <div class="box-header with-border"  >
                            <i class="fa fa-file"></i>
                            <h3 class="box-title"> Editing user  </h3>
                        </div>
                <!-- /.box-header -->
    
                <div class="box-body" style="overflow: scroll;">
                  <table class="table table-bordered " style='background-color:white; color:black;'>
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Active</th>
                         
                        </tr>
                    </thead>
    
                    <tbody>

<?php
    include('database/database.php');
    $edid = $_GET['editid'];
    $s=1;
   $sel=mysqli_query($link,"select * from users where id=$edid");
    while($arr=mysqli_fetch_assoc($sel))
    {
      $id=$arr['id'];
       

?>

      <tr>
        
        <td><?=$s;?></td>
        <td><?=$arr['Name'];?></td>
        <td><p><?php echo $arr['email']; ?></p></td>
        <td><?=$arr['active'];?></td>
        

        
       
      </tr>
<?php
      $s++;
   }

?>


                </tbody>
                <tfoot></tfoot>

               
                
              </table>
            </div>
            
            
          </div>
          <!-- /.box -->
</section>
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