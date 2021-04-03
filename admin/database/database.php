<?php

$link=mysqli_connect("localhost","admin","gagan2535","twitter");


if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 
?>