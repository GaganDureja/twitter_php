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


    extract($_POST);
       if(isset($_POST["sub"]))
        {
            
          
         
            $fn = $_FILES['imgg']['name'];
            
           if(empty($fn))
            {
                 
            //only cname update
                if(mysqli_query($link,"insert into LatestUpdate (body, user_id) values ('$activity', '$userID')"))
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
                    if(mysqli_query($link,"insert into LatestUpdate (body,image,user_id)values('$activity','$fn','$userID')"))
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
                <div class="panel-heading">
                                <h3 class="panel-title">Activity Feed</h3>
                            </div>

                            <div class="panel-content panel-activity">
                                <form action="" method='post' class="panel-activity__status" enctype="multipart/form-data">
                                    <textarea name="activity" placeholder="Share what you've been up to..." class="form-control" required></textarea>
                                    <!--<label> Upload Image</label>
                                    <input type="file" name="imgg" accept="image/*" />-->
                                    <div class="actions">
                                        <div class="btn-group">
                                            <div>
                                              <label for="files" title="Post an Image" class="btn-link" data-toggle="tooltip"><i class="far fa-image"></i></label>
                                              <input name='imgg' id="files" style="visibility:hidden;" type="file">
                                            </div>
                                            

                                            <!--<button type="button" class="btn-link" title="Post an Video" data-toggle="tooltip">
                                                <i class="fas fa-video"></i>
                                            </button>

                                            <button type="button" class="btn-link" title="Post an Idea" data-toggle="tooltip">
                                                <i class="far fa-lightbulb"></i>
                                            </button>

                                            <button type="button" class="btn-link" title="Post an Question" data-toggle="tooltip">
                                                <i class="fas fa-question-circle"></i>
                                            </button>-->
                                        </div>

                                        <button type="submit" name='sub' class="btn btn-sm btn-rounded btn-info">Post</button>
                                    </div>
                                </form>
                            </div>
            </section>
            <section class="main--content">
                <?php
                        
                        
                       
                        
                        
                        $sql = "SELECT * FROM LatestUpdate ORDER BY id DESC"; 
                        $result = $link->query($sql);
                        $res=mysqli_fetch_array($sth);
                        
                        
                        if($result-> num_rows > 0){
                            while($rows=$result->fetch_assoc()) {
                                
                                $userID = $rows['user_id'];
                                $selID=mysqli_query($link,"select * from users where id='$userID' ");
                                $arrID=mysqli_fetch_assoc($selID);
                                
                                
                            ?>
                            
                            
                            <ul class="panel-activity__list">
                                    <li>
                                        <!--<i class="activity__list__icon fas fa-question-circle"></i>-->

                                        <div class="activity__list__header">
                                            
                                            <a href="#"><?=$arrID['Name'];?></a> <?=$arrID['email'];?>
                                        </div>
                                        
                                        <div class="activity__list__body entry-content">
                                            <p><strong><?=$rows['body'];?></strong></p>
                                        </div>
                                        
                                <?php
                                    if($rows['image']!=""){
                                    ?>
                                    <div class="activity__list__body entry-content">
                                        <a href='update_img/<?=$rows['image'];?>'><img style='width:400px;height:400px' src='update_img/<?=$rows['image'];?>'></a>
                                            
                                    </div>
                                    <?php    
                                    }
                                ?>        
                                        
                                        

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
            </section>
            <!-- Main Content End -->

<?php
include('footer.php');
?>