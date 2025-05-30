<?php
// Include the database connection file
include('dbconnection.php');

// Check if the form has been submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve form data from POST request
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  // Insert the form data into the 'crudoperation' table
  $query = mysqli_query($con, "INSERT INTO crudoperation(Name, Email, Address) VALUE('$name', '$email', '$address')");

  // Check if the query was successful
  if ($query) {
    // Redirect to view.php after successful creation
    header('Location: view.php?created=1');
    echo "<script>alert('Successfully created record')</script>";
    exit;
  } else {
    // Redirect back with an error flag (optional)
    echo "<script>alert('There is an error')</script>";
    header('Location: index.php?error=1');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS for styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Create User</title>
  <link rel="stylesheet" href="form-style.css">
</head>

<body>
  <!-- Centered form container -->
  <div class="d-flex justify-content-center align-items-center w-100 vh-100">
    <div class="form-container">
      <h2>FILL FORM</h2>
      <!-- User input form -->
      <form method="POST">
        <div class="mb-3">
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
        <button class="btn btn-success w-100 mb-4" type="submit">Create</button>
        <!-- view data button -->
        <button class="btn btn-success w-100 " onclick="location.href='view.php'" type="button"><a href="view.php" class="text-white text-decoration-none">view data</a></button>
      </form>
    </div>
  </div>
</body>

</html>