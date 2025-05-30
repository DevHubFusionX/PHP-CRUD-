<?php
// Include the database connection file
include "dbConnection.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom external CSS -->
    <link rel="stylesheet" href="view-style.css">
</head>

<body>
    <!-- alert to show success if data is created -->
    <?php if (isset($_GET['created']) && $_GET['created'] == 1): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Data has been created successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <!-- =============== End for alert ============= -->

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- Page heading -->
            <h3 class="text-primary fw-bold">View Data</h3>
            <!-- Button to add new data -->
            <a href="index.php" class="btn btn-success">Add New Data</a>
        </div>
        <div class="table-responsive">
            <!-- Data table -->
            <table class="table table-bordered table-hover align-middle shadow-sm">
                <thead class="table-secondary">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Delete / Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query to fetch all records from the crudoperation table
                    $result = $con->query("select * from crudoperation");
                    // Check if there are any records
                    if ($result->num_rows > 0) {
                        // Loop through each record and display in the table
                        while ($rows = $result->fetch_assoc()) {
                            echo "<tr>
                        <td>" . htmlspecialchars($rows['Name']) . "</td>
                        <td>" . htmlspecialchars($rows['Email']) . "</td>
                        <td>" . htmlspecialchars($rows['Address']) . "</td>
                        <td gap-2>
                        <a href='delete.php?id=" . $rows['ID'] . "' class='btn btn-outline-danger' onclick=\"return confirm('Are you sure?');\">Delete</a>
                        <a href='edit.php?id=" . $rows['ID'] . "' class='btn btn-outline-primary'>Edit</a>
                        </td>
                        </tr>";
                        }
                    } else {
                        // Show message if no data is found
                        echo '<tr><td colspan="3" class="text-center text-muted">No data found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- script for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End  -->
</body>

</html>