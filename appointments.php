<?php
include 'db/db/config.php';

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM appointments WHERE id='$id'");
    header("Location: appointments.php");
    exit();
}

$search = "";

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $result = mysqli_query(
        $conn,
        "SELECT * FROM appointments
        WHERE patient_name LIKE '%$search%'"
    );
}
else
{
    $result = mysqli_query(
        $conn,
        "SELECT * FROM appointments"
    );
}

$count = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM appointments"
);

$total = mysqli_fetch_assoc($count);
?>

<!DOCTYPE html>
<html>
<head>
<title>Appointments List</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    padding:30px;

    background:
    linear-gradient(
        rgba(0,0,0,0.45),
        rgba(0,0,0,0.45)
    ),
    url('https://images.unsplash.com/photo-1587351021759-3e566b6af7cc?auto=format&fit=crop&w=1600&q=80');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.container{
    width:95%;
    max-width:1250px;
    margin:auto;

    background:rgba(255,255,255,0.96);

    border-radius:25px;
    padding:35px;

    box-shadow:0 20px 50px rgba(0,0,0,.3);
}

h1{
    text-align:center;
    color:#0f172a;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    color:#64748b;
    margin-bottom:25px;
}

.counter{
    text-align:center;
    font-size:22px;
    font-weight:bold;
    color:#0284c7;
    margin-bottom:25px;
}

.search-box{
    text-align:center;
    margin-bottom:25px;
}

.search-box input{
    width:300px;
    padding:12px;
    border-radius:10px;
    border:1px solid #ccc;
    font-size:15px;
}

.search-box button{
    padding:12px 20px;
    border:none;
    border-radius:10px;
    background:#0284c7;
    color:white;
    cursor:pointer;
    font-weight:bold;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:linear-gradient(
        135deg,
        #0284c7,
        #0ea5e9
    );

    color:white;
    padding:15px;
}

td{
    padding:14px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tr:nth-child(even){
    background:#f8fafc;
}

tr:hover{
    background:#e0f2fe;
}

.delete-btn{
    background:#ef4444;
    color:white;
    padding:8px 12px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.delete-btn:hover{
    background:#dc2626;
}

.back-btn{
    display:block;
    width:250px;

    margin:25px auto 0;

    text-align:center;
    text-decoration:none;

    background:linear-gradient(
        135deg,
        #0284c7,
        #0ea5e9
    );

    color:white;

    padding:14px;
    border-radius:12px;

    font-weight:bold;
}

.back-btn:hover{
    transform:translateY(-2px);
}

</style>
</head>

<body>

<div class="container">

<h1>🏥 CityCare Hospital</h1>

<p class="subtitle">
Appointment Management System
</p>

<div class="counter">
📊 Total Appointments:
<?php echo $total['total']; ?>
</div>

<div class="search-box">

<form method="GET">

<input
type="text"
name="search"
placeholder="Search Patient Name"
value="<?php echo $search; ?>">

<button type="submit">
🔍 Search
</button>

</form>

</div>

<table>

<tr>
<th>ID</th>
<th>Patient Name</th>
<th>Doctor Name</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['patient_name']; ?></td>

<td><?php echo $row['doctor_name']; ?></td>

<td><?php echo $row['appointment_date']; ?></td>

<td><?php echo $row['appointment_time']; ?></td>

<td>

<a
class="delete-btn"
href="?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete Appointment?')">

🗑 Delete

</a>

</td>

</tr>

<?php } ?>

</table>

<a href="dashboard.php" class="back-btn">
⬅ Back to Dashboard
</a>

</div>

</body>
</html>