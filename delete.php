<?php
include("dbConnection.php");

$id = $_GET['id'];

$stmt = $con->prepare("DELETE FROM `crudoperation` WHERE id = ?");
$stmt->bind_param("i", $id);

if( $stmt->execute() ){
    header("location: view.php");
}
else {
    echo "Error deleting contact: " . $stmt->error;
}


// $stmt->execute();
$stmt->close();
$con->close();

?>