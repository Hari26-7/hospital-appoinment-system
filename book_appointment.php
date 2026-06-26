<?php
include("db/db/config.php");

if(isset($_POST['book']))
{
    $patient_name = mysqli_real_escape_string($conn, $_POST['patient']);
    $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor']);
    $appointment_date = $_POST['date'];
    $appointment_time = $_POST['time'];

    $sql = "INSERT INTO appointments
    (patient_name, doctor_name, appointment_date, appointment_time)
    VALUES
    ('$patient_name','$doctor_name','$appointment_date','$appointment_time')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Appointment Booked Successfully');
        window.location='appointments.php';
        </script>";
        exit();
    }
    else
    {
        die("Database Error : ".mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Appointment</title>

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body class="dashboard-page">

<div class="appointment-card">

<h1>
<i class="fa-solid fa-calendar-check"></i>
Book Appointment
</h1>

<p>
Choose your doctor and preferred appointment time.
</p>

<form method="POST">

<input
type="text"
name="patient"
placeholder="👤 Enter Patient Name"
required>

<select name="doctor" required>

<option value="">👨‍⚕️ Select Doctor</option>

<option value="Dr. Rajesh - Cardiologist">
❤️ Dr. Rajesh - Cardiologist
</option>

<option value="Dr. Priya - Dermatologist">
🩺 Dr. Priya - Dermatologist
</option>

<option value="Dr. Kumar - Neurologist">
🧠 Dr. Kumar - Neurologist
</option>

<option value="Dr. Anitha - Pediatrician">
👶 Dr. Anitha - Pediatrician
</option>

<option value="Dr. Suresh - Orthopedic">
🦴 Dr. Suresh - Orthopedic
</option>
</select>
<input
type="date"
name="date"
required>

<select name="time" required>

<option value="">🕒 Select Appointment Time</option>

<option value="09:00:00">09:00 AM</option>

<option value="10:00:00">10:00 AM</option>

<option value="11:00:00">11:00 AM</option>

<option value="12:00:00">12:00 PM</option>

<option value="02:00:00">02:00 PM</option>

<option value="03:00:00">03:00 PM</option>

<option value="04:00:00">04:00 PM</option>

<option value="05:00:00">05:00 PM</option>
</select>

<button type="submit" name="book" class="btn">
    <i class="fa-solid fa-calendar-check"></i>
    Confirm Appointment
</button>

</form>

<br>

<a href="dashboard.php" class="btn">
    <i class="fa-solid fa-arrow-left"></i>
    Back to Dashboard
</a>

</div>
<style>
.appointment-card{
    width:550px;
    background:rgba(255,255,255,0.95);
    padding:35px;
    border-radius:20px;
    box-shadow:0 20px 45px rgba(0,0,0,.25);
    backdrop-filter:blur(10px);
}

.appointment-card h1{
    text-align:center;
    color:#0f4c81;
    margin-bottom:10px;
    font-size:30px;
}

.appointment-card p{
    text-align:center;
    color:#666;
    margin-bottom:25px;
}

.appointment-card input,
.appointment-card select{
    width:100%;
    padding:15px;
    margin:12px 0;
    border:1px solid #ddd;
    border-radius:12px;
    font-size:15px;
    outline:none;
    transition:.3s;
}

.appointment-card input:focus,
.appointment-card select:focus{
    border-color:#0f4c81;
    box-shadow:0 0 8px rgba(15,76,129,.3);
}

.appointment-card .btn{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;
    padding:15px;
    margin-top:15px;
    border-radius:12px;
    background:linear-gradient(135deg,#0f4c81,#1cb5e0);
    color:#fff;
    text-decoration:none;
    font-size:16px;
    font-weight:bold;
    border:none;
    cursor:pointer;
    transition:.3s;
}

.appointment-card .btn:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 25px rgba(15,76,129,.35);
}

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
</style>

</body>
</html>
