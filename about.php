<!doctype html>
<html lang="en">

<head>

    <!-- INSERT INTO `task1` (`S(No.)`, `name`, `age`, `gender`, `email`, `comments`, `d/t`) VALUES ('1', 'pranjal srivastava', '19', 'male', 'this@this.com', 'it is very good page.', current_timestamp()); -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/nav.css">
    

    <title>About Us</title>
    <style>
        .body {
            display: flex;
            flex-direction: column;
            background: grey;
        }
        
        .ul li {
            list-style: none;
            margin-top: 0%;
        }
        /*         
        ul li a:hover {
            color: black;
            border-radius: 5px;
        }
         */
        
        .ul li a {
            color: whitesmoke;
            /* margin: 31px; */
            /* font-size: 20px; */
        }
        
        .home {
            text-decoration: none;
            /* list-style: none; */}
       
        
        .rounded {
            margin-bottom: 20px;
            border: solid 2px white;
            border-radius: 14.25rem!important;
        }
        
        .para {
            border: solid 2px black;
            margin: 2px auto;
            text-align: center;
            border-radius: 5px;
            height: 200px;
            width: 500px;
            margin-bottom: 50px;
            background: rgb(121, 183, 235);
            font-family: 'Lato', sans-serif
        }
        
        .end {
            border: solid 2px grey;
            background-color: black;
            /* height: 10px; */
            text-align: center;
            color: whitesmoke;
            margin-top: auto;
            font-size: small;
        }
    </style>
</head>

<body class="body">
   <?php
    include 'navbar.php';
   ?>
    
    <div>
        <img src="ph.jpeg" class="rounded mx-auto d-block" alt="...">
    </div>
    <div class="para">
        <p> Hello everyone! My name is Pranjal Srivastava, I am working as an intern for The Sparks Foundation. This is my task1 where I am working on a banking system. </p>

        <p>Hope You Like The Work!</p>
    </div>
    <footer class="end">
        The Spark Bank | Made By Intern - Pranjal Srivastava | ALL RIGHT RESERVED
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>