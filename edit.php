<?php
session_start();
$user = $_SESSION['sid'];
include("admin/database/database.php");
if($user=="")
{
  header("location: admin/login.php");
}
?>


<?php
    $selID=mysqli_query($link,"select * from users where email='$user' ");
    $arrID=mysqli_fetch_assoc($selID);
    $userID = $arrID['id'];
    
    
    $rollno= $_GET['editid'];
    
    

    extract($_POST);
       if(isset($_POST["sub"]))
        {
            
          
         
            $fn = $_FILES['imgg']['name'];
            
            if(empty($fn))
            {
                 
            //only cname update
                if(mysqli_query($link,"update LatestUpdate set body='$activity', user_id='$userID' where id='$rollno'"))
                {
                echo "<script> alert ('Posted Successfully')</script>";
                }
                else
                {
                echo "<script> alert ('Failed! Please try again')</script>";
                }
            
            }
            else
            {
                 
                //update cname and image
                //$fnn=rand().$imgg;
                if(file_exists("update_img/".$fn)){
                    echo "<script> alert ('already exist')</script>";
                }
                else {
                    if(mysqli_query($link,"update LatestUpdate set body='$activity',image='$fn',user_id='$userID' where id='$rollno'"))
                    {
                        move_uploaded_file($_FILES['imgg']['tmp_name'],'update_img/'.$fn);
                        echo "<script> alert ('Event updated Successfully')</script>";
                    }
              
                 // unlink('update/'.$himg);
             
            }
            
            
            
          }
        
    }

?>





<?php
include('header.php');
include('navbar.php');
include('sidebar.php');
?>

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Main Content Start -->
            <section class='main-content'>
                <form method='post'>
                    
                </form>
            </section>
            
            <section class='main-content'>
                  <?php
                        $selID=mysqli_query($link,"select * from users where email='$user' ");
                        $arrID=mysqli_fetch_assoc($selID);
                        $userID = $arrID['id'];
                        
                       
                        
                        
                        $sql = "SELECT * FROM LatestUpdate WHERE user_id='$userID' and id=$rollno"; 
                        $result = $link->query($sql);
                        $res=mysqli_fetch_array($sth);
                        
                        
                        if($result-> num_rows > 0){
                            while($rows=$result->fetch_assoc()) {
                                
                            ?>
                            
                <div class="panel-heading">
                                <h3 class="panel-title">Activity Feed</h3>
                            </div>

                            <div class="panel-content panel-activity">
                                <form action="" method='post' class="panel-activity__status" enctype="multipart/form-data">
                                    <textarea name="activity" placeholder="Share what you've been up to..."  class="form-control"><?=$rows['body'];?></textarea>
                                    <!--<label> Upload Image</label>
                                    <input type="file" name="imgg" accept="image/*" />-->
                                    <div class="actions">
                                        <div class="btn-group">
                                            <div>
                                              <label for="files" title="Post an Image" class="btn-link" data-toggle="tooltip"><i class="far fa-image"></i></label>
                                              <input name='imgg' id="files" style="visibility:hidden;" value="<?=$rows['image'];?>" type="file" accept="image/*">
                                            </div>

                                            
                                        </div>

                                        <button type="submit" name='sub' class="btn btn-sm btn-rounded btn-info">Post</button>
                                    </div>
                                </form>
                            </div>
            </section>    
        
            <section class="main--content">
              
                            
                            <ul class="panel-activity__list">
                                    <li>
                                       <!-- <i class="activity__list__icon fas fa-question-circle"></i>-->

                                        <div class="activity__list__header">
                                            
                                            <a href="#"><?=$arrID['Name'];?></a> <?=$arrID['email'];?>
                                        </div>

                                        <div class="activity__list__body entry-content">
                                            <p><strong><?=$rows['body'];?></strong></p>
                                        </div>
                                        
                                        <div class="activity__list__body entry-content">
                                            <a href='update_img/<?=$rows['image'];?>'><img style='width:400px;height:400px' src='update_img/<?=$rows['image'];?>'></a>
                                            
                                        </div>

                                        <div class="activity__list__footer">
                                            <a href="#"><i class="far fa-thumbs-up"></i>123</a>
                                            <a href="#"><i class="far fa-comments"></i>23</a>
                                            <a onclick="return confirm('Are you sure you want to edit this item?');" href='edit.php?editid=<?=$rows['id'];?>' ><i class="fas fa-edit" aria-hidden="true"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete this item?');" href='delete_update.php?delid=<?=$rows['id'];?>' ><i class="fa fa-trash"></i></a>
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
            </section>
            <!-- Main Content End -->

<?php
include('footer.php');
?>