<?php
session_start();
include_once 'config.php';
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
$output = '';
$outgoing_id = $_SESSION['unique_id'];

if (mysqli_num_rows($sql) == 1) {
    $output .= "No users are avaible to chat";
} else if (mysqli_num_rows($sql) > 0) {
    include "data.php";
}

echo $output;
