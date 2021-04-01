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
include('sidebar.php');
?>
    <!-- Page Level Stylesheets -->
  <?php
    
  
    $sel1=mysqli_query($link,"select * from LatestUpdate order by id desc");
    $rowcount=mysqli_num_rows($sel1);
    

?>
 
 <script type="text/javascript">
        function makeTableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 4;

            var table = document.getElementById('myTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
    </script>
 
 
  


        
        <main class="main--container">
        <section class="main--content">
                <div class="row gutter-20">
                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#2bb3c0">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>

                                    <p class="miniStats--label text-white bg-blue">
                                        <i class="fa fa-globe"></i>
                                        <span></span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-user text-blue"></i>

                                    <p class="miniStats--caption text-blue">Till today</p>
                                    <h3 class="miniStats--title h4">All Posts</h3>
                                    
                                    <p class="miniStats--num text-blue"><?php echo $rowcount; ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <a href='add_update.php'>
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#2bb3c0">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>

                                    <p class="miniStats--label text-white bg-blue">
                                        <i class="fa fa-level-up"></i>
                                        <span><?php echo 100 / $rowcount;?>%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-user text-blue"></i>

                                    <p class="miniStats--caption text-blue">Now</p>
                                    <h3 class="miniStats--title h4">Add New Post</h3>
                                    
                                    <p class="miniStats--num text-blue">+1</p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                        </a>
                    </div>
                    
                    

                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <!--<h3 class="panel-title">
                                    <select name="filter" data-trigger="selectmenu" data-minimum-results-for-search="-1">
                                        <option value="top-search">Top Search</option>
                                        <option value="average-search">Average Search</option>
                                    </select>
                                </h3>-->
                                <h3 class="panel-title">Top Search</h3>
                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <!-- Vector Map Start -->
                                <div class="vector--map" data-trigger="jvectorMap" data-map-selected='["US", "CA", "MX", "GT", "HN", "BZ", "SV", "NI", "CR", "BS", "CU", "JM", "HT", "DO", "PR", "PA", "CO", "VE", "TT", "GY", "SR", "GL", "EC", "PE", "BR", "BO", "PY", "CL", "AR", "UY", "FK"]'></div>
                                <!-- Vector Map End -->

                                <div class="map--stats">
                                    <table class="table">
                                        <tr>
                                            <td>United States</td>
                                            <td>65%</td>
                                        </tr>
                                        <tr>
                                            <td>United Kingdom</td>
                                            <td>15%</td>
                                        </tr>
                                        <!--<tr>
                                            <td colspan="2">
                                                <a href="#" class="btn-link">View All</a>
                                            </td>
                                        </tr>-->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    </div>
               
            <section class="col-md-12 connectedSortable">
                <div class="box"  >
                    <div class="box-header with-border"  >
                        <i class="fa fa-file"></i>
                        <h3 class="box-title"> All Updates  </h3>
                    </div>
            <!-- /.box-header -->

            <div class="box-body" style="overflow: scroll;">
              <table id="myTable" class="table table-bordered table-hover" style='background-color:white; color:black;'>
                <thead>
                    <tr>
                        <th>S No</th>
                        <th>User_id</th>
                        <th>User_Name</th>
                        <th>Post</th>
                        <th>Time</th>
                        <th>Image</th>
                        <th>Action</th>
                     
                    </tr>
                </thead>

                <tbody>

<?php
    include('database/database.php');
    $s=1;
    $sel=mysqli_query($link,"select * from LatestUpdate order by id desc");
    $rowcount=mysqli_num_rows($sel);
    while($arr=mysqli_fetch_assoc($sel))
    {
        $usr = $arr['user_id'];
        $sel2= mysqli_query($link,"select * from users where id=$usr");
        $arr2=mysqli_fetch_assoc($sel2);
      $id=$arr['id'];
       

?>

      <tr>
        
        <td><?=$s;?></td>
        <td><?=$arr['user_id'];?></td>
        <td><?=$arr2['Name'];?></td>
        <td><?=$arr['body'];?></td>
        <td><?=$arr['tym'];?></td>
        <td>
            <?php
            if($arr['image']!=""){
                ?>
                <a href="../../oswal/admin/update/<?=$arr['image'];?>" target="_blank"><img src="../../oswal/admin/update/<?=$arr['image'];?>" style="width:600px; height:200px"></a>
            <?php    
            }
            else{
                echo "No image";
            }
            ?>
            </td>
        <td>
        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href='delete_update.php?delid=<?=$arr['id'];?>' ><i class="fa fa-trash"></i></a>
        </td>

        
       
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
        </section>
            <!-- Main Content End -->

           <?php
include('footer.php');
?>