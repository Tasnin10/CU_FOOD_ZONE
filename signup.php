<?php
        // Establish a database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cfz";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (mysqli_ping($conn)) {
            echo "Database connection is active";
          } else {
            echo "Database connection is inactive";
          }
          

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $s_id = $_POST["s_id"];
            $s_name = $_POST["s_name"];
            $s_email = $_POST["s_email"];
            $s_password = $_POST["s_password"];

            $sql = "INSERT INTO students (s_id, s_name, s_email, s_password)
                    VALUES ('$s_id', '$s_name', '$s_email', '$s_password')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Close the database connection
        mysqli_close($conn);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/18777b3f13.js" crossorigin="anonymous"></script>
    <style>
        nav{
            display: flex;
            justify-content: space-between;
        }
        nav a{
            text-decoration: none;
            color: black;
            margin-right: 10px;
            font-size: 21px;
            color: green;
            padding: 7px 20px;
            border: 1px solid transparent;
        }
        nav a:hover{
            background-color: green;
            color: white;
        }
        .login-container{
            display: flex;
            justify-content: center;
            margin-top: 31px;
            background-color: rgb(224, 250, 184);
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
            background-color: green;
            border: 0;
            border-radius: 5px;
            color: whitesmoke;
            font-weight: 700;
        }
        .logins{
            margin-top: 2px;
            text-align: center;
            margin-bottom: 30px;
        }
        .cta{
            text-align: center;
            margin-top: 26px;
            margin-bottom: 20px;
        }
        .cta a{
            display: inline-block;
            padding: 15px 40px;
            background-color: rgb(73, 97, 30);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 25px;
        }
        .cta a:hover{
            background-color: #4CAF50;
        } 
    </style>
</head>
<body>
    <header>
        <nav>
            <span style="margin-top: 15px;">
                <a href="file:///C:\Projects\Website\home.html">Home</a>
                <!-- <a href="">Dashboard</a>
                <a href="">Category</a> -->
            </span> 
            <!-- <span>
                <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
                <a href=""><i class="fa-solid fa-user"></i></a>
            </span> -->
          
        </nav>
    </header>
    <section class="login-container">
        <form class="login-form" method="post" action="process.php">
            <h3>Please Sign Up</h3> <!-- as h3 is a block , it will show in different block or line -->
            <input type="text" name="s_id" id="s_id" placeholder="Your ID" required> 
            <input type="text" name="s_name" id="s_name" placeholder="Your Name" required> 
            <input type="email" name="s_email" id="s_email" placeholder="Your Email" required> 
            <input type="password" name="s_password" id="s_password" placeholder="Your Password" required> 

             <!-- <input type="submit" value="Submit">  -->
             <div class="cta">
                <a href="file:///C:\Projects\Website\home.html">Submit</a>
            </div>
            <div class="logins">
                <h4>If you already have an account <a href="file:///C:\Projects\Website\login.html">Log In</a></h4>
                
            </div>
      </form>
    </section>
</body>
</html>