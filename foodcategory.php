<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connection is active";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <link rel="stylesheet" href="styles/categories.css">
</head>
<body>
<header>
    <h1> <center> Food Categories </center> </h1>
</header>
<main>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Category</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td> <a href="file:///C:\Projects\Website\meals.html">
                <button style="color: antiquewhite;" class="ms-5 btn btn-outline-success" type="consultation">Meals</button> </a> 
                
            </td>
            <td>
                <select class="form-select" aria-label="Cat Status">
                    <option selected>Available</option>
                    <option>Unavailable</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td><a href="file:///C:\Projects\Website\snack.html">
                <button style="color: antiquewhite;" class="ms-5 btn btn-outline-success" type="consultation">Snacks</button> </a> 
        </td>
        <td>
            <select class="form-select" aria-label="Cat Status">
                <option selected>Available</option>
                <option>Unavailable</option>
            </select>
        </td>
        </tr>

        <tr>
            <td>3</td>
            <td><a href="file:///C:\Projects\Website\beverage.html">
                <button style="color: antiquewhite;" class="ms-5 btn btn-outline-success" type="consultation">Beverages</button> </a> 
        </td>
        <td>
            <select class="form-select" aria-label="Cat Status">
                <option selected>Available</option>
                <option>Unavailable</option>
            </select>
        </td>
        </tr>

        </tbody>
    </table>
 
</main>
<footer>
    <p>&copy; <?php echo date('Y'); ?> Food Categories</p>
</footer>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
