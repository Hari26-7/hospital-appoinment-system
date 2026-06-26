<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "hospital_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>