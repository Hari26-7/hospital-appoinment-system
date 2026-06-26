<?php
include 'db/db/config.php';

/* Total Patients */
$patient_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
$patient_data = mysqli_fetch_assoc($patient_query);
$patients = $patient_data['total'];

/* Total Appointments */
$appointment_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM appointments");
$appointment_data = mysqli_fetch_assoc($appointment_query);
$appointments = $appointment_data['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

            background:
            linear-gradient(
            rgba(0,0,0,0.4),
            rgba(0,0,0,0.4)
            ),
            url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d');

            background-size:cover;
            background-position:center;
        }

        .container{
            width:800px;
            background:rgba(255,255,255,0.95);
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
            text-align:center;
        }

        h1{
            color:#0f172a;
            margin-bottom:30px;
        }

        .stats{
            display:flex;
            justify-content:center;
            gap:30px;
            margin-bottom:30px;
        }

        .card{
            width:250px;
            padding:25px;
            border-radius:15px;
            color:white;
        }

        .patients{
            background:#0ea5e9;
        }

        .appointments{
            background:#10b981;
        }

        .card h2{
            font-size:40px;
            margin-bottom:10px;
        }

        .card p{
            font-size:18px;
        }

        .btn{
            display:block;
            width:280px;
            margin:15px auto;
            padding:14px;
            text-decoration:none;
            border-radius:10px;
            color:white;
            font-weight:bold;
        }

        .view{
            background:#2563eb;
        }

        .back{
            background:#64748b;
        }

        .btn:hover{
            opacity:0.9;
            transform:scale(1.03);
            transition:0.3s;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>👨‍💼 Admin Dashboard</h1>

    <div class="stats">

        <div class="card patients">
            <h2><?php echo $patients; ?></h2>
            <p>Total Patients</p>
        </div>

        <div class="card appointments">
            <h2><?php echo $appointments; ?></h2>
            <p>Total Appointments</p>
        </div>

    </div>

    <a href="appointments.php" class="btn view">
        📋 View All Appointments
    </a>

    <a href="dashboard.php" class="btn back">
        ⬅ Back Dashboard
    </a>

</div>

</body>
</html>