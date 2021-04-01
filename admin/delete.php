<?php
session_start();
$admin=$_SESSION['sid'];
include("database/database.php");
if($admin=="")
{
  header("location: lock-screen.php");
}
else {
    $rollno= $_GET['delid'];
     
    $query= "delete from users where id='$rollno' ";
    $data=mysqli_query($link,$query);
     
    if ($data)
     {
    
    	echo "<script>
                       alert('Delete Successfull'); window.location.href='users.php';
    		    </script>";
       
    }
    else{
    	echo "<script>
                       alert('Delete Unsuccessfull')
    		    </script>";
    }
}

?>