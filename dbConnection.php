<?php

$con = mysqli_connect('localhost', 'root', '', 'crud');
if(mysqli_connect_errno()){
  echo "Failed to connect to MYSQL: ".mysqli_connect_error();
  echo "<h4 class='text-center text-muted bg-danger ' >connection failed</h4>";
  exit();
}else{
    echo "<h4 class='text-center text-muted bg-success text-secondary' >connection successful</h4>";
}
?>