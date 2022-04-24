<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        input{
            margin: 10px;
        }
    </style>
</head>
<body>
<form method='POST'>
    <input type="text" name="name" id="name" placeholder="Enter Your Name"><br>
    <input type="email" name="email" id="email" placeholder="Enter EmailID"><br>
    <input type="phone" name="phone" id="phone" placeholder="Enter 10 Digit Number">
<br>    <input type="submit" value="Submit Name">
</form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
echo "<h3> Details of User $name</h3>";
echo "<a> Name:$name</a><br>";
echo "<a> Email:$email</a><br>";
echo "<a> Phone:$phone</a>";

?>
</body>
</html>