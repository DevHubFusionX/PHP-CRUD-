<?php
include("dbConnection.php");
?>


<?php
 if (isset($_POST['update'])) {

$id = $_GET['id'];

    $name = $con->real_escape_string($_POST["name"]);
    $email = $con->real_escape_string($_POST['email']);
    $address = $con->real_escape_string($_POST['address']);

    $sql = "UPDATE crudoperation SET name = '$name', email = '$email', address = '$address'  WHERE ID = '".$_GET["id"]."'";
    if ($con->query($sql) === TRUE) {
        echo "Contact updated! <a href='view.php'>View Contact</a>";
        header("Location: view.php");
    } else {
        echo "Error: " . $con->error;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="POST">
    <div class="d-flex justify-content-center align-items-center w-100 vh-100">


        <div class="form-container">
            <h3 class="letter">update form</h3>
        <div class="mb-3 ">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
            </div>
            <!-- Submit button -->
            <button class="btn btn-success w-100 mb-4" type="submit"  name="update">edit</button>
            <!-- view data button -->
            <button class="btn btn-success w-100 " onclick="location.href='view.php'" type="button"><a href="view.php" class="text-white text-decoration-none">view data</a></button>
        </div>
            
          </form>
    </div>
</body>
</html>