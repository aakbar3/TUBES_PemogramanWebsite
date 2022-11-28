<?php
include('conection.php');
$id = $_GET['id'];

$sql = "DELETE FROM tabel_item WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<a href='/tubes/master.php'><button class='btn btn-primary'>Master</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}