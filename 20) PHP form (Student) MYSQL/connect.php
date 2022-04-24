<?php
$username = 'root';
$db = 'studentt'; //database name
//uncomment if code throwing error
//$hostname = 'localhost';
//password = '';

$conn = mysqli_connect('localhost', $username, NULL, $db); //add $hostname and $password instead of hostname:localhost and Pass:null if IDE is not detecting
if (!$conn) {
    die("Not connected " . mysqli_connect_error());
}
//Uncomment to check the database is connected successfully
//else{
//    echo 'Success';
//}
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO `student` (`name`, `email`) VALUES ('$name', '$email')"; //edit here

if($conn->query($sql)==true){
    echo "Successfully inserted";
}
else{
    echo "Error found inserting $sql <br> $conn->error";
}
$conn->close();


