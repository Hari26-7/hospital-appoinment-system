<?php
include("db/db/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="dashboard-page">

<div class="dashboard-container">

    <div class="dashboard-header">
        <i class="fa-solid fa-hospital dashboard-icon"></i>

        <h1>Hospital Appointment System</h1>

        <p>
            Welcome to the Hospital Appointment Management System
        </p>
    </div>

    <div class="dashboard-buttons">

        <a href="book_appointment.php" class="btn dashboard-btn">
            <i class="fa-solid fa-calendar-check"></i>
            Book Appointment
        </a>

        <a href="appointments.php" class="btn dashboard-btn">
            <i class="fa-solid fa-list"></i>
            View Appointments
        </a>

        <a href="admin.php" class="btn dashboard-btn">
            <i class="fa-solid fa-user-doctor"></i>
            Admin Panel
        </a>

        <a href="logout.php" class="btn logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>
<style>

.dashboard-page{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;

    background:
    linear-gradient(rgba(15,76,129,.45),rgba(15,76,129,.45)),
    url('https://images.unsplash.com/photo-1587351021759-3e566b6af7cc?auto=format&fit=crop&w=1600&q=80');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    background-attachment:fixed;
}

.dashboard-container{
    width:520px;
    background:rgba(255,255,255,.96);
    border-radius:24px;
    padding:40px;
    text-align:center;
    box-shadow:0 20px 45px rgba(0,0,0,.25);
    backdrop-filter:blur(10px);
}

.dashboard-icon{
    font-size:60px;
    color:#0f4c81;
    margin-bottom:15px;
}

.dashboard-container h1{
    color:#0f4c81;
    margin-bottom:10px;
    font-size:32px;
}

.dashboard-container p{
    color:#666;
    margin-bottom:30px;
    font-size:16px;
}

.dashboard-buttons{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.dashboard-btn{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;

    padding:16px;

    color:white;
    text-decoration:none;
    font-size:17px;
    font-weight:700;

    border-radius:14px;

    background:linear-gradient(135deg,#0f4c81,#1cb5e0);

    transition:.3s;

    box-shadow:0 10px 25px rgba(15,76,129,.25);
}

.dashboard-btn:hover{
    transform:translateY(-4px);
    box-shadow:0 18px 30px rgba(15,76,129,.35);
}

.logout{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:12px;

    padding:16px;

    text-decoration:none;

    color:white;

    border-radius:14px;

    background:linear-gradient(135deg,#d63031,#ff7675);

    transition:.3s;
}

.logout:hover{
    transform:translateY(-4px);
    box-shadow:0 18px 30px rgba(214,48,49,.35);
}

@media(max-width:768px){

.dashboard-container{
    width:95%;
    padding:30px;
}

.dashboard-container h1{
    font-size:25px;
}

.dashboard-btn,
.logout{
    font-size:15px;
}

}
</style>
</body>
</html>
