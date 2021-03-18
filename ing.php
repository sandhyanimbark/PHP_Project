<?php
$Name = filter_input(INPUT_POST, 'Name');
$Email = filter_input(INPUT_POST, 'Email');
if (!empty($Name)){
if (!empty($Email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "Karate_imp";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (Name, Email)
values ('$Name','$Email')";
if ($conn->query($sql)){
echo "<h1>You joined us successfully</h1> ";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karate</title>
</head>
<body bgcolor="pink">
<center>
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.html" role="button">Continue to homepage</a>
  </p>
</center>

</body>
</html>