<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $sql = "INSERT INTO `tsf_task1`.`task1`(`name`, `age`, `gender`, `email`, `comments`, `d/t`) VALUES ('$name', '$age', '$gender', '$email', '$comments', current_timestamp());";

    if($con->query($sql) == true){
        echo "Successfully inserted";}

        $con->close();
    }
?>

    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

        <title>contact form</title>

        <!-- <link rel="stylesheet" href="contact.css"> -->
        <style>
            .body {
                background: url('c2.jpg') no-repeat center center/cover;
                height: 100%;
                width: 100%;
                color: whitesmoke;
            }
            
            .bg-dark {
                --bs-bg-opacity: 0.4;
            }
            
            .logo {
                width: 45px;
                height: 40px;
            }
            
            .navbar-brand {
                font-family: 'Lato', sans-serif;
            }
            
            #navbar {
                display: flex;
                margin-bottom: 20px;
            }
            
            .ul li a {
                text-decoration: none;
                padding: 4px;
                text-decoration-line: none;
                margin: 2px auto;
                color: ghostwhite;
            }
            
            .ul li {
                list-style: none;
                padding: 4px;
                margin: 2px;
                text-decoration: none;
            }
            
            .ul {
                display: flex;
                flex-direction: row;
                text-decoration: none;
                justify-content: space-around;
                padding-right: 19px;
                margin-bottom: auto;
            }
            /* .btn ul li {
    right: 2px;
} */
            
            .container a {
                text-decoration: none;
                text-align: center;
                color: wheat;
            }
            
            .section {
                margin-top: 115px;
                border: solid 2px aliceblue;
                border-radius: 10px;
                text-align: center;
                width: 500px;
                height: 500px;
                padding: 3px;
                margin: 101px auto;
            }
            
            .top {
                display: flex;
                flex-direction: column;
                padding: 6px;
                margin: 22px auto;
                border-radius: 10px;
            }
            
            #t1 {
                width: 300px;
                height: 100px;
            }
            
            #sub {
                border: 3px solid;
                border-radius: 10px;
                font-size: 15px;
            }
            
            #sub:hover {
                background: grey;
            }
            
            .end {
                border: solid 2px grey;
                background-color: grey;
                /* height: 10px; */
                text-align: center;
                margin-top: auto;
                font-size: small;
            }
        </style>

    </head>

    <body class="body">
        <nav class="navbar navbar-dark bg-dark" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Spark Bank
                </a>

                <ul class="ul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <section class="section">
            <h1> Enter all the details </h1>
            <form action="contact.php" method="post">
                <input type="text" name="name" class="top" placeholder="Enter Your Name">
                <input type=" text" name="age" class="top" placeholder="Enter Your Age">
                <input type=" text" name="gender" class="top" placeholder="Enter Your Gender">
                <input type="text" name="email" class="top" placeholder="name@example.com">

                <textarea name="comments" class="top" id="t1" placeholder="comment here"></textarea>
                <button class="top" id="sub"><b>Submit</b></button>
            </form>
        </section>
        </form>
        <footer class="end">
            The Spark Bank | Made By Intern - Pranjal Srivastava | ALL RIGHT RESERVED
        </footer>
    </body>

    </html>