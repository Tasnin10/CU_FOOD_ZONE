<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cfz";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_ping($conn)) {
    echo "Database connection is active";
  } else {
    echo "Database connection is inactive";
  }

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // TODO: validate the email and password fields

    // Prepare and execute the query
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        // User found, redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // User not found, display an error message
        $error = "Invalid email or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <script src="https://kit.fontawesome.com/18777b3f13.js" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b94379aac3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/loginstyle.css">
    <style>
        nav{
            display: flex;
            justify-content: space-between;
        }
        nav a{
            text-decoration: none;
            color: black;
            margin-right: 10px;
        }
        .login-container{
            display: flex;
            justify-content: center;
            margin-top: 50px;
            background-color: rgb(203, 221, 165);
        }
        .login-form{
            display: flex;
            flex-direction: column;
            width: 50%;
        }
        .login-form input{
            margin-top: 1em;
            font-size: 1.5em;
            padding: 5px 10px;
        }
        .login-form input[type="submit"]{
            background-color: rgb(101, 155, 19);
            border: 0;
            border-radius: 5px;
            color: whitesmoke;
            font-weight: 700;
        }
        .cta{
            text-align: center;
            margin-top: 26px;
            margin-bottom: 60px;
        }
        .cta a{
            display: inline-block;
            padding: 12px 40px;
            background-color: rgb(73, 97, 30);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 20px;
        }
        .cta a:hover{
            background-color: #4CAF50;
        }   
    </style>
</head>
<body>
    <header>
        <nav>
            <span style="margin-top: 35px;">
                <a href="file:///C:\Projects\Website\foodcategory.html">
                    <button style="margin-top: 25px;" class="ms-5 btn btn-outline-success" type="consultation">Category</button>
                    <button style="margin-top: 25px;" class="ms-5 btn btn-outline-success" type="consultation">Dashboard</button>
                </a> 
            </span>
        </nav>
    </header>
    
            <section class="login-container">
        <form style="margin-top: 25px;" class="login-form" method="POST">
            <h3>Please Log in</h3> 
            <input type="email" name="email" id="" placeholder="Your Email" required> 
            <input type="password" name="password" id=""placeholder="Your Password" required> 
            <input class="contains" type="submit" value="Login"> 
        </form>
    </section>
    <section>
        <div style="text-align: center;" class="signups">
            <h5 style="margin-top: 45px;">If you don't have an account <a href="signup.php">Sign Up</a></h5>
          </div> 
    </section>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>