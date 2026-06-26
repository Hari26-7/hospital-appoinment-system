<?php
include 'db/db/config.php';

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "Registration Successful!";
    }
    else
    {
        echo "Error!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

<h2>Patient Registration</h2>

<form method="post">
    <input type="text" name="name" placeholder="Name" required><br><br>

    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>

<br>
<a href="login.php">Go to Login</a>
</div>
</body>
</html>