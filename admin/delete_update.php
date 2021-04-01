<?php

include("database/database.php");
$rollno= $_GET['delid'];
 
$query= "delete from LatestUpdate where id='$rollno' ";
$data=mysqli_query($link,$query);
 
if ($data)
 {

	echo "<script>
                   alert('Delete Successfull'); window.location.href='updates.php';
		    </script>";
   
}
else{
	echo "<script>
                   alert('Delete Unsuccessfull')
		    </script>";
}

?>