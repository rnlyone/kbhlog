<?php
// print_r($_POST['dbuser']);
$servername = "localhost";
$database = $_POST['dbname'];
$username = $_POST['dbuser'];
$password = $_POST['dbpass'];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
  $die = "Connection Failed";
  header('Location:index.php?die='.$die);
} else {
    $message = "Connected Successfully";
    if($page != "logging"){
        header('Location:logging.php?message='.$message);
    }
}

?>