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

        
        
        <main class="main--container">
            <section class="main--content">
                <!--<div class="row gutter-20">
                    
                    </div>-->
                    
                    
<?php
    include('database/database.php');
    
    
    
    
    
    extract($_POST);
       if(isset($_POST["sub"]))
        {
            
          
         
            $fn = $_FILES['imgg']['name'];
            echo "<script> alert ('$fn')</script>";
          
            if(empty($fn))
            {
                 
            //only cname update
                if(mysqli_query($link,"insert into LatestUpdate (body, user_id) values ('$activity', '$usr_id')"))
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
                if(file_exists("../../oswal/admin/update/".$fn)){
                    echo "<script> alert ('already exist')</script>";
                }
                else {
                    if(mysqli_query($link,"insert into LatestUpdate (body,image,user_id)values('$activity','$fn','$usr_id')"))
                    {
                        move_uploaded_file($_FILES['imgg']['tmp_name'],'../../oswal/admin/update/'.$fn);
                        echo "<script> alert ('Event updated Successfully')</script>";
                    }
              
                 // unlink('update/'.$himg);
             
            }
            
            
            
          }
        
    }
    
    
    
?>
                    
            <div>
                <section class="col-md-6 connectedSortable">
                    <form  method='post' enctype="multipart/form-data">
                      
                      
                      
                      
                      <div class="form-group">
                    <label>Users</label>
                       <select class="form-control" name="usr_id" required>
                           <option selected disabled>Select a user</option>
                           
                           
                           <?php
   
   $sel=mysqli_query($link,"select * from users order by Name");
    while($arr1=mysqli_fetch_assoc($sel))
    {
     

?>
                         
                         
                           <option value="<?=$arr1['id'];?>"><?=$arr1['Name'];?><br>(<?=$arr1['email'];?>)</option>
                           
                   <?php
                   
                   }
                   ?>
                           
                             
                       </select>
                    </div>
                      
                      
                      
                        
                      <div class="form-group">
                        <label for="fname">Write something</label>
                        <input type="text" id='fname' class="form-control" name='activity' value='' placeholder="What's in your mind...">
                      </div>
                      
                      <div class="form-group">
                        <label for="files" title="Post an Image" class="btn-link" data-toggle="tooltip"><i class="far fa-image"></i></label>
                        <input name='imgg' id="files" style="visibility:hidden;" type="file">
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
                      
                      <!--<div class="form-group">
                            <label class="form-radio">
                                <input type="radio" name="actv" value="1" class="form-radio-input"  <?php if($Pactive=="1"){echo 'checked';}?>>
                                <span class="form-radio-label">Activate</span>
                            </label>

                            <label class="form-radio">
                                <input type="radio" name="actv" value="0" class="form-radio-input" <?php if($Pactive=="0"){echo 'checked';}?>>
                                <span class="form-radio-label">Deactivate</span>
                            </label>
                      </div>-->
                      
                      <button type="submit" name='sub' class="btn btn-primary">Submit</button>
                      
                    </form>
                    
                    
                </section> 
                </br></br>
                
            </div>
        </section>
            <!-- Main Content End -->
<?php
    include('footer.php');
?>