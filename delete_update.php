<?php
session_start();
$user = $_SESSION['sid'];
include("admin/database/database.php");


$selID=mysqli_query($link,"select * from users where email='$user' ");
$arrID=mysqli_fetch_assoc($selID);
$userID = $arrID['id'];

$rollno= $_GET['delid'];
 
    $query= "delete from LatestUpdate where id='$rollno' and user_id='$userID' ";
    $data=mysqli_query($link,$query);
     
    if ($data)
     {
    
    	echo "<script>
                    alert('Delete Successfull'); window.location.href='index1.php';
    		    </script>";
       
    }
    else{
    	echo "<script>
                       alert('Delete Unsuccessfull');window.location.href='index1.php';
    		    </script>";
    }

?>