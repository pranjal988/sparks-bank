<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "tsf_task1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['idEdit'])){
  // Update the record
    $id = $_POST["idEdit"];
    $name = $_POST["nameEdit"];
    $email = $_POST["emailEdit"];
    $balance = $_POST["balanceEdit"];

  // Sql query to be executed
  $sql = "UPDATE `accounts` SET `name` = '$name' , `email` = '$email' , `balance` = `$balance` WHERE `accounts`.`id` = $id";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $name = $_POST["name"];
    $smail = $_POST["email"];
    $balance = $_POST["balance"];

  // Sql query to be executed
  $sql = "INSERT INTO `accounts` (`name`, `email` , `balance`) VALUES ('$name', `$email` , '$balance')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Users Detail</title>

  <style>
        #body {
    background: url('bg.jpg') no-repeat center center/cover;
    display: flex;
    flex-direction: column;
    height: 100vh;
    width: 100%;
    font-family: 'Lato', sans-serif
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

.h1 {
    border: solid 2px black;
    display: block;
    width: 500px;
    margin: 2px auto;
    text-align: center;
    background-color: tan;
    margin-bottom: 25px
}

.edit {
    background: #0cd8c5;
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

<body>
 
<?php
include'navbar.php';
?>
    
    <div class="h1">
        <h1>Users Details</h1>
    </div>
  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">balance</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `accounts`";
          $result = mysqli_query($conn, $sql);
          $id = 0;
          while($row = mysqli_fetch_assoc($result)){
            // $id = $id + 1;
     
            ?>
            <tr>
            <th scope='row'><?php echo $row['id'] ?></th>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['balance'] ?></td>
             </tr>
          <?php
          }
          ?>


      </tbody>
    </table>
  </div>
  <footer class="end">
        The Spark Bank | Made By Intern - Pranjal Srivastava | ALL RIGHT RESERVED
    </footer>
</body>

</html>
