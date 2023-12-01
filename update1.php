<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $List = $_POST['list'];
    $ID = $_POST['id'];

    $query = "UPDATE tbltodo SET list='$List' WHERE id=$ID";
    mysqli_query($con, $query);

    header("location:todo.php");
    exit(); 
}
?>
