<?php
include 'db/db/config.php';

if(isset($_POST['login']))
{
    $email = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0)
    {
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Login</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg,#0f4c81,#1cb5e0);
}

.login-container{
    width:900px;
    max-width:95%;
    display:flex;
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

.left-side{
    width:50%;
    background:url('https://images.unsplash.com/photo-1587351021759-3e566b6af7cc') center/cover;
    min-height:500px;
}

.right-side{
    width:50%;
    padding:50px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.right-side h2{
    text-align:center;
    color:#0f4c81;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:14px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:10px;
    font-size:15px;
}

button{
    width:100%;
    padding:14px;
    background:#0f4c81;
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-size:16px;
    margin-top:10px;
}

button:hover{
    background:#0c3b64;
}

a{
    display:block;
    text-align:center;
    margin-top:15px;
    text-decoration:none;
    color:#0f4c81;
    font-weight:600;
}

</style>

</head>

<body>

<div class="login-container">

    <div class="left-side"></div>

    <div class="right-side">

        <h2>🏥 Hospital Appointment System</h2>

        <form method="post">

            <input
                type="text"
                name="username"
                placeholder="Email Address"
                required>

            <input
                type="password"
                name="password"
                placeholder="Password"
                required>

            <button type="submit" name="login">
                Login
            </button>

        </form>

        <a href="register.php">Create Account</a>

    </div>

</div>

</body>
</html>